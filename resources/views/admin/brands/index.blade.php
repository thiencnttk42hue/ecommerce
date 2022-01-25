@extends('admin.master')

@section('title', 'Index Brands')

@section('content')
<style>
    body{
    margin: 0;
    padding: 0;
    width: 100%;
}
#hellobar-bar {
    font-family: "Open Sans", sans-serif;
    width: 100%;
    margin: 0;
    height: 30px;
    display: table;
    font-size: 17px;
    font-weight: 400;
    padding: .33em .5em;
    -webkit-font-smoothing: antialiased;
    color: #5c5e60;
    position: fixed;
    background-color: white;
    box-shadow: 0 1px 3px 2px rgba(0,0,0,0.15);
}
#hellobar-bar.regular {
    height: 30px;
    font-size: 14px;
    padding: .2em .5em;
}
.hb-content-wrapper {
    text-align: center;
    text-align: center;
    position: relative;
    display: table-cell;
    vertical-align: middle;
}
.hb-content-wrapper p {
    margin-top: 0;
    margin-bottom: 0;
}
.hb-text-wrapper {
    margin-right: .67em;
    display: inline-block;
    line-height: 1.3;
}
.hb-text-wrapper .hb-headline-text {
    font-size: 1em;
    display: inline-block;
    vertical-align: middle;
}
#hellobar-bar .hb-cta {
    display: inline-block;
    vertical-align: middle;
    margin: 5px 0;
    color: #ffffff;
    background-color: #22af73;
    border-color: #22af73;
}
.hb-cta-button {
    opacity: 1;
    color: #fff;
    display: block;
    cursor: pointer;
    line-height: 1.5;
    max-width: 22.5em;
    text-align: center;
    position: relative;
    border-radius: 3px;
    white-space: nowrap;
    margin: 1.75em auto 0;
    text-decoration: none;
    padding: 0;
    overflow: hidden;
}
.hb-cta-button .hb-text-holder {
    border-radius: inherit;
    padding: 5px 15px;
}
    .hb-close-wrapper {
    display: table-cell;
    width: 1.6em;
}
.hb-close-wrapper .icon-close {
    font-size: 14px;
    top: 15px;
    right: 25px;
    width: 15px;
    height: 15px;
    opacity: .3;
    color: #000;
    cursor: pointer;
    position: absolute;
    text-align: center;
    line-height: 15px;
    z-index: 1000;
    text-decoration: none;
}
</style>
<div class="card-body">
    <div class="container">
        @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
            {{ session('message') }}
        </div>
        @endif
    </div>
    <h4 class="card-title">Danh sách Brands</h4>
    <a class="btn btn-primary" style="margin-bottom:10px;" href="{{ route('admin.brands.create') }}">Thêm</a>
    @if(session()->get('errors'))
        {{ session()->get('errors')->first }}
    @endif
    <table class="table table-hover">
        <thead>
            <tr style="background-color:#1E90FF;">
                <th>STT</th>
                <th>Name</th>
                <th>Desc</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <th scope="row">{{ $brand->id }}</th>
                    <td><a href="{{ route('admin.brands.show', $brand->id) }}">{{ $brand->name }}</a></td>
                    <td>{{ $brand->desc }}</td>
                    <td>
                        <button type="submit" class="btn btn-outline-primary">
                            <a href="{{ route('admin.brands.edit', $brand->id) }}">Edit</a></td>
                        </button>
                    <td>
                        <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xoá sản phẩm này')">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-outline-primary">Delete</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $customers->links() }}
@endsection
