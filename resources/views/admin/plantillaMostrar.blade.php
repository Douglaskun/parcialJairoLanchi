@extends('base.index')

<!--  layouts.admin -->
@section('title', "Persona")

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('barra')
  <li class="nav-item d-none d-lg-flex">
    <a class="nav-link" href="{{route('personas.create')}}">
      <span class="btn btn-primary">Crear Personas</span>
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
      Persona
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
    <table class="table table-striped" id="personas" >
        <thead>
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>Telefono</th>
                <th>Celular</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Accion</th>
            </tr>
        </thead>
        
        
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{$persona->id}}</td>
                    <td>{{$persona->dni}}</td>
                    <td>{{$persona->telefono}}</td>
                    <td>{{$persona->celular}}</td>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->apellido}}</td>
                    <td>
                        <a href="{{url('/personas/'.$persona->id.'/edit')}}" class="btn btn-warning">
                            Editar | 
                        </a> 
                         
     
                     <form action="{{url('/personas/'.$persona->id)}}" class="d-inline" method="POST">
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
         $('#personas').DataTable({});
     </script>
    
@endsection  
