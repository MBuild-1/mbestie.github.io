<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class HomeVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = HomeVideo::all();
        return view('dashboard.homevideo.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.homevideo.homevideo_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'video'  => 'mimes:mp4'

        ]);
        $Homevideo = new HomeVideo();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('video/uploads/home/'), $filename);
            $Homevideo->video = $filename;
        }
        $Homevideo->save();
        return redirect('admin/videos')->with('success', 'Data successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videos = HomeVideo::find($id);
        return view('dashboard.homevideo.homevideo_update', compact('videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'video'  => 'mimes:mp4'
        ]);
        $video = HomeVideo::find($id);
        if ($request->file('video')) {
            $path = 'video/uploads/home/' . $video->video;
            if (file::exists($path)) {
                file::delete($path);
            }
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('video/uploads/home/', $filename);
            $video->video = $filename;
        } else {
            $video->video = $video->video;
        }
        $video->save();
        return redirect('admin/videos')->with('success', "Data successfuly updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videos = HomeVideo::find($id);
        $path = 'video/uploads/home/' . $videos->video;
        if (File::exists($path)) {
            File::delete($path);
        }
        $videos->delete();
        return redirect('admin/videos')->with('success', 'Data successfully deleted');
    }
}
