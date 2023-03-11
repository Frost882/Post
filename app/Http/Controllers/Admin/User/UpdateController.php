<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
class UpdateController extends Controller
{
    public function  __invoke(UpdateRequest $request,User $user)
    {
        $date =$request->validated();
        $user->update($date);
        return view('admin.user.show', compact('user'));
    }
}

