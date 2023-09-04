<?php namespace App\Models;
use CodeIgniter\Model;
class Studentmodel extends MOdel{
    protected $table='students';
    protected $primarykey='id';
    protected $allowedFields=['name','email','phone','course','image'];
}
