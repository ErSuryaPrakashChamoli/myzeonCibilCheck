<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CibilUser extends Model
{
  use HasFactory, SoftDeletes;

  protected $table = 'tbl_user_cibil';
  protected $connection = 'mysql';


  protected $fillable = [
    'first_name',
    'middle_name',
    'last_name',
    'email',
    'phone_no',
    'desired_amount',
    'pincode',
    'city',
    'state',
    'pancard',
    'dob',
    'gross_income',
    'business_name',
    'profession',
    'year_in_profession',
    'year_in_bussiness',
    'registance_type',
    'message',
    'created_at',
    'created_by',
    'updated_at',
    'updated_by'

  ];
}
