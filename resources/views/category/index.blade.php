@extends('template.master')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Post Categories</h3>
                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-12 grid-margin strecth-card">
        <div class="card">
            <div class="card-title">
                <div class="d-flex justify-content-between align-items-center">
                    Post Category List
                    <a href="{{ route('category.create')}}" class="btn btn-primary">Add Category</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name}}</td>
                                <td>
                                    <a href="{{ route('category.edit', [$item->id]) }}">Edit</a>
                                    <a href="{{ route('category.delete', [$item->id]) }}">Delete</a>
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
@endsection
