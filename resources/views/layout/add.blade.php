@extends('layout.index')
@section('content')
    <div class="container mt-5">
        <h2>Đăng ký nhân viên mới</h2>
        <form action="{{route('add')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên: </label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="tel">Tel: </label>
                <input type="text" name="tel" class="form-control" value="">
            </div>
            <button type="submit" class="btn btn-primary my-3">Register</button>
            <button type="button" onclick="window.location.href='{{route('list')}}'" class="btn btn-primary my-3 mx-3">Back</button>

        </form>
    </div>
@endsection
