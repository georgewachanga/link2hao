<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\Blog;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment(array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'job' => $request->get('job'),
            'comment' => $request->get('comment'),
        ));
        $blog_id = $request->get('blog_id');
        $blog = Blog::find($blog_id);
        $blog->comments()->save($comment);

        return back()->with('success','we got your comment');
    }

}
