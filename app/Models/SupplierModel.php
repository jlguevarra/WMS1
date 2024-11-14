<?php
namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'suppliers'; // Name of the table in the database
    protected $primaryKey = 'id';   // Primary key of the table

    // Fields that are allowed to be inserted or updated
    protected $allowedFields = ['name', 'contact', 'address'];

    // Enable timestamps if you want CodeIgniter to automatically manage created_at and updated_at fields
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
