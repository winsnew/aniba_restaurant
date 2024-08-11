<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Home\EditDesktopRequest;
use App\Http\Requests\Cms\OurBar\EditOurBarRequest;
use App\Models\Banner;
use App\Models\OurBar;
use Illuminate\Http\Request;

class OurBarController extends Controller
{
    public function index()
    {
        $our_bar = OurBar::first();
        $desktop = Banner::where('section', 4)->where('content', 1)->first();
        $mobile = Banner::where('section', 4)->where('content', 2)->first();
        return view('cms.pages.our_bar.index', compact('our_bar', 'desktop', 'mobile'));
    }

    public function edit_content(EditOurBarRequest $request)
    {
        $data = $request->except('cocktail_menu');

        $our_bar = OurBar::first();

        if($request->cocktail_menu){
            $file = $request->file('cocktail_menu');
            $filename = 'cocktail-menu.'. $file->getClientOriginalExtension();
            $path = $file->storeAs(
                'our_bar/', $filename
            );
            $data = array_merge($data, [
                'file_name' => $file->getClientOriginalName().'.'.$file->getClientOriginalExtension(),
                'file_path' => 'storage/'.$path
            ]);

        }else{
            if(!$our_bar){
                $data = array_merge($data, [
                    'file_name' => 'Aniba Cocktails Menu.pdf',
                    'file_path' => 'assets/Aniba Cocktails Menu.pdf'
                ]);
            }
        }

        if($our_bar){
            $our_bar->update($data);
        }else{
            OurBar::create($data);
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set Bar'
        ], 200);
    }

    public function edit_background(EditDesktopRequest $request, $content, $type)
    {
        if($type == 1){
            $file = $request->file('file_img');
            $filename = 'section-4-'.(($content == 1)? 'desktop': 'mobile').'-background.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/background', $filename
            );
    
            Banner::updateOrCreate(
                ['section' => 4, 'content' => $content],
                ['url' => $path, 'type' => 1]
            );
        }else{
            Banner::updateOrCreate(
                ['section' => 4, 'content' => 1],
                ['url' => $request->bg_color, 'type' => $type]
            );
            Banner::updateOrCreate(
                ['section' => 4, 'content' => 2],
                ['url' => $request->bg_color, 'type' => $type]
            );
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set bar background'
        ], 200);
    }
}
