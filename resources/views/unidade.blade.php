@extends('templates.main')
@section('content')

<div class="container">
<form class="row g-3">
      
      <label for="dados"> Dados da unidade</label>
    <hr class="dropdown-divider">
    <div class="col-md-8">
        <label for="inputName" class="form-label">Nº da Unidade</label>
        <input type="text" class="form-control" id="name">
    </div>
    <div class="col-md-2">
        <label for="inputAge" class="form-label">Proprietário</label>
        <input type="number" class="form-control" id="age">
    </div>
    <div class="col-md-2">
        <label for="inputAge" class="form-label">Condomínio</label>
        <input type="number" class="form-control" id="age">
    </div>
    <label for="Endereço">Endereço</label>
    <hr class="dropdown-divider">
           
    <div class="col-md-10">
      <label for="inputPhone" class="form-label">Rua</label>
      <input type="text" class="form-control" id="inputPhone">
    </div>  
    
    <div class="col-md-2">
      <label for="inputEmail4" class="form-label">Número</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>

    <div class="col-md-4">
    <label for="inputfone" class="form-label">gender identity</label>
        <select class="form-select" aria-label="Default select example">
  <option selected>Select</option>
  <option value="1">Men Cis</option>
  <option value="2">Woman Cis</option>
  <option value="3">Men Trans</option>
  <option value="4">Woman Trans</option>
  <option value="5">Other</option>
 </select>
    </div>
    <div class="col-md-2">
      <label for="inputEmail4" class="form-label">Uf</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-4">
      <label for="inputEmail4" class="form-label">Cep</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>


    <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastro</button>
  </div>
</form>
</div>
@endsection