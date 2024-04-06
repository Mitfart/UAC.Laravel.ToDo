@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Todos') }}</div>

                    <form method="post" action="{{ route('todos.change') }}" class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="todo_title" class="form-label">Title</label>
                            <input id="todo_title" name="title" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="todo_desc" class="form-label">Description</label>
                            <textarea
                                id="todo_desc"
                                name="desc"
                                class="form-control"
                                rows="5"
                                style="resize: none"
                            ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"> Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
