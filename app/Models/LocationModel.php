<?php

namespace App\Models;

use CodeIgniter\Model;

class LocationModel extends Model
{
    protected $table = 'locations';  // टेबल नाव
    protected $primaryKey = 'l_id';  // Primary Key
    protected $allowedFields = ['name', 'city', 'state', 'country', 'p_code'];
}
