<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'title',
        'description',
        'location',
        'company_name',
        'salary',
        'job_type',
        'deadline',
        'is_active',
        'recruteur_id',
    ];
}
