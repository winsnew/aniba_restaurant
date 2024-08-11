<?php

namespace App\Http\Controllers\Cms;


use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Gallery\CategoryRequest;
use App\Models\Gallery;
use Illuminate\Support\Str;
use App\Http\Requests\Cms\Gallery\GalleryRequest;
use App\Models\Category;
use Illuminate\Http\Request;



class GalleryController extends Controller
{
    public function index(Category $category)
    {   
        // $show = Gallery::all();
        $galleries = Gallery::where('category_id', $category->id)->get();
        return view("cms.pages.gallery.index", compact('galleries', 'category'));
    }
    
    public function store(GalleryRequest $request, Category $category)
    {
        
        $title = $request->title;
        $image = $request->file('image');

        // Generate a slug for the title
        $slug = Str::slug($title);

        // Store the image in the category-specific folder
        $folderPath = 'galleries/' . Str::slug($category->name);
        $imageName = $slug . '.' . $image->getClientOriginalExtension();
        $image->storeAs($folderPath, $imageName);

        // Save gallery data to the database
        Gallery::create([
            'title' => $title,
            'image' => $folderPath . '/' . $imageName,
            'category_id' => $category->id,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Success set gallery'
        ], 200);
    }

    public function update(CategoryRequest $request, $id)
    {
        

        return response()->json([
            'success' => true,
            'message' => 'Success set gallery'
        ], 200);
    }
    public function delete($id)
    {
        $gallery = Gallery::find($id);
        unlink(storage_path('app/'.$gallery->image));
        $gallery->delete();

        return response()->json([
            'success' => true,
            'message' => 'Success delete gallery'
        ]);
    }
}
