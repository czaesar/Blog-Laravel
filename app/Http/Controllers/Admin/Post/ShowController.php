<?php

namespace app\Http\Controllers\Admin\Post;//тут был main, меняем на admin  и Category

use App\Http\Controllers\Controller;

use App\Models\Post;


class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {

        return view(' admin.post.show', compact('post'));//вторым аргументом передаем
    }
}
