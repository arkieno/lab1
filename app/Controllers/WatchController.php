<?php

namespace App\Controllers;
use App\Models\WatchCategoryModel;
use App\Models\WatchModel;
use App\Controllers\BaseController;

class WatchController extends BaseController
{
    public function index()
    {
        $watchModel = new WatchModel();
        $data['products'] = $watchModel->findAll();
        return view('products/index', $data);
    }
    public function create()
    {
        $categoryModel = new WatchCategoryModel();
        $data['categories'] = $categoryModel->findAll();
        return view('products/create', $data);
    }

    public function store()
    {
        $watchModel = new WatchModel();
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'ProductDescription' => $this->request->getPost('ProductDescription'),
            'Watch_Category_id' => $this->request->getPost('Watch_Category_id'),
            'ProductQuantity' => $this->request->getPost('ProductQuantity'),
            'ProductPrice' => $this->request->getPost('ProductPrice'),
        ];
        $watchModel->insert($data);

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $watchModel = new WatchModel();
        $categoryModel = new WatchCategoryModel();
        $data['product'] = $watchModel->find($id);
        $data['categories'] = $categoryModel->findAll();
        return view('products/edit', $data);
    }

    public function update($id)
    {
        $watchModel = new WatchModel();
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'ProductDescription' => $this->request->getPost('ProductDescription'),
            'Watch_Category_id' => $this->request->getPost('Watch_Category_id'),
            'ProductQuantity' => $this->request->getPost('ProductQuantity'),
            'ProductPrice' => $this->request->getPost('ProductPrice'),
        ];
        $watchModel->update($id, $data);

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $watchModel = new WatchModel();
        $watchModel->delete($id);

        return redirect()->to('/');
    }
}
