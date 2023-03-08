<?php

namespace app\Http\Controllers\Admin\User;//

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;


class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $roles=User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));
    }
}
