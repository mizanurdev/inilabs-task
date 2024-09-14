@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Create New To-Do</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('todos.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter a title" required>
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter a description"></textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Create To-Do</button>
                    <a href="#" onclick="history.back();" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
