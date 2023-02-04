<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function  __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Category::FirsOrCreate($data);

        return redirect()->route('category.index');
    }
}
https://laravel.com/docs/5.6/eloquent#mass-assignment
