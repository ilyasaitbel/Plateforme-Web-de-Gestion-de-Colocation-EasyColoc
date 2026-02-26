<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
