<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class CatalogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $katalog = Catalog::all();
        return view('admin.katalog.index',[
            'katalog'=> $katalog,
            'title' => 'Katalog Produk',
            'title_breadcrumb' => 'Katalog',
            'breadcrumb' => 'Katalog',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->image;
        $namafile = $nm->getClientOriginalName();

        $katalog = new Catalog();
        $katalog->name = $request->name;
        $katalog->deskripsi = $request->deskripsi;
        $katalog->image = $namafile;
        $nm->move(public_path().'/storage', $namafile);
        $katalog->price = $request->harga;
        $katalog->save();

        return redirect('admin/konten/katalog')->with('success','Article added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Catalog::findOrFail($id);
        return view ('admin.katalog.edit',[
        'items' => $items,
        // 'category_name'=>$category_name,
        'title' => 'Edit Katalog',
        'title_breadcrumb' => 'Katalog Produk',
        'breadcrumb' => 'Katalog']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $user = auth()->user()->name;
        $data = Catalog::findOrFail($id);
        $image = $request->file('image');
        if (isset($image))
            {
                $new_name = $image->getClientOriginalExtension();
                $image->move(public_path('storage'), $new_name);
                $data->update(array(
                    'image' => $new_name, 
                    'name' => $request->name,
                    'deskripsi' => $request->deskripsi,
                    'price' => $request->price,
                ));
            }
        $form_data = array(
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'price' => $request->price,
            // 'image' => $new_name,
        );
        $data->update($form_data);
        
        return redirect('admin/konten/katalog')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalog = Catalog::findOrFail($id);
        $catalog->delete();
        
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }

    public function add()
    {
        $katalog = Catalog::all();
        return view('admin.katalog.add',[
            'katalog'=> $katalog,
            'title' => 'Tambah Katalog Produk',
            'title_breadcrumb' => 'Tambah Katalog',
            'breadcrumb' => 'Katalog',
        ]);
    }
}
