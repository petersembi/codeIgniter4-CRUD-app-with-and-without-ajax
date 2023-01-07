<?php namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students'; //name of the table
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'course',
        'created_at'
    ];
} 
