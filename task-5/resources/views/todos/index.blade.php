@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">To-Do List</h1>
    <div class="text-end mb-4">
        <a href="{{ route('todos.create') }}" class="btn btn-primary">Create New To-Do</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul class="list-group">
        @foreach($todos as $todo)
            <li class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-10">
                        <input type="checkbox" class="mark-complete" data-id="{{ $todo->id }}" {{ $todo->is_completed ? 'checked' : '' }}>
                        <span class="{{ $todo->is_completed ? 'completed' : '' }}">
                            <strong>{{ $todo->title }}</strong>
                            <p class="mb-1">{{ $todo->description }}</p>
                        </span>
                    </div>
                    <div class="col-2 text-end">
                        <div class="btn-group">
                            <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-pencil-alt"></i> <span>Edit</span>
                            </a>
                            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> <span>Delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
    // Handle checkbox change
    $('.mark-complete').on('change', function() {
        var id = $(this).data('id');
        var isCompleted = $(this).is(':checked') ? 1 : 0;

        $.ajax({
            url: '/todos/' + id + '/complete',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                is_completed: isCompleted
            },
            success: function(response) {
                if (isCompleted) {
                    $('input[data-id="' + id + '"]').next().addClass('completed');
                } else {
                    $('input[data-id="' + id + '"]').next().removeClass('completed');
                }
            },
            error: function(xhr) {
                alert('An error occurred while updating the To-Do item.');
            }
        });
    });
});
</script>
@endsection
