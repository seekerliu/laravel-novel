<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $items = Video::paginate();
        return view('videos.index')->with('items', $items);
    }

    public function show($id)
    {
        $item = Video::find($id);
        return view('videos.show')->with('item', $item);
    }
}
