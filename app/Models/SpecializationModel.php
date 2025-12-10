<?php

namespace App\Models;

use CodeIgniter\Model;

class SpecializationModel extends Model
{
    protected $table = 'specializations';  // ✅ Table Name
    protected $primaryKey = 's_id';  // ✅ Primary Key
    protected $allowedFields = ['name'];  // ✅ Allowed Fields
}
