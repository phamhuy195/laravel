@extends('master')

@section('title')
    Cập nhật Post {{ $category->name }}
@endsection

@section('content')
    <form action="{{ route('categories.update',$category->id) }}" method="POST">

        @method('PUT')

        @csrf

        <div class="mt-2 mb-2">
            <label class="form-label" for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}" >
        </div>

        <button type="submit" class="btn btn-success">Save</button>

        <a href="{{ route('categories.index') }}" class="btn btn-danger">Quay lại trang chủ</a>
    </form>
@endsection
