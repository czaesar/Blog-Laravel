<?php

namespace app\Http\Controllers\Admin\Tag;//тут был main, меняем на admin  и Category

use App\Http\Controllers\Controller;

use App\Models\Tag;


class IndexController extends Controller
{
    public function __invoke()
    {
        $tags=Tag::all();//получаем список тегов
        return view(' admin.tag.index', compact('tags'));//вторым аргументом передаем
    }
}
