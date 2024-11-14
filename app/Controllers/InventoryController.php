<?php

namespace App\Controllers;

use App\Models\InventoryModel;

class InventoryController extends BaseController
{
    protected $inventoryModel;

    public function __construct()
    {
        $this->inventoryModel = new InventoryModel();
    }

    public function index()
    {
        $data['items'] = $this->inventoryModel->findAll();
        return view('inventory/index', $data);
    }

    public function create()
    {
        return view('inventory/create');
    }

    public function store()
    {
        $this->inventoryModel->insert([
            'name' => $this->request->getPost('name'),
            'sku' => $this->request->getPost('sku'),
            'description' => $this->request->getPost('description'),
            'quantity' => $this->request->getPost('quantity')
        ]);

        return redirect()->to('/inventory');
    }

    public function edit($id)
    {
        $data['item'] = $this->inventoryModel->find($id);
        return view('inventory/edit', $data);
    }

    public function update($id)
    {
        $this->inventoryModel->update($id, [
            'name' => $this->request->getPost('name'),
            'sku' => $this->request->getPost('sku'),
            'description' => $this->request->getPost('description'),
            'quantity' => $this->request->getPost('quantity')
        ]);

        return redirect()->to('/inventory');
    }

    public function delete($id)
    {
        $this->inventoryModel->delete($id);
        return redirect()->to('/inventory');
    }
}
