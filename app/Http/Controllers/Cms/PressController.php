<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Home\EditDesktopRequest;
use App\Http\Requests\Cms\Press\CreatePressRequest;
use App\Http\Requests\Cms\Press\EditPressRequest;
use App\Models\Banner;
use App\Models\Press;
use Illuminate\Http\Request;

class PressController extends Controller
{
    public function index()
    {
        $data = Press::all();
        $desktop = Banner::where('section', 8)->where('content', 1)->first();
        $mobile = Banner::where('section', 8)->where('content', 2)->first();
        return view('cms.pages.press.index', compact('data', 'desktop', 'mobile'));
    }

    public function create(CreatePressRequest $request)
    {
        $file = $request->file('image');
        $filename = $request->title .'.'. $file->getClientOriginalExtension();
        $path = $file->storeAs(
            'images/press', $filename
        );
        $data = array_merge($request->except('image'), ['image' => $path]);

        Press::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Success set press'
        ], 200);
    }

    public function update(EditPressRequest $request, $id)
    {
        $data = $request->except('image');
        // dd($data);
        $our_team = Press::find($id);
        if($request->image){

            unlink(storage_path('app/'.$our_team->image));

            $file = $request->file('image');
            $filename = $request->title.'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/press', $filename
            );
            $data = array_merge($data, ['image' => $path]);
        }

        $our_team->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Success set press'
        ], 200);
    }

    public function delete($id)
    {
        $press = Press::find($id);
        unlink(storage_path('app/'.$press->image));
        $press->delete();

        return response()->json([
            'success' => true,
            'message' => 'Success delete press'
        ]);
    }

    public function edit_background(EditDesktopRequest $request, $content, $type)
    {
        if($type == 1){
            $file = $request->file('file_img');
            $filename = 'section-8-'.(($content == 1)? 'desktop': 'mobile').'-background.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/background', $filename
            );
    
            Banner::updateOrCreate(
                ['section' => 8, 'content' => $content],
                ['url' => $path, 'type' => 1]
            );
        }else{
            Banner::updateOrCreate(
                ['section' => 8, 'content' => 1],
                ['url' => $request->bg_color, 'type' => $type]
            );
            Banner::updateOrCreate(
                ['section' => 8, 'content' => 2],
                ['url' => $request->bg_color, 'type' => $type]
            );
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set press background'
        ], 200);
    }
}
