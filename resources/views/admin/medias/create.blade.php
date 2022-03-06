@extends('admin.master')
@section('title', 'Add Media')
@section('content')
<div class="form-create-app">
    <form action="{{ route('admin.medias.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h1 class="product-h1">THÊM MỚI ẢNH SẢN PHẨM</h1>
        <div class="form-group {{ $errors->has('name') ? 'has-error': ''}}">
            <label class="product-content" for="email">Tên ảnh sản phẩm:</label>
            <input type="text" name="name" class="product-add-ip"  id="email" value="{{ old('name')}}">
            @if($errors->has('name'))
            <span class="help-block">
                <strong> {{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('desc') ? 'has-error': ''}}">
            <label class="product-content" for="pwd">Mô tả ảnh sản phẩm:</label>
            <input type="text" name="desc" class="product-add-ip" id="pwd" value="{{ old('desc')}}">
            @if($errors->has('desc'))
            <span class="help-block">
                <strong> {{ $errors->first('desc') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('priority') ? 'has-error': ''}}">
            <label class="product-content" for="pwd">Độ yêu tiên:</label>
            <input type="text" name="priority" class="product-add-ip"  id="pwd" value="{{ old('priority')}}">
            @if($errors->has('priority'))
            <span class="help-block">
                <strong> {{ $errors->first('priority') }}</strong>
            </span>
            @endif
        </div>
        <div>
            <label class="product-content" for="pwd">Chọn ảnh sản phẩm:</label>
            <input type="file" name="upload_img" id="pwd">

        </div>
        <div class="form-group">
            <label class="product-content">Sản phẩm:</label>
            <select name="product_id" class="product-add-ip">
                @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="product-btn">
        <button type="submit" class="btn btn-primary btn-product-css">Thêm mới</button>
        <a class="btn btn-danger btn-product-css" href="{{ route('admin.medias.index') }}">Quay lại</a>
        </div>
    </form>
</div>
@endsection
