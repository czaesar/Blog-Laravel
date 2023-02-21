<?php

namespace app\Http\Controllers\Admin\Tag;//

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;

use App\Models\Tag;


class DeleteController extends Controller
{
    public function __invoke( Tag $tag)
    {

       $tag->delete();
       return redirect()->route("admin.tag.index");
    }
}
