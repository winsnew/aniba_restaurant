<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Mail\MessageMail;
use App\Models\OurStory;
use App\Models\OurStoryContent;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $our_story = OurStory::all();
        $our_story_content = OurStoryContent::all();
       
        return view('front.pages.index', [
            'our_story' => $our_story,
            'our_story_content' => $our_story_content,
            
        ]);
    }

    public function question(QuestionRequest $request)
    {
        // try {
        //     Question::create([
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'question' => $request->question
        //     ]);

        //     return response()->json([
        //         'success' => true,
        //         'message' => "Question has been sent"
        //     ], 200);
        // } catch (\Throwable $th) {
        //     return response()->json([
        //         'success' => false,
        //         'line' => $th->getLine(),
        //         'message' => $th->getMessage()
        //     ], 401);
        // }
        
        try {
            Mail::to('hello@aniba.com.sg')->send(new MessageMail($request));
            return response()->json([
                'success' => true,
                'message' => 'Message successfully sent'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'line' => $th->getLine(),
                'message' => $th->getMessage()
            ], 401);
        }
        
    }
}
