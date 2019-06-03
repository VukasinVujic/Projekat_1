@extends('layout')

@section('content')

<div class="row">

    <div class="col-lg-6 col-lg-offset-3">
        
        <form action="/create/todo" method="POST">
        @csrf
        <input type="text" class="form-control input-lg" name="todo" placeholder="Create your todo">
        </form>

    </div>
   
</div>


@foreach ($todos as $todo)

{{$todo->todo}} <a href=" {{ route('todo.delete' , ['id' => $todo->id])}}" class="btn btn-danger"> delete</a>
 <a href=" {{ route('todo.update' , ['id' => $todo->id])}}" class="btn btn-info btn-xs"> update todo</a>
 
 @if(!$todo->completed)
<a href="{{route('todos.completed', ['id' => $todo->id])}}" class="btn btn-xs btn-success">Mark as completed</a>
@else  
<span class="text-succsess">Completed</span> 
@endif

<hr> 
    
@endforeach
    
@endsection