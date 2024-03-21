@extends('master')


@section('title')
    Danh sách Post
@endsection

@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-info mb-3">Create</a>
    <table class="table" >
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Category_Id</td>
            <td>Author_Id</td>
            <td>Create_at</td>
            <td>Update</td>
            <td>Action</td>
        </tr>
         @foreach($data as $item)
            <tr>
                <td>{{ $item->id  }}</td>
                <td>{{ $item->title  }}</td>
                <td>{{ $item->category_id  }}</td>
                <td>{{ $item->author_id  }}</td>
                <td>{{ $item->created_at  }}</td>
                <td>{{ $item->updated_at  }}</td>
                <td>
                    <a href="{{ route('posts.show', $item->id )  }}" class="btn btn-info" >Show</a>
                    <a href="{{ route('posts.edit', $item->id )  }}" class="btn btn-warning mb-2" >Edit</a>

                    <form action="{{ route('posts.destroy', $item->id) }}" method="POST">
                        @method('DELETE')
                        @csrf

                        <button type="submit"
                                onclick="return confirm('Chắc chắn xóa không?')"
                                class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
         @endforeach

    </table>
{{--    Phân trang --}}

    {{ $data->links()  }}
@endsection
