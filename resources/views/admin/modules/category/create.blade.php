@extends('admin.master')

@section('module', 'Category')
@section('action', 'Create')

@section('content')
<form method="post" action="{{ route('admin.category.store') }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category create</h3>
            
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>User</label>
                            <select class="form-control" name="user_id">
                                <option value="0" {{old('user_id') == 1 ? "selected" : ""}}></option>
                                @foreach ($users as $user)
                                <option value="{{$user->id}}"{{old('user_id') == $user->id ? "selected" : ""}}>{{$user->fullname}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Category parent</label>
                <select class="form-control" name="parent_id">
                    <option value="0">----- Root -----</option>
                </select>
            </div>

            <div class="form-group">
                <label>Category name</label>
                <input type="text" class="form-control" placeholder="Enter category name" name="name" value="{{ old('name')}}">
            </div>

            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="1" value="{{old('status') == 1 ? 'selected' : ""}}">Show</option>
                    <option value="2" value="{{old('status') == 2 ? 'selected' : ""}}">Hidden</option>
                </select>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection
