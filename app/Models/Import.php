<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'roll_no',
        'class',
        'department',
        'title',
        'file_id'
    ];

    public function files(){
        return $this->hasMany(File::class);
    }

//    public function getFiles(){
//        return $this->
//    }
}
