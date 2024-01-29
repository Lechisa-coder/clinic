<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public $fillable = [
        "Name",
        "Email",
        "Phone",
        "Doctors",
        "Date",
        "Time",
        "Problem_Description"
    ];
}
