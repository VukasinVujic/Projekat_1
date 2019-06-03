@extends('layout')

@section('content')

<h1>Update page</h1>

<div class="row">

    <div class="col-lg-12">
        
    <form action="{{ route('todos.save', [ 'id' => $todo->id])}}" method="POST">
        @csrf
        <input type="text" class="form-control input-lg" value="{{ $todo->todo}}" name="todo" placeholder="Create your todo">
        </form>

    </div>
   
</div>


    
@endsection