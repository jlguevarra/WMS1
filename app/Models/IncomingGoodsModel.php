<?php
namespace App\Models;

use CodeIgniter\Model;

class IncomingGoodsModel extends Model
{
    protected $table      = 'incoming_goods';
    protected $primaryKey = 'id';

    protected $allowedFields = ['date', 'item_name', 'quantity'];

    protected $useTimestamps = true;
}
