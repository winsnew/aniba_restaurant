<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Metadata\MetadataRequest;
use App\Models\Metadata;
use Illuminate\Http\Request;

class MetadataController extends Controller
{
    public function index()
    {
        $meta = Metadata::first();

        return view('cms.pages.metadata.index', compact('meta'));
    }

    public function edit_metadata(MetadataRequest $request)
    {
        $meta = Metadata::first();
        $data = $request->except('image');

        if($request->image){
            $file = $request->file('image');
            $filename = 'meta-image.' . $file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/meta', $filename
            );
            $data = array_merge($data, ['image' => $path]);
        }

        if($meta){
            $meta->update($data);
        }else{
            Metadata::create($data);
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set metadata'
        ], 200);
    }
}
