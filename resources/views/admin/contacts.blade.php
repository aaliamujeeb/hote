@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">📩 Contact Messages</h2>

<table class="table table-dark table-striped">

    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Action</th>
    </tr>

    @foreach($contacts as $c)
    <tr>
        <td>{{ $c->name }}</td>
        <td>{{ $c->email }}</td>
        <td>{{ $c->message }}</td>
        <td>
            <a href="/admin/delete-contact/{{ $c->id }}"
               class="btn btn-danger btn-sm"
               onclick="return confirm('Delete?')">
                Delete
            </a>
        </td>
    </tr>
    @endforeach

</table>
{{ $contacts->links() }}
@endsection