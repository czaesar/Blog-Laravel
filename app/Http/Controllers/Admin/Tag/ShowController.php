<?php

namespace app\Http\Controllers\Admin\Tag;//тут был main, меняем на admin  и Category

use App\Http\Controllers\Controller;

use App\Models\Tag;


class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {

        return view(' admin.tag.show', compact('tag'));//вторым аргументом передаем
    }
}
