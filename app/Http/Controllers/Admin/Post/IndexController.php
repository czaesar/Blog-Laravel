<?php

namespace app\Http\Controllers\Admin\Post;//тут был main, меняем на admin  и Category

use App\Http\Controllers\Controller;

use App\Models\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
        $post=Post::all();//получаем список категорий
        return view(' admin.post.index', compact('post'));//вторым аргументом передаем
    }
}
