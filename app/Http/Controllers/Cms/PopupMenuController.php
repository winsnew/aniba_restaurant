<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Home\EditDesktopRequest;
use App\Http\Requests\Cms\Popup\EditPopupRequest;
use App\Models\Banner;
use App\Models\Popup;
use App\Models\PopupMenu;
use Illuminate\Http\Request;

class PopupMenuController extends Controller
{
    public function index()
    {
        $content = Popup::first();
        $background = Banner::where('section', 9)->first();
        return view('cms.pages.popup_menu.index',compact('content', 'background'));   
    }
    public function edit_popup(EditPopupRequest $request)
    {
        $popup = Popup::first();

        if($popup){
            $popup->update($request->post());
        }else{
            Popup::create($request->post());
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set popup'
        ], 200);
    }

    public function edit_background(EditDesktopRequest $request, $type)
    {
        if($type == 1){
            $file = $request->file('file_img');
            $filename = 'section-9-background.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/background', $filename
            );
    
            Banner::updateOrCreate(
                ['section' => 9, 'content' => 1],
                ['url' => $path, 'type' => 1]
            );
        }else{
            Banner::updateOrCreate(
                ['section' => 9, 'content' => 1],
                ['url' => $request->bg_color, 'type' => $type]
            );
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set private image'
        ], 200);
    }

}
