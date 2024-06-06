<?php

namespace App\Livewire\Product;

use App\Models\Product;
use App\Models\ProductDetail;
use Livewire\Component;

class ProductTable extends Component
{
    public $products;
    public $selectProductsId = 0;

    public function render()
    {
        return view('livewire.product.product-table');
    }

    public function countProduct($productID)
    {
        $count = ProductDetail::where('product_id', $productID)->get()->count();
        return $count;
    }

    public function sumJumlah($productID)
    {
        $sum = ProductDetail::where('product_id', $productID)->sum('harga_product');
        return $sum;
    }

    public function fetchProducts()
    {
        $products = Product::orderby('tanggal_beli', 'desc')->get();
        return $products;
    }

    public function changeDelete($productID)
    {
        $this->selectProductsId = $productID;
    }

    public function deleteProduct()
    {
        if ($this->selectProductsId == 0) {
            return;
        }
        $detailProduct = ProductDetail::where('product_id', $this->selectProductsId);
        $detailProduct->delete();
        $product = Product::findOrFail($this->selectProductsId);
        $product->delete();
        $this->products = $this->fetchProducts();
        session()->flash('success', 'Data has been saved successfully!');
        $this->selectProductsId = 0;
    }
}
