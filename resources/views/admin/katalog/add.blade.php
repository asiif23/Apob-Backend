@extends('layouts.admin.layouts.sidebar')

@section('content')
<div class="container-fluid page__container">
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-12 card-form__body">
                <div class="container p-3">

                    <form action="{{ route('katalog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Produk</label>
                            <input type="text" name="name" class="form-control" id="name" required>   
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Produk</label>
                            <textarea name="deskripsi" style="height: 100px;width: 100%;"></textarea>    
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Produk</label>
                            <input type="number" name="harga" class="form-control" id="harga" required>   
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Foto Produk</label>
                            <div class="input-group">
                                <div class="mb-3">
                                    <input class="form-control" type="file" id="image" name="image" accept=".jpg,.png,.jpeg">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                                        
                </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    @endsection