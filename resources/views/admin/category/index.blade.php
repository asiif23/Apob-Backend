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
                        <button class="btn btn-primary" 
                            id="categoriii"
                            data-toggle="modal" 
                            data-target="#addModal" 
                            data-placement="top" 
                            title="Tambah {{$title_breadcrumb}}" 
                            >Tambah
                        </button>
                    </div>
                    <table class="table table-responsive-lg mb-0 thead-border-top-0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>keyword</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody class="list" id="staff02">
                            @foreach ($categories as $item )
                            <tr>
                                <td>
                                    <span class="js-lists-values-employee-name">{{ $item->name }}</span>
                                </td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->keywords }}</td>
                                <td>
                                    <form method="POST" action="{{route('categories.destroy', [$item->id])}}" class="d-inline" onsubmit="return confirm('Delete this data permanently?')">
                                    @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" class="btn btn-danger" value="delete">
                                    </form>
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