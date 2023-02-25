<?php

namespace app\Http\Controllers\Admin\Post;//

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data= $request->validated();
       $post= $this->service->update($data,$post);


        return view(' admin.post.show', compact('post'));
    }
}
