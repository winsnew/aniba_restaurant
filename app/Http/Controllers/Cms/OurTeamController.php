<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Home\EditDesktopRequest;
use App\Http\Requests\Cms\OurTeam\EditTeamRequest;
use App\Models\Banner;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        $team1= OurTeam::where('type', 3)->first();
        $team2= OurTeam::where('type', 4)->first();
        $imageTeam = Banner::where('section', 3)->orderBy('content')->get()->keyBy('content');
        return view('cms.pages.our_teams.index', compact('team1', 'team2', 'imageTeam'));
    }

    public function edit_team(EditTeamRequest $request, $team)
    {
        $data = [
            'type' => $team,
            'name' => $request->name,
            'position' => $request->position,
            'bio' => $request->bio,
            'quote_mobile' => $request->quote_mobile
        ];
        $our_team = OurTeam::where('type', $team)->first();

        if($our_team){
            $our_team->update($data);
        }else{
            OurTeam::create($data);
        }

        return response()->json([
            'success' => true,
            'message' => 'Success set team'
        ], 200);
    }
    public function edit_image(EditDesktopRequest $request, $content)
    {
        $file = $request->file('file_img');
        $filename = 'section-3-image-'.$content.'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs(
            'images/background', $filename
        );

        Banner::updateOrCreate(
            ['section' => 3, 'content' => $content],
            ['url' => $path, 'type' => 1]
        );

        return response()->json([
            'success' => true,
            'message' => 'Success set team image'
        ], 200);
    }

    public function edit_background(EditDesktopRequest $request, $type)
    {
        if($type == 1){
            $file = $request->file('file_img');
            $filename = 'section-3-image-5.'.$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'images/background', $filename
            );
    
            Banner::updateOrCreate(
                ['section' => 3, 'content' => 5],
                ['url' => $path, 'type' => 1]
            );
        }else{
            Banner::updateOrCreate(
                ['section' => 3, 'content' => 5],
                ['url' => $request->bg_color, 'type' => 2]
            );
        }
        return response()->json([
            'success' => true,
            'message' => 'Success set team background'
        ], 200);
    }
}
