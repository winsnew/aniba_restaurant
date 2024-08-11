<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Home\EditDesktopRequest;
use App\Http\Requests\Cms\Home\EditFaviconRequest;
use App\Http\Requests\Cms\Home\EditLogoRequest;
use App\Models\Banner;
use App\Models\Logo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $desktop = Banner::where('section', 1)->where('content', 1)->first();
        $mobile = Banner::where('section', 1)->where('content', 2)->first();
        $logo = Logo::first();
        $favicon = Banner::where('section', 1)->where('content', 3)->first();        
        // dd($data);
        return view('cms.pages.home.index', compact('desktop', 'mobile', 'logo', 'favicon'));
    }

    public function edit_logo(EditLogoRequest $request)
    {
        $data = [
            'link' => $request->link
        ];
        $logo = Logo::first();
        if($request->logo){
            $file = $request->file('logo');
            $filename = 'logo.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/logo', $filename
            );
            $data = array_merge($data, ['logo' => '/storage/'.$path]);
        }else{
            if(!$logo){
                $data = array_merge($data, ['logo' => '/images/foragers_web.png']);
            }
        }
    
        if($request->logo_footer){
            $file = $request->file('logo_footer');
            $filename = 'logo_footer.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/logo', $filename
            );
            $data = array_merge($data, ['logo_footer' => '/storage/'.$path]);
        }else{
            if(!$logo){
                $data = array_merge($data, ['logo_footer' => '/images/symbol.png']);
            }
        }

        if(!$logo){
            Logo::create($data);
        }else{
            $logo->update($data);
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set logo'
        ], 200);
    }

    public function edit_background(EditDesktopRequest $request, $content, $type)
    {
        if($type == 1){
            $file = $request->file('file_img');
            $filename = 'section-1-'.(($content == 1)? 'desktop': 'mobile').'-background.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/background', $filename
            );
            Banner::updateOrCreate(
                ['section' => 1, 'content' => $content],
                ['type' => $type, 'url' => $path]
            );
        }else{
            Banner::updateOrCreate(
                ['section' => 1, 'content' => 1],
                ['url' => $request->bg_color, 'type' => $type]
            );
            Banner::updateOrCreate(
                ['section' => 1, 'content' => 2],
                ['url' => $request->bg_color, 'type' => $type]
            );
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set home background'
        ], 200);
    }

    public function edit_favicon(EditFaviconRequest $request)
    {
        $favicon = Banner::where('section', 1)->where('content', 3)->first();
        $file = $request->file('file_img');
        $filename = 'favicon.'.$file->getClientOriginalExtension();
        $path = $file->storeAs(
            'images/favicon', $filename
        );

        if(!$favicon){
            Banner::create([
                'section' => 1,
                'content' => 3,
                'type' => 1,
                'url' => '/storage/'.$path
            ]);
        }else{
            $favicon->update([
                'url' => '/storage/'.$path
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Success set favicon'
        ], 200);
    }
    
}
