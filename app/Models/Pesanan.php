<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
