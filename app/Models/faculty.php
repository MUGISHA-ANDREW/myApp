<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    //
    protected $fillable = ['name', 'faculty_code', 'department', 'description'];


    public function faculty()
{
    return $this->belongsTo(Faculty::class);
}

}
