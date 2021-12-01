@extends('layouts.master')

@section('title')
    Categories
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Categories List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-body">

                            <div class="row py-2 mb-4">

                                <div class="col-8">
                                    <h5 class="card-title">Categories List</h5>
                                </div>


                                <div class="col-4 d-flex justify-content-end">
                                    <a href="{{ route('categories.create') }}" class="btn btn-primary w-50">
                                        <i class="fa fa-plus"></i>  Add Category
                                    </a>
                                </div>
                            </div>


                            <table id="datatable" class="table table-bordered table-striped my-4">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @if($categories)
                                    @foreach($categories as $key => $category)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $category->name ?? '' }}</td>
                                            <td>
                                                <a href="{{ route('categories.edit' , $category->id) }}"
                                                   class="btn btn-info">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>


                                                <a href="javascript:" class="btn btn-danger sa-delete ml-3" data-form-id="category-delete-{{ $category->id }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>

                                                <form id="category-delete-{{ $category->id }}" action="{{ route('categories.destroy' , $category->id) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                            </td>

                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>

                            </table>
                        </div>
                    </div><!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->


@endsection


