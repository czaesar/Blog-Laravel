<?php

namespace app\Http\Controllers\Admin\User;//тут был main, меняем на admin  и Category

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke()
    {
        $users=User::all();//получаем список категорий
        return view(' admin.user.index', compact('users'));//вторым аргументом передаем
    }
}
