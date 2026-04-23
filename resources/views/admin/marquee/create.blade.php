@extends('admin.layout')

@section('content')

<h2 class="text-warning mb-4">➕ Add Marquee</h2>

<form method="POST" action="/admin/marquee">
    @csrf

    <input type="text" name="text" class="form-control mb-2" placeholder="Marquee Text" required>

    <label>
        <input type="checkbox" name="is_active" value="1">
        Active
    </label>

    <br><br>

    <button class="btn btn-success">Save</button>

    <a href="/admin/marquee" class="btn btn-secondary">Back</a>

</form>

@endsection