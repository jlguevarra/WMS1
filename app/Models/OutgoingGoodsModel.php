<?php
namespace App\Models;

use CodeIgniter\Model;

class OutgoingGoodsModel extends Model
{
    protected $table = 'outgoing_goods';
    protected $primaryKey = 'id';
    protected $allowedFields = ['date', 'item_name', 'quantity', 'customer_id'];
}
