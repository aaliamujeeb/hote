@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">✏️ Edit Marquee</h2>

<form method="POST" action="/admin/update-marquee/{{ $item->id }}">
    @csrf

    <input type="text" name="text" value="{{ $item->text }}" class="form-control mb-2">

    <label>
        <input type="checkbox" name="is_active" {{ $item->is_active ? 'checked' : '' }}>
        Active
    </label>

    <br><br>

    <button class="btn btn-success">Update</button>
</form>

@endsection