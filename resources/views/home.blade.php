@extends('plantilla')

@section('content')

<h1>Regisrar Productos</h1>
<form method="POST">
    @csrf
    <input name="name" placeholder="Nombre....">
    </br> </br>
    <input name="name" placeholder="Nombre....">
    </br> </br>
    <button>Enviar</button>
</form>
  
@endsection
