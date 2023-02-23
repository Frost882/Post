<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function  __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::put('/images',$data['preview_image']);
        $data['main_image'] = Storage::put('/images',$data['main_image']);

        Post::Create($data);
        return redirect()->route('post.index');
    }
}
