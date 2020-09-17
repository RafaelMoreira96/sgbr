<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perca extends Model
{
    use HasFactory;

    protected $fillable = ['dataPerca', 'vendedor'];
}
