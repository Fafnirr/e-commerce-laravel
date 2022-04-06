<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    
    public function index()
    {
        $produits = Produit::all();
        return view ('produits.index')->with('produits', $produits);
    }


    public function create()
    {
        return view('produits.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Produit::create($input);
        return redirect('produit')->with('flash_message', 'Produit Addedd!');
    }


    public function show($id)
    {
        $produit = Produit::find($id);
        return view('produits.show')->with('produits', $produit);
    }


    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('produits.edit')->with('produits', $produit);
    }


    public function update(Request $request, $id)
    {
        $produit = Produit::find($id);
        $input = $request->all();
        $produit->update($input);
        return redirect('produit')->with('flash_message', 'Produit Updated!');
    }


    public function destroy($id)
    {
        Produit::destroy($id);
        return redirect('produit')->with('flash_message', 'Produit deleted!');
    }
}
