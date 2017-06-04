<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = ['name', 'date_of_birth', 'address' , 'complaints']; // untuk mengisi data ke tabel

    public function age(){
        return $this->date_of_birth->diffForHumans();
    }
}
