<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Home\EditDesktopRequest;
use App\Http\Requests\Cms\OperationHour\EditOperationRequest;
use App\Models\Banner;
use App\Models\OperationHour;
use Illuminate\Http\Request;

class OperationHourController extends Controller
{
    public function index()
    {
        $operation = OperationHour::first();
        $desktop = Banner::where('section', 5)->where('content', 1)->first();
        $mobile = Banner::where('section', 5)->where('content', 2)->first();
        return view('cms.pages.operation_hours.index', compact('operation', 'desktop', 'mobile'));
    }

    public function edit_operation(EditOperationRequest $request)
    {
        $operation = OperationHour::first();
        if($operation){
            $operation->update($request->post());
        }else{
            OperationHour::create($request->post());
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set operation hour'
        ], 200);
    }

    public function edit_background(EditDesktopRequest $request, $content, $type)
    {
        if($type == 1){
            $file = $request->file('file_img');
            $filename = 'section-5-'.(($content == 1)? 'desktop': 'mobile').'-background.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/background', $filename
            );
    
            Banner::updateOrCreate(
                ['section' => 5, 'content' => $content],
                ['url' => $path, 'type' => 1]
            );
        }else{
            Banner::updateOrCreate(
                ['section' => 5, 'content' => 1],
                ['url' => $request->bg_color, 'type' => $type]
            );
            Banner::updateOrCreate(
                ['section' => 5, 'content' => 2],
                ['url' => $request->bg_color, 'type' => $type]
            );
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set bar background'
        ], 200);
    }
}
