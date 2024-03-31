@extends('admin.master')

@section('module', 'Product')
@section('action', 'Edit')

@push('handlejs')
<script type="text/javascript" src="{{ asset('administrator/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script type="text/javascript" src="{{asset('administrator/myscript/ajax.js')}}"></script>
<script type="text/javascript">
    $('#description').summernote();
    $('#content').summernote();
</script>
@endpush

@section('content')
<form method="post" action="{{ route('admin.product.update', ['id' => $id]) }}" enctype="multipart/form-data">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Product update</h3>

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
                    <div class="form-group">
                        <label>Product name</label>
                        <input type="text" class="form-control" placeholder="Enter product name" name="name" value="{{old('name', $product->name)}}">
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Enter product price" name="price" value="{{old('price',$product->price)}}">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="description" name="description">{{old('description',$product->description)}}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" id="description" name="content">{{old('content',$product->content)}}</textarea>
                    </div>
                  
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="{{old('quantity')}}">
                    </div>
                

                    <div class="group-image-detail">
                        <div class="row">
                            <button type="button" class="btn btn-info w-100" id="add-image">
                                <i class="fas fa-plus"></i> Add image detail
                            </button>
                        </div>

                        @foreach ($product->product_images as $image)
                        <div class="row d-flex align-item-center">
                            <div class="col-md-2">
                                @if (file_exists(public_path('uploads/'.$image->image)))
                                <img src="{{ asset('uploads/'.$image->images)}}" width="100%" id="image-{{$image->id}}">
                                @else
                                <img src="{{asset('administrator/dist/img/imgstd.jpg')}} "width="50%" alt="">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <input type="file" name="images_old" class="form-control file_old" data-image="{{$image->id}}" data-url="{{ route('admin.product.uploadfile', ['id'=> $image->id]) }}">
                            </div>
                            <div class="col-md-2">
                                <a href="{{route('admin.product.deleteFile', ['id' => $image->id])}}" class="btn btn-danger w-100 delete-image" data-image="{{$image->id}}">
                                    <i class="fas fa-minus"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    
                    </div>
                </div>
              

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id">
                            <option value="">____Root____</option>
                            @php 
                            recursiveCategory($categories, old('category_id', $product->category_id));
                            @endphp
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="1" {{old('status', $product->status) == 1 ? "selected" : ""}}>Show</option>
                            <option value="2" {{old('status', $product->status) == 2 ? "selected" : ""}}>Hidden</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Featured</label>
                        <select class="form-control" name="featured">
                            <option value="1" {{old('featured', $product->featured) == 1 ? "selected" : ""}}>UnFeatured</option>
                            <option value="2" {{old('featured', $product->featured) == 2 ? "selected" : ""}}>Featured</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image current</label>
                        @if (file_exists(public_path('uploads/'.$product->image)))
                        <img src="{{asset('uploads/'.$product->image)}}" width="50" alt="">
                        @else
                        <img src="{{asset('administrator/dist/img/imgstd.jpg')}} "width="50%" alt="">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection
