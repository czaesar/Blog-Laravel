<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $table= "post_tags"; // это правило шоб мы могли изменять данные в таблице
    protected $guarded= false;
}
