<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Colocation extends Model
{
    use HasFactory;

    protected $fillable = ['name','status'];

    public function users(){
        return $this->belongsToMany(User::class,'membership')
        ->withPivot('role','joined_at','left_at')->withTimestamps();
    }
    public function memberships(){
        return $this->hasMany(Membership::class);
    }
    public function categories(){
        return $this->hasMany(Category::class);
    }
    public function expenses(){
        return $this->hasMany(Expense::class);
    }
    public function push()
    {
        return $this->hasMany(Payment::class);
    }
}
