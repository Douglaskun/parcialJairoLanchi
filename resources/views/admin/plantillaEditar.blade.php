@extends('base.index')

<!--  layouts.admin -->
@section('title', " Editar Persona")

@section('styles')
    
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
<div class="container">

   <form action="{{url('/clientes/'.$cliente->id)}}" method="post" enctype="multipart/form-data">
   @csrf
   {{method_field('PATCH')}}
   @include('admin.clients.crearEditar',['modo'=>'Editar']);  
   
   </form>
 </div> 
@endsection

@section('scripts')
     
     
    <!--  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

     <script>
         $('#clientes').DataTable({});
     </script>
    
@endsection  