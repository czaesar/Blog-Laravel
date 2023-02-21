<?php

namespace app\Http\Controllers\Admin\Category;//тут был main, меняем на admin  и Category

use App\Http\Controllers\Controller;
use App\Models\Category;


class ShowController extends Controller
{
    public function __invoke(Category $category)
    {

        return view(' admin.categories.show', compact('category'));//вторым аргументом передаем
    }
}
