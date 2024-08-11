<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\ContactUs\EditContactRequest;
use App\Http\Requests\Cms\Home\EditDesktopRequest;
use App\Models\Banner;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contact_us = ContactUs::first();
        $desktop = Banner::where('section', 7)->where('content', 1)->first();
        $mobile = Banner::where('section', 7)->where('content', 2)->first();
        return view('cms.pages.contact_us.index', compact('contact_us', 'desktop', 'mobile'));
    }

    public function edit_contact(EditContactRequest $request)
    {
        $contact_us = ContactUs::first();

        if($contact_us){
            $contact_us->update($request->post());
        }else{
            ContactUs::create($request->post());
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set contact us'
        ], 200);
    }

    public function edit_background(EditDesktopRequest $request, $content, $type)
    {
        if($type == 1){
            $file = $request->file('file_img');
            $filename = 'section-7-'.(($content == 1)? 'desktop': 'mobile').'-background.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/background', $filename
            );
    
            Banner::updateOrCreate(
                ['section' => 7, 'content' => $content],
                ['url' => $path, 'type' => 1]
            );
        }else{
            Banner::updateOrCreate(
                ['section' => 7, 'content' => 1],
                ['url' => $request->bg_color, 'type' => $type]
            );
            Banner::updateOrCreate(
                ['section' => 7, 'content' => 2],
                ['url' => $request->bg_color, 'type' => $type]
            );
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set contact us background'
        ], 200);
    }
}
