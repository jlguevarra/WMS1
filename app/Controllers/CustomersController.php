<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class CustomersController extends BaseController
{
    public function index() {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();
        return view('customers/index', $data);
    }

    public function create() {
        return view('customers/create');
    }

    public function store() {
        $model = new CustomerModel();
        $model->save([
            'name' => $this->request->getPost('name'),
            'contact' => $this->request->getPost('contact'),
            'address' => $this->request->getPost('address'),
        ]);
        return redirect()->to('/dashboard/customers');
    }

    public function edit($id) {
        $model = new CustomerModel();
        $data['customer'] = $model->find($id);
        return view('customers/edit', $data);
    }

    public function update($id) {
        $model = new CustomerModel();
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'contact' => $this->request->getPost('contact'),
            'address' => $this->request->getPost('address'),
        ]);
        return redirect()->to('/dashboard/customers');
    }

    public function delete($id) {
        $model = new CustomerModel();
        $model->delete($id);
        return redirect()->to('/dashboard/customers');
    }
}
