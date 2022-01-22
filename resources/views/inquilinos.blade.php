@extends('templates.main')
@section('content')

<div class="container">
<form class="row g-3">
      
    <div class="col-md-8">
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="name">
    </div>
    <div class="col-md-2">
        <label for="inputAge" class="form-label">Age</label>
        <input type="number" class="form-control" id="age">
    </div>
   
    <div class="col-md-2">
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
    
    <div class="col-md-6">
      <label for="inputPhone" class="form-label">Phone</label>
      <input type="text" class="form-control" id="inputPhone">
    </div>  
    
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastro</button>
  </div>
</form>
</div>
@endsection