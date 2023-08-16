@extends('layout.index')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <td scope="col">ID</td>
            <td scope="col">Họ và tên</td>
            <td scope="col">Email</td>
            <td scope="col">Tel</td>
        </tr>
        </thead>

        <tbody>
        @foreach($data as $key => $value)
        <tr>
            <td><a href="{{route('edit', [$value->id])}}">{{$value->id}}</a></td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->tel}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination">
        @if($data->lastPage() > 1)
            @if($data->currentPage() > 1)
                <a href="{{$data->url($data->currentPage() - 1)}}"><< Trang trước |</a>
            @endif

            @php
            $blocks = ceil($data->lastPage() / 3);
            $block = ceil($data->currentPage() /3);
            $startPage = ($block - 1) * 3 + 1;
            $endPage = min($startPage + 2, $data->lastPage());
            @endphp

            @for($i = $startPage; $i <= $endPage; $i++)
                @if($i == $data->currentPage())
                    <span>{{$i}} |</span>
                @else
                    <a href="{{$data->url($i)}}">{{$i}} |</a>
                @endif
            @endfor

            @if($data->currentPage() < $data->lastPage())
                <a  href="{{$data->url($data->currentPage() + 1)}}"> Trang Sau >></a>
            @endif
        @endif
    </div>
@endsection
