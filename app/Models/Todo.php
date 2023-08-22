<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Todo as ModelsTodo;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'checked'];
}
