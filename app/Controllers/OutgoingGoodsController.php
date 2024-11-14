<?php

namespace App\Controllers;

use App\Models\OutgoingGoodsModel; // Ensure you have this model
use CodeIgniter\Controller;

class OutgoingGoodsController extends Controller
{
    public function index()
    {
        $model = new OutgoingGoodsModel();
        $data['outgoingGoods'] = $model->findAll();

        return view('outgoing_goods/index', $data);
    }

    public function create()
    {
        return view('outgoing_goods/create');
    }

    public function store()
    {
        $model = new OutgoingGoodsModel();
        $model->save([
            'date' => $this->request->getPost('date'),
            'item_name' => $this->request->getPost('item_name'),
            'quantity' => $this->request->getPost('quantity'),
        ]);

        return redirect()->to('/outgoing_goods');
    }

    public function edit($id)
    {
        $model = new OutgoingGoodsModel();
        $data['outgoingGood'] = $model->find($id);

        return view('outgoing_goods/edit', $data);
    }

    public function update($id)
    {
        $model = new OutgoingGoodsModel();
        $model->update($id, [
            'date' => $this->request->getPost('date'),
            'item_name' => $this->request->getPost('item_name'),
            'quantity' => $this->request->getPost('quantity'),
        ]);

        return redirect()->to('/outgoing_goods');
    }

    public function delete($id)
    {
        $model = new OutgoingGoodsModel();
        $model->delete($id);

        return redirect()->to('/outgoing_goods');
    }
}
