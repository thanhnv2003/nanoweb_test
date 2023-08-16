@extends('layout.index')
@section('content')
    <div class="container mt-5">
        <h2>Biên soạn thông tin nhân vien</h2>
        <form action="{{route('edit', [$data->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên: </label>
                <input type="text" name="name" class="form-control" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="email" class="form-control" value="{{$data->email}}">
            </div>
            <div class="form-group">
                <label for="tel">Tel: </label>
                <input type="text" name="tel" class="form-control" value="{{$data->tel}}">
            </div>
            <button type="submit" class="btn btn-primary my-3">Update</button>
            <button type="reset" class="btn btn-primary my-3 mx-3">Delete</button>
            <button type="button" onclick="window.location.href='{{route('list')}}'" class="btn btn-primary my-3 mx-3">Back</button>

        </form>
    </div>
@endsection
