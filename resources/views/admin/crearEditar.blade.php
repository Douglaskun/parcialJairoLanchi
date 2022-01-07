<h1>{{$modo}} Persona</h1>
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
      <label for="dni"> DNI</label>
      <input type="text" class="form-control" name="dni" 
             value="{{isset($persona->dni)?$persona->dni:old('dni')}}" id="dni">
      <br>
  </div>

  <div class="form-group">
     <label for="telefono">  Telefono </label>
     <input type="text" class="form-control" name="telefono" 
            value="{{isset($persona->telefono)?$persona->telefono:old('telefono')}}" id="telefono">
     <br>
  </div>

  <div class="form-group">
    <label for="celular">  Celular </label>
    <input type="text" class="form-control" name="celular" 
           value="{{isset($persona->celular)?$persona->celular:old('celular')}}" id="celular">
    <br>
 </div>

 <div class="form-group">
    <label for="nombre">  Nombre </label>
    <input type="text" class="form-control" name="nombre" 
           value="{{isset($persona->adress)?$persona->nombre:old('nombre')}}" id="nombre">
    <br>
 </div>

 <div class="form-group">
    <label for="apellido">  Apellido </label>
    <input type="text" class="form-control" name="apellido" 
           value="{{isset($persona->apellido)?$persona->apellido:old('apellido')}}" id="apellido">
    <br>
 </div>




<input class="btn btn-success" type="submit" value="{{$modo}} Datos">

 <a class="btn btn-primary" href="{{route('personas.index')}}"> Regresar </a>

<br> 