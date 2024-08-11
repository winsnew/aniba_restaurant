<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\OurStory\ContentRequest;
use App\Http\Requests\Cms\OurStory\TitleRequest;
use App\Models\OurStory;
use App\Models\OurStoryContent;
use Illuminate\Http\Request;

class OurStoryController extends Controller
{
    // OurStory
    public function index()
    {
        $title = "Our Story";
        $our_story = OurStory::first();
        // $content1 = OurStoryContent::where('content', 1)->first();
        // $content2 = OurStoryContent::where('content', 2)->first();
        // $content3 = OurStoryContent::where('content', 3)->first();
        return view('cms.pages.our_story.index', [
            'title' => $title,
            'our_story' => $our_story,
            // 'content1' => $content1,
            // 'content2' => $content2,
            // 'content3' => $content3
        ]);
    }

    public function edit_title(TitleRequest $request)
    {
        // OurStory::updateOrCreate()
        $title = OurStory::first();
        if($title){
            $title->update([
                "title1" => $request->title1,
                "title2" => $request->title2,
                "top_desc1" => $request->top_desc1,
                "top_desc2" => $request->top_desc2,
                "desc" => $request->desc
            ]);
        }else{
            OurStory::create([
                "title1" => $request->title1,
                "title2" => $request->title2,
                "top_desc1" => $request->top_desc1,
                "top_desc2" => $request->top_desc2,
                "desc" => $request->desc
            ]);
        }
        // dd($request->all());

        return response()->json([
            'success' => true,
            'message' => "Success set our story title"
        ],200);
    }

    public function edit_content(ContentRequest $request, $content)
    {
        // $storyContent = OurStoryContent::where('content', $content)->first();
        // if($storyContent){
        //     $storyContent->update([
        //         'description' => $request->desc
        //     ]);
        // }else{
        //     OurStoryContent::create([
        //         'content' => $content,
        //         'description' => $request->desc
        //     ]);
        // }
        OurStoryContent::updateOrCreate(
            ['content' => $content],
            ['content' => $content, 'description' => $request->desc]
        );

        return response()->json([
            'success' => true,
            'message' => "Success set our story content"
        ],200);
    }

    public function destroy()
    {

    }

    // Content
    public function content_index(OurStory $id)
    {
        $id_parent = $id->id;
        $title = "Our Story";
        $our_story_content = OurStoryContent::all();
        return view('cms.pages.our_story.our_story_content.index', [
            'title' => $title,
            'our_story_content' => $our_story_content,
            'id_parent' => $id_parent,
        ]);
    }

    public function content_form(OurStory $id, OurStoryContent $our_story)
    {
        $id_parent = $id->id;
        $title = $our_story->exists ? 'Edit Our Story' : 'Add Our Story';

        return view('cms.pages.our_story.our_story_content.form', [
            'title' => $title,
            'data' => $our_story,
            'id_parent' => $id_parent,
        ]); 
    }

    public function content_save(OurStory $id, Request $request)
    {
        $_id = $request->input('id');
        $id_parent = $id->id;
        if ($_id) {
            $our_story = OurStoryContent::find($_id);
                $our_story->country = $request['country'];
                $our_story->id_our_story = $id_parent;
                $our_story->top_description = $request['top_description'];
                $our_story->description = $request['description'];
                $our_story->save();
                return redirect()->intended('admin/our-story/content/'.$id_parent);
        } else {
            $our_story = new OurStoryContent();
            $our_story->country = $request['country'];
            $our_story->id_our_story = $id_parent;
            $our_story->top_description = $request['top_description'];
            $our_story->description = $request['description'];
            $our_story->save();
            return redirect()->intended('admin/our-story/content/'.$id_parent);
        }
    }
}
