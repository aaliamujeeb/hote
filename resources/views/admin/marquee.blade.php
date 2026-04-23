@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-3">📢 Marquee Management</h2>

<a href="/admin/marquee/create" class="btn btn-success mb-3">
    ➕ Add New Marquee
</a>


@foreach($marquees as $item)

<div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">

    <p>{{ $item->text }}</p>

    <small>
        Status: 
        <b>{{ $item->is_active ? 'Active' : 'Inactive' }}</b>
    </small>

    <br><br>

    <a href="/admin/edit-marquee/{{ $item->id }}" class="btn btn-primary btn-sm">
        Edit
    </a>

    <a href="/admin/delete-marquee/{{ $item->id }}" class="btn btn-danger btn-sm">
        Delete
    </a>

</div>

@endforeach

@endsection