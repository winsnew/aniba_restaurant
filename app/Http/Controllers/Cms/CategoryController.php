<?php

namespace App\Http\Controllers\Cms;


use App\Http\Requests\Cms\Gallery\CategoryPositionRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Cms\Gallery\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $categories = Category::select('id', 'name', 'order')->orderBy('order')->get();
        return view("cms.pages.gallery.category", compact('categories', 'category'));
    }
    public function create(CategoryRequest $request)
    {
        $order = Category::count();
        Category::create([
            'name' => $request->name,
            'order' => $order
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Success set category'
        ], 200);
    }
    public function update(CategoryRequest $request, $id)
    {   
        $category = Category::find($id);
        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found',
            ], 404);
        }
        $category->update([
            'name' => $request->name,
            // Tambahkan kolom lainnya sesuai kebutuhan
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully',
        ], 200);

    }

    public function delete($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found',
            ], 404);
        }

        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully',
        ], 200);
    }
    public function changeCategoryPosition(Request $request)
    {
        foreach($request->order as $order) {
            Category::where('id', $order['id'])->update([
                'order' => $order['position']
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set Category'
        ]);
    }
}
