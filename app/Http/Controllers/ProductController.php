<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Barang;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Satuan;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::orderby('tanggal_beli', 'desc')->get();
        return view('pages.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['satuans'] = Satuan::all();
        $data['barangs'] = Barang::all();
        return view('pages.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $barangs = Barang::all();
        $satuans = Satuan::all();
        $details = ProductDetail::where('product_id', $product->id)->get();
        return view('pages.product.show', compact('product', 'details', 'barangs', 'satuans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $barangs = Barang::all();
        $satuans = Satuan::all();
        $details = ProductDetail::where('product_id', $product->id)->get();
        return view('pages.product.edit', compact('product', 'details', 'barangs', 'satuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        foreach ($request->is_status as $key => $status) {
            $is_status = ProductDetail::find($request->detail_id[$key]);
            dd($request->is_status[$key]);
            if ($request->is_status[$key] == 1) {
                $is_status->update([
                    'is_status'   => $request->is_status[$key],
                ]);
            }
        }

        session()->flash('success', 'Data berhasil diupdate');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function editProductDetail($id)
    {
        $barangs = Barang::all();
        $satuans = Satuan::all();
        $detail = ProductDetail::find($id);
        return view('pages.product.product-detail', compact('detail', 'barangs', 'satuans'));
    }
}
