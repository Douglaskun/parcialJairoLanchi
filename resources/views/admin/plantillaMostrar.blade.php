@extends('admin.categories.create')

<!--  layouts.admin -->
@section('title', "Clientes")

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('barra')
  <li class="nav-item d-none d-lg-flex">
    <a class="nav-link" href="{{route('clientes.create')}}">
      <span class="btn btn-primary">Crear Clientes</span>
    </a>
  </li>
@endsection


@section('create')
    
@endsection

@section('options')
    
@endsection

@section('preference')
    
@endsection

@section('table')
<div class="page-header">
    <h3 class="page-title">
      Clientes
    </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data table</li>
      </ol>
    </nav>
  </div>
@endsection

@section('content')
    <table class="table table-striped" id="clientes" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>DNI</th>
                <th>RUC</th>
                <th>Direccion</th>
                <th>Celular</th>
                <th>Correo</th>
                <th>Accion</th>
            </tr>
        </thead>
        
        
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->name}}</td>
                    <td>{{$cliente->dni}}</td>
                    <td>{{$cliente->ruc}}</td>
                    <td>{{$cliente->adress}}</td>
                    <td>{{$cliente->phone}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>
                        <a href="{{url('/clientes/'.$cliente->id.'/edit')}}" class="btn btn-warning">
                            Editar | 
                        </a> 
                         
     
                     <form action="{{url('/clientes/'.$cliente->id)}}" class="d-inline" method="POST">
                     @csrf
                     {{method_field('DELETE')}}
                     <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
     
                     </form> 
                    </td>
               </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection

@section('scripts')
     
     
    <!--  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

     <script>
         $('#clientes').DataTable({});
     </script>
    
@endsection  
