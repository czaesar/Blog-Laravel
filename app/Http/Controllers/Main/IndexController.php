<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('main.index');// возвращаем view
    }//однометодные котроллеры без action(я не ебу что это на данном этапе развития)
    //invoke означает когда мы будет обращаться к контроллеру в web.php, автоматом будет вызываться этот метод
    // который будет подразуменяться action по умолчанию(какого хуя)
}
