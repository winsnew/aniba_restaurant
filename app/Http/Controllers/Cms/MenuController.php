<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Menu\MenuReqeust;
use App\Http\Requests\Cms\Menu\SubmenuOrderListRequest;
use App\Http\Requests\Cms\Menu\SubmenuRequest;
use App\Models\Menu;
use App\Models\Submenus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $submenu = Submenus::select('id', 'name', 'order', 'file_name')->orderBy('order')->get();
        return view('cms.pages.menu.index', compact('menu', 'submenu'));
    }

    public function update(Menu $menu, MenuReqeust $request)
    {
        $menu->update($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Success set navbar'
        ], 200);
    }

    public function createSubmenu(SubmenuRequest $request)
    {
        $order = Submenus::count();
        $data = $request->except('menu_file');
        $file = $request->file('menu_file');
        // $filename = $file->getClientOriginalName();
        $filename = 'menu-'.$request->name.'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('menus', $filename);
        $data = array_merge( $data, [
            'file_name' => $filename,
            'url' => 'storage/'.$path,
            'order' => $order+1
        ]);

        Submenus::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Success set Menu'
        ]);
    }

    public function updateSubmenu(Submenus $submenu, SubmenuRequest $request)
    {
        $data = $request->except('menu_file');
        if($request->menu_file){
            $file = $request->file('menu_file');
            $filename = 'menu-'.$request->name.'.'.$file->getClientOriginalExtension();
            // $filename = $file->getClientOriginalName();
            if(File::exists($submenu->url)){
                Storage::delete($submenu->url);
            }
            $path = $file->storeAs(
                'menus', $filename
            );
            $data = array_merge($data, [
                'file_name' => $filename,
                'url' => 'storage/'.$path
            ]);
        }

        $submenu->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Success set Menu'
        ]);

    }

    public function deleteSubmenu(Submenus $submenu)
    {
        if (File::exists($submenu->url)) {
            File::delete($submenu->url);
        }

        $submenu->delete();

        $submenu = Submenus::select('id', 'order')->orderBy('order')->get();
        foreach ($submenu as $index => $item) {
            Submenus::where('id', $item->id)->update([
                'order' => $index+1
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set Menu'
        ]);
    }

    public function changeSubmenuList(SubmenuOrderListRequest $request)
    {
        foreach ($request->order as $order) {
            Submenus::where('id', $order['id'])->update([
                'order' => $order['position']
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set Menu'
        ]);
    }
}
