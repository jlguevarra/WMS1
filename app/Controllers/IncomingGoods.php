<?php

// app/Controllers/IncomingGoods.php
namespace App\Controllers;

use App\Models\IncomingGoodsModel;
use CodeIgniter\Controller;

class IncomingGoods extends Controller
{
    protected $incomingGoodsModel;

    public function __construct()
    {
        $this->incomingGoodsModel = new IncomingGoodsModel();
    }

    public function index()
    {
        $data['incomingGoods'] = $this->incomingGoodsModel->findAll();
        return view('incoming_goods/index', $data);
    }

    public function create()
    {
        return view('incoming_goods/create');
    }

    public function store()
    {
        $this->incomingGoodsModel->save([
            'date' => $this->request->getPost('date'),
            'item_name' => $this->request->getPost('item_name'),
            'quantity' => $this->request->getPost('quantity')
        ]);

        return redirect()->to('/incoming_goods');
    }

    public function edit($id)
    {
        $data['incomingGood'] = $this->incomingGoodsModel->find($id);
        return view('incoming_goods/edit', $data);
    }

    public function update($id)
    {
        $this->incomingGoodsModel->update($id, [
            'date' => $this->request->getPost('date'),
            'item_name' => $this->request->getPost('item_name'),
            'quantity' => $this->request->getPost('quantity')
        ]);

        return redirect()->to('/incoming_goods');
    }

    public function delete($id)
    {
        $this->incomingGoodsModel->delete($id);
        return redirect()->to('/incoming_goods');
    }
}
