@extends('admin.master')
@section('title', 'Show Products')
@section('content')
<div class="form-create-app">
    <h1 class="product-h1">THÔNG TIN SẢN PHẨM</h1>
    <div class="product-body">
        <p class="product-item">Tên sản phẩm: <span class="product-info">{{ $product->name }}</span></p>
        <p class="product-item">Giá sản phẩm: <span class="product-info">{{ number_format($product->price, 2) }}Đ</span></p>
        <p class="product-item">Số lượt xem: <span class="product-info">{{ $product->view }}</span></p>
        <p class="product-item">Mã giảm giá: <span class="product-info">{{ $product->discount }}%</span></p>
        <p class="product-item">Loại sản phẩm: <span class="product-info">{{ $product->category->name }}</span></p>
        <p class="product-item">Nhãn hiệu: <span class="product-info">{{ $product->brand->name }}</span></p>
        <p class="product-item">Ngày tạo: <span class="product-info">{{$product->created_at}}</span></p>
        <a class="btn btn-primary" style="width:100px; margin-bottom:10px" href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
        <a class="btn btn-danger" style="width:100px; margin-bottom:10px" href="{{ route('admin.products.index') }}">Quay lại</a>
    </div>
</div>
@endsection
