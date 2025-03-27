<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postuler extends Model
{
    protected $table = 'user_offre';
    protected $fillable = ['user_id', 'offer_id', 'cv', 'lettre_motivation'];
    use HasFactory;
}
