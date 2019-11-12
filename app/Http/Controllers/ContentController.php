<?php

namespace App\Http\Controllers;

use App\post;
use App\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContentController extends Controller
{
    public function addpost(Request $addpost)
    {
        // dd($addpost->input());return;
        $post = new post;
        $post->nama = $addpost->input('nama');
        $post->isi= $addpost->input('isi');
        $post->save();

        $data = post::all();
        $comment = comment::all();
        return view('content')->with('isi',$data)->with('comment', $comment);
    }
    public function comment(Request $addcomment)
    {
        // dd($addpost->input());return;
        $post = new comment;
        $post->id_post = $addcomment->input('id_post');
        $post->nama = $addcomment->input('nama');
        $post->isi= $addcomment->input('isi');
        $post->save();

        $data = post::all();
        $comment = comment::all();
        return view('content')->with('isi',$data)->with('comment', $comment);
    }

    public function comment_data($id){
        $data = post::findOrFail($id);
        return view('comment')->with('isi',$data);
    }

    public function delete_comment($id){
        $comment = comment::findOrFail($id);
        $comment->delete();

        $data = post::all();
        $comment = comment::all();
        return view('content')->with('isi',$data)->with('comment', $comment);
    }
    public function delete_data($id){
        $data = post::findOrFail($id);
        $data->delete();

        $data = post::all();
        $comment = comment::all();
        return view('content')->with('isi',$data)->with('comment', $comment);
    }

    public function update_data($id){
        $data = post::findOrFail($id);
        
        return view('edit')->with('data',$data);
    }

    public function show_update_data(Request $editdata, $id){
        // dd($editdata->input()); return;
        $data = post::findOrFail($id);
        $data->nama = $editdata->input('nama');
        $data->isi= $editdata->input('isi');
        $data->save();

        $data = post::all();
        $comment = comment::all();
        return view('content')->with('isi',$data)->with('comment', $comment);
    }
}