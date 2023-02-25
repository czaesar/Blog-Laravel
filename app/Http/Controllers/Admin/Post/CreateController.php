<?php

namespace app\Http\Controllers\Admin\Post;//

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;


class CreateController extends BaseController
{
    public function __invoke()
    {

        $categories=Category::all();
        $tags=Tag::all();
        return view(' admin.post.create', compact('categories', 'tags'));
    }
}
