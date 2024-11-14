<?php

namespace App\Controllers;

use App\Models\SupplierModel;

class SuppliersController extends BaseController
{
    public function index() {
        $model = new SupplierModel();
        $data['suppliers'] = $model->findAll();
        $data['supplierCount'] = $model->countAllResults();
        return view('suppliers/index', $data);
    }

    public function create() {
        
        return view('suppliers/create');
    }

    public function store() {
        $model = new SupplierModel();
        $model->save([
            'name' => $this->request->getPost('name'),
            'contact' => $this->request->getPost('contact'),
            'address' => $this->request->getPost('address'),
        ]);
        return redirect()->to('/dashboard/suppliers');
    }

    public function edit($id) {
        $model = new SupplierModel();
        $data['supplier'] = $model->find($id);
        return view('suppliers/edit', $data);
    }

    public function update($id) {
        $model = new SupplierModel();
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'contact' => $this->request->getPost('contact'),
            'address' => $this->request->getPost('address'),
        ]);
        return redirect()->to('/dashboard/suppliers');
    }

    public function delete($id) {
        $model = new SupplierModel();
        $model->delete($id);
        return redirect()->to('/dashboard/suppliers');
    }
}
