@extends('layouts.admin.layouts.sidebar')

@section('content')
<div class="container-fluid page__container">
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-12 card-form__body">
                <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>
                    <div class="search-form search-form--light m-3">
                        <input type="text" class="form-control search" placeholder="Search">
                        <button class="btn" type="button"><i class="material-icons">search</i></button>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <a class="btn btn-primary" href="{{ route('artikel.add') }}">Tambah</a>
                    </div>
                    <table class="table table-responsive-lg mb-0 thead-border-top-0">
                        <thead style="font-weight: bold;">
                            <tr>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Slug</th>
                                <th>Kutipan Artikel</th>
                                {{-- <th>Konten</th> --}}
                                <th>Gambar</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="staff02">
                            @foreach ($artikel as $item )
                            <tr>
                                <td>
                                    <span class="js-lists-values-employee-name">{{ $item->title }}</span>
                                </td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->kutipan }}</td>
                                {{-- <td>{!! $item->konten !!}</td> --}}
                                <td style="120px"><img src="{{ url('storage/' . $item->image) }}" alt="{{ $item->title }}"width="80px"></td>
                                <td>
                                    <form method="POST" action="{{route('artikel.destroy', [$item->id])}}" class="d-inline" onsubmit="return confirm('Delete this data permanently?')">
                                    @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" class="btn btn-danger btn-outline-white rounded-3" value="delete">
                                    </form>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-success" href="{{ route('artikel.edit',[$item->id]) }}">edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection