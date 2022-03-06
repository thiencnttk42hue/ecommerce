@extends('admin.master')
@section('title', 'Add Product')
@section('content')
<div class="form-create-app">
    <form action="{{ route('admin.products.store') }}" method="POST">
        {{ csrf_field() }}
        <h1 class="product-h1">THÊM MỚI SẢN PHẨM</h1>
        <div class="form-group {{ $errors->has('name') ? 'has-error': ''}}">
            <label class="product-content" for="email">Tên sản phẩm:</label>
            <input type="text" name="name" class="product-add-ip"  id="email" value="{{ old('name')}}">
            @if($errors->has('name'))
            <span class="help-block">
                <strong> {{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('price') ? 'has-error': ''}}">
            <label class="product-content" for="pwd">Giá sản phẩm:</label>
            <input type="text" name="price" class="product-add-ip" id="pwd" value="{{ old('price')}}">
            @if($errors->has('price'))
            <span class="help-block">
                <strong> {{ $errors->first('price') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('discount') ? 'has-error': ''}}">
            <label class="product-content" for="pwd">Mã giảm giá:</label>
            <input type="text" name="discount" class="product-add-ip"  id="pwd" value="{{ old('discount')}}">
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
        <div class="product-btn">
        <button type="submit" class="btn btn-primary btn-product-css">Thêm mới</button>
        <a class="btn btn-danger btn-product-css" href="{{ route('admin.products.index') }}">Quay lại</a>
        </div>
    </form>
</div>
@endsection
