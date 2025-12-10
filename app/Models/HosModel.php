<?php
namespace App\Models;
use CodeIgniter\Model;

class HosModel extends Model
{
    protected $table = 'tiffin_services';
    protected $primaryKey = 'h_id';
    protected $allowedFields = ['name', 'address', 'city', 'state', 'phone_no', 'email', 'specializations', 'website_link', 'password', 'a_id', 'l_id'];
}
