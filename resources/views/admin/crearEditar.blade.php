<h1>{{$modo}} Clientes</h1>
@if (count($errors)>0)

<div class="alert alert-danger" role="alert">
  <ul>
     @foreach ($errors->all() as $error)
      <li>{{$error}}</li>  
     @endforeach
  </ul>
</div>

  
@endif

   <div class="form-group">
      <label for="name"> Nombre</label>
      <input type="text" class="form-control" name="name" 
             value="{{isset($cliente->name)?$cliente->name:old('name')}}" id="name">
      <br>
  </div>

  <div class="form-group">
     <label for="dni">  DNI </label>
     <input type="text" class="form-control" name="dni" 
            value="{{isset($cliente->dni)?$cliente->dni:old('dni')}}" id="dni">
     <br>
  </div>

  <div class="form-group">
    <label for="ruc">  RUC </label>
    <input type="text" class="form-control" name="ruc" 
           value="{{isset($cliente->ruc)?$cliente->ruc:old('ruc')}}" id="ruc">
    <br>
 </div>

 <div class="form-group">
    <label for="adress">  Direccion </label>
    <input type="text" class="form-control" name="adress" 
           value="{{isset($cliente->adress)?$cliente->adress:old('adress')}}" id="adress">
    <br>
 </div>

 <div class="form-group">
    <label for="phone">  Celular </label>
    <input type="text" class="form-control" name="phone" 
           value="{{isset($cliente->phone)?$cliente->phone:old('phone')}}" id="phone">
    <br>
 </div>

 <div class="form-group">
    <label for="email">  Correo </label>
    <input type="text" class="form-control" name="email" 
           value="{{isset($cliente->email)?$cliente->email:old('email')}}" id="email">
    <br>
 </div>


<input class="btn btn-success" type="submit" value="{{$modo}} Datos">

 <a class="btn btn-primary" href="{{route('clientes.index')}}"> Regresar </a>

<br> 