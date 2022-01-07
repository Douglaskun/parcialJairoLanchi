@extends('admin.categories.create')

<!--  layouts.admin -->
@section('title', " Crear Clientes")

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
      Categorias
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

   <form action="{{route('clientes.store')}}" method="post" enctype="multipart/form-data">
   @csrf
   
   @include('admin.clients.crearEditar',['modo'=>'Crear']);  
   
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