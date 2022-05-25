<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){

        //dd ($request -> all());
        //return $request -> all();

        //모델의 DB 객체를 연결한다.
        /*
        $blog = new Blog;

        $blog->user_id = $request -> user() ->id;
        $blog->title = $request ->title;
        $blog->description = $request ->description;
        $blog->save();
        */


        Blog::create([
            'user_id' => $request -> user() ->id,
            'title' => $request ->title,
            'description' => $request ->description,
        ]
        );

        return redirect() -> back();

    }
}
