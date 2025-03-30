<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonModel extends Model
{
    protected $table      = 'person';  // Table name
    protected $primaryKey = 'p_id';
    protected $allowedFields = ['name', 'email', 'phone_no', 'address','password'];
}
