@php use Illuminate\Support\Facades\Session; @endphp
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Todos') }}</div>

                    <div class="card-body">
                        @if(Session::has('todo-create-success'))
                            <div class="alert alert-success">
                                {{ Session::get('todo-create-success') }}
                            </div>
                        @endif

                        @if(count($todos) > 0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($todos as $todo)
                                    <tr>
                                        <td>{{ $todo->title }}</td>
                                        <td>{{ $todo->desc }}</td>
                                        <td>
                                            @if($todo->is_completed)
                                                Completed
                                            @else
                                                Not Completed
                                            @endif
                                        </td>
                                        <td class="row row-cols-3 g-1">
                                            <div class="col">
                                                <a class="btn btn-success w-100" href="">View</a>
                                            </div>
                                            <div class="col">
                                                <a class="btn btn-primary w-100" href="">Edit</a>
                                            </div>
                                            <form class="col" method="post" action="">
                                                <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                                                <button type="submit" class="btn btn-danger w-100">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4>
                                There's no todos, yet!
                            </h4>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
