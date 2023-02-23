<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
class UpdateController extends Controller
{
    public function  __invoke(UpdateRequest $request,Post $post)
    {
        $date =$request->validated();
        $post->update($date);
        return view('admin.post.show', compact('post'));
    }
}
