<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'postcode', 'address', 'tel', 'representative_name', 'industry', 'bill_name', 'bill_postcode', 'bill_address', 'bill_tel', 'created_user_id', 'updated_user_id', 'deleted_user_id'
    ];
}
