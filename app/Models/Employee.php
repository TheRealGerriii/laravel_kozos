<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "mas_nev";
    protected $primaryKey = "mas_id";
    protected $keyType = "string";
    public $incrementing = false;
    const CREATED_AT = "mas_nev";
    const UPDATED_AT = "mas_nev";
    public $timestamps = false;
}
