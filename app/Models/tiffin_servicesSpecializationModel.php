<?php

namespace App\Models;

use CodeIgniter\Model;

class tiffin_servicesSpecializationModel extends Model
{
    protected $table = 'tiffin_services_specializations';
    protected $primaryKey = 'id';
    protected $allowedFields = ['t_id', 's_id'];
}
