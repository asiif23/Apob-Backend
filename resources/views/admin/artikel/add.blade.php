@extends('layouts.admin.layouts.sidebar')

@section('content')
<div class="container-fluid page__container">
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-12 card-form__body">
                <div class="container p-3">

                    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Artikel</label>
                            <input type="text" name="title" class="form-control" id="title" required>   
                        </div>
                        <div class="form-group">
                            <label for="kutipan">Kutipan</label>
                            <input type="text" name="kutipan" class="form-control" id="kutipan" required>   
                        </div>
                        <div class="form-group">
                            <label for="konten">Konten Artikel</label>
                            <textarea id="summernote" name="konten"></textarea>   
                        </div>
                        <div class="form-group">
                            <label for="category_id">Pilih Kategori Artikel</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Thumbnail Artikel</label>
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