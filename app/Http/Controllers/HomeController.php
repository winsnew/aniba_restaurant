<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Mail\MessageMail;
use App\Models\Banner;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\OperationHour;
use App\Models\OurBar;
use App\Models\OurStory;
use App\Models\OurStoryContent;
use App\Models\OurTeam;
use App\Models\Popup;
use App\Models\Press;
use App\Models\Gallery;
use App\Models\PrivateEvent;
use App\Models\Question;
use App\Models\Reservation;
use App\Models\Submenus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $background = Banner::get()->groupBy('section')->map(function($item, $key){
            return $item->sortBy('content')->keyBy('content');
        });
        $our_story = OurStory::first();
        // $our_story_content = OurStoryContent::all();
        $chef = OurTeam::whereIn('type', [1,2])->get()->groupBy('type');
        $team = OurTeam::whereIn('type', [3,4])->get()->groupBy('type');
        $our_bar = OurBar::first();
        $opening = OperationHour::first();
        $private_event = PrivateEvent::get()->groupBy('content');
        $contact_us = ContactUs::first();
        $logo = Logo::first();
        $popup = Popup::first();
        $press = Press::all();
        //gallery test//
        $category = Category::all();
        $gallery = Gallery::all();
        $reservation = Reservation::first();
        $navbar = Menu::all();
        $submenu = Submenus::orderBy('order')->get();
        // dd($background);
       
        return view('front.pages.index', [
            'navbar' => $navbar,
            'submenu' => $submenu,
            'background' => $background,
            'our_story' => $our_story,
            // 'our_story_content' => $our_story_content,
            'chef' => $chef,
            'team' => $team,
            'our_bar' => $our_bar,
            'opening' => $opening,
            'private_event' => $private_event,
            'contact_us' => $contact_us,
            'logo' => $logo,
            'popup' => $popup,
            'press' => $press,
            'reservation' => $reservation,
            'gallery' => $gallery,
            'category' => $category
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
        $email = ContactUs::select('email')->first();
        try {
            // Mail::to('aziznaufal876@gmail.com')->send(new MessageMail($request));
            Mail::to($email? $email->email : 'hello@aniba.com.sg')->send(new MessageMail($request));
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
