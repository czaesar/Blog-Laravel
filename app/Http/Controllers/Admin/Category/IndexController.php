<?php

namespace app\Http\Controllers\Admin\Category;//тут был main, меняем на admin  и Category

use App\Http\Controllers\Controller;
use App\Models\Category;


class IndexController extends Controller
{
    public function __invoke()
    {
        $categories=Category::all();//получаем список категорий
        return view(' admin.categories.index', compact('categories'));//вторым аргументом передаем
    }
}
