@extends('admin.master')

@section('title', 'Add Brands')

@section('content')
<style>
    .help-block{
        color: red;
    }
    .has-errors input{
        border-color: red;
    }
</style>
<form action="{{ route('admin.brands.store') }}" method="POST" >
    @method('POST')
    @csrf
    <div class="form-group {{ $errors->has('name') ? 'has-errors': '' }}">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placehoder="Enter name" id="name" value="{{ old('name') }}">
        @if($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('desc') ? 'has-errors': '' }}">
        <label for="desc">Desc</label>
        <input type="text" name="desc" class="form-control" placehoder="Enter desc" id="desc" value="{{ old('desc') }}">
        @if($errors->has('desc'))
            <span class="help-block">
                <strong>{{ $errors->first('desc') }}</strong>
            </span>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



