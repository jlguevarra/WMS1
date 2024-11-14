<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\ItemsModel;
use App\Models\SupplierModel;
use App\Models\CustomerModel;
use App\Models\IncomingGoodsModel;
use App\Models\OutgoingGoodsModel;

class Dashboard extends BaseController
{
    public function index()
{
    $supplierModel = new SupplierModel();
    $customerModel = new CustomerModel();
    $incomingGoodsModel = new IncomingGoodsModel();
    $outgoingGoodsModel = new OutgoingGoodsModel();

    // Count suppliers and customers
    $supplierCount = $supplierModel->countAll();
    $customerCount = $customerModel->countAll();
    $incomingGoodsCount = $incomingGoodsModel->countAll();
    $outgoingGoodsCount =  $outgoingGoodsModel->countAll();

    // Pass both counts to the dashboard view
    $data = [
        'supplierCount' => $supplierCount,
        'customerCount' => $customerCount,
        'incomingGoodsCount' => $incomingGoodsCount,
        'outgoingGoodsCount' => $outgoingGoodsCount,
    ];

    return view('dashboard', $data); // Ensure 'dashboard' is the correct view path
}
    public function tracking()
    {
       

        return view('tracking');
    }

   

}