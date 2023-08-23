<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        // query builders
        // $posts = DB::select("SELECT * FROM posts WHERE id= :id",
        // [
        //     'id' => 3
        // ]);
        $posts = DB::table("posts")
                    // -----DELETE------
                    ->where('id', '=', 5)
                    ->delete();

                    // ---------------
                    // -----UPDATE-----
                    // ->where('id', '=', 5)
                    // ->update([
                    //     'title' => 'haha',
                    //     'body' => 'A new post sad'
                    // ]);
                    // -------------------
                    // -----INSERT------
                    // ->insert([
                    //     'title' => 'haha',
                    //     'body' => 'A new post haha'
                    // ]);
                    //--------------------
                    // ->max('id');
                    // ->min('id');
                    // ->sum('id');
                    // ->avg('id');
                    // ->count(); // dem xem co bao nhieu ban ghi
                    // ->find(3); // find by id
                    // ->whereNotNull("body")
                    // ->latest()
                    // ->oldest()
                    // ->orderBy("id", "asc")
                    // ->whereBetween("id", [1, 3])
                    // ->where("id", '>', 1)
                    // ->orWhere('id', '>', 2)
                    // ->select('title')
                    // ->first();
                    // ->get();
        dd($posts); // dd = die dump
        // return view('posts.index');
    }
}
