<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    //

    public function index() {

        $comments = Comment::all();

        return view('comments', [ 'comments' => $comments ] );
    }

    public function add(Request $request) {

        $messages = [
            'min' => 'Минимальный размер этого поля :min символа.',
            'max' => 'Максимальный размер этого поля :max символа.',
        ];

        $this->validate($request, [
            'name' => 'required|max:255|min:3',
            'comment' => 'required|max:255|min:5',
        ], $messages);

        $input = $request->all();

        $comment = new Comment;
        $comment->user_name = $input['name'];
        $comment->text = $input['comment'];
        $comment->save();

        $comments = Comment::all();

        return view('comments', [ 'comments' => $comments ] );


    }

}
