@extends('admin.master')
@section('title', 'Edit Product')
@section('content')
<div class="form-create-app">
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <h1 class="product-h1">CHỈNH SỬA THÔNG TIN SẢN PHẨM</h1>
    <div class="form-group {{ $errors->has('name') ? 'has-error': ''}}">
        <label class="product-content" for="email">Tên sản phẩm:</label>
        <input type="text" name="name" class="product-add-ip"  id="email" value="{{ $product->name }}">
        @if($errors->has('name'))
        <span class="help-block">
            <strong> {{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('price') ? 'has-error': ''}}">
        <label class="product-content" for="pwd">Giá sản phẩm:</label>
        <input type="text" name="price" class="product-add-ip" id="pwd" value="{{ $product->price }}">
        @if($errors->has('price'))
        <span class="help-block">
            <strong> {{ $errors->first('price') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <label class="product-content" for="pwd">Mã giảm giá:</label>
        <input type="text" name="discount" class="product-add-ip"  id="pwd" value="{{ $product->discount }}">
        @if($errors->has('discount'))
        <span class="help-block">
            <strong> {{ $errors->first('discount') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <label class="product-content">Nhãn hiệu sản phẩm:</label>
        <select name="brand_id" class="product-add-ip">
            @foreach($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="product-content">Loại sản phẩm:</label>
        <select name="category_id" class="product-add-ip">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    </form>
    <div class="product-btn">
        <button type="submit" class="btn btn-primary btn-product-css">Chỉnh sửa</button>
        <a class="btn btn-danger btn-product-css" href="{{ route('admin.products.index') }}">Quay lại</a>
    </div>
</div>
@endsection
