<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_detail extends Model
{
    use HasFactory;
    protected $table='user_details';
    protected $primaryKey='id';

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
