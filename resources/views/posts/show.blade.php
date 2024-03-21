{{-- @extends('master')


@section('title')
    {{-- Chi tiết Category {{ $category->name  }} --}}
@endsection

@section('content')
    <table class="table" >
        <tr>
            <td>Trường</td>
            <td>Giá trị</td>
        </tr>
        @foreach($category as $key => $value)
            <tr>
                <td>{{ $key  }}</td>
                <td>{{ $value  }}</td>

            </tr>
        @endforeach

    </table>
    {{--    Phân trang --}}
    <a href="{{ route('categories.index')  }}" class="btn btn-danger" >Quay lại trang chủ</a>

{{--    {{ $data->links()  }}--}}
@endsection --}}
