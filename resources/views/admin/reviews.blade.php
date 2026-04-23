@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">⭐ Reviews</h2>

<table class="table table-dark table-striped">

    <tr>
        <th>Name</th>
        <th>Review</th>
        <th>Rating</th>
        <th>Action</th>
    </tr>

    @foreach($reviews as $r)
    <tr>
        <td>{{ $r->name }}</td>
        <td>{{ $r->review }}</td>
        <td>{{ $r->rating }} ⭐</td>
        <td>
            <a href="/admin/delete-review/{{ $r->id }}"
               class="btn btn-danger btn-sm"
               onclick="return confirm('Delete?')">
                Delete
            </a>
        </td>
    </tr>
    @endforeach

</table>
{{ $reviews->links() }}

@endsection