<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;
    protected $fillable = ["certificate-title", "certificate-origin", "certificate-instructor", "certificate-date", "certificate-url"];
}
