<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Home\EditDesktopRequest;
use App\Http\Requests\Cms\OurTeam\EditChefsRequest;
use App\Models\Banner;
use App\Models\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OurChefsController extends Controller
{
    public function index()
    {
        $chef1 = OurTeam::where('type', 1)->first();
        $chef2 = OurTeam::where('type', 2)->first();
        $imageChef = Banner::where('section', 2)->orderBy('content')->get()->keyBy('content');

        return view('cms.pages.our_chefs.index', compact('chef1', 'chef2', 'imageChef'));
    }

    public function edit_chef(EditChefsRequest $request, $chef)
    {
        $data = [
            'type' => $chef,
            'name' => $request->name,
            'position' => $request->position,
            'quote' => $request->quote,
            'quote_mobile' => $request->quote_mobile,
            'bio' => $request->bio
        ];

        $our_chef = OurTeam::where('type', $chef)->first();
        
        if($our_chef){
            $our_chef->update($data);
        }else{
            OurTeam::create($data);
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set chefs'
        ], 200);
    }

    public function edit_image(EditDesktopRequest $request, $content)
    {
        $file = $request->file('file_img');
        $filename = 'section-2-image-'.$content.'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs(
            'images/background', $filename
        );

        Banner::updateOrCreate(
            ['section' => 2, 'content' => $content],
            ['url' => $path, 'type' => 1]
        );

        return response()->json([
            'success' => true,
            'message' => 'Success set chef Image'
        ], 200);
    }

    public function edit_background(EditDesktopRequest $request, $type)
    {
        if($type == 1){
            $file = $request->file('file_img');
            $filename = 'section-2-image-5.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/background', $filename
            );
    
            Banner::updateOrCreate(
                ['section' => 2, 'content' => 5],
                ['url' => $path, 'type' => 1]
            );
        }else{
            Banner::updateOrCreate(
                ['section' => 2, 'content' => 5],
                ['url' => $request->bg_color, 'type' => 2]
            );
        }
        return response()->json([
            'success' => true,
            'message' => 'Success set chef background'
        ], 200);
    }
}
