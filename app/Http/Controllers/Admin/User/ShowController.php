<?php

namespace app\Http\Controllers\Admin\User;//тут был main, меняем на admin  и Category

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;


class ShowController extends Controller
{
    public function __invoke(User $user)
    {

        return view(' admin.user.show', compact('user'));//вторым аргументом передаем
    }
}
