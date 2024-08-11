<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Home\EditDesktopRequest;
use App\Http\Requests\Cms\PrivateEvent\EditEventRequest;
use App\Models\Banner;
use App\Models\PrivateEvent;
use Illuminate\Http\Request;

class PrivateEventController extends Controller
{
    public function index()
    {
        $content1 = PrivateEvent::where('content', 1)->first();
        $content2 = PrivateEvent::where('content', 2)->first();
        $image = Banner::where('section', 6)->where('content', 1)->first();
        $desktop = Banner::where('section', 6)->where('content', 2)->first();
        $mobile = Banner::where('section', 6)->where('content', 3)->first();
        return view('cms.pages.private_events.index', compact('content1', 'content2', 'image', 'desktop', 'mobile'));
    }

    public function edit_content(EditEventRequest $request, $content)
    {
        PrivateEvent::updateOrCreate(
            ['content' => $content],
            ['content' => $content,'title' => $request->title, 'description' => $request->desc, 'contact_us_link' => $request->contact_us_link]
        );

        return response()->json([
            'success' => true,
            'message' => 'Success set '.($content == 1?'private event': 'private room')
        ], 200);
    }

    public function edit_background(EditDesktopRequest $request, $content, $type)
    {
        
        if($type == 1){
            $file = $request->file('file_img');
            $filename = 'section-6-'.$content.'-background.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/background', $filename
            );
    
            Banner::updateOrCreate(
                ['section' => 6, 'content' => $content],
                ['url' => $path, 'type' => 1]
            );
        }else{
            Banner::updateOrCreate(
                ['section' => 6, 'content' => 2],
                ['url' => $request->bg_color, 'type' => $type]
            );
            Banner::updateOrCreate(
                ['section' => 6, 'content' => 3],
                ['url' => $request->bg_color, 'type' => $type]
            );
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set private image'
        ], 200);
    }
}
