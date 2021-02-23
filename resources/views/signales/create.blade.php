
@extends('layouts.app')

@section('content')
       

  

<div class="container">
<div class="row justify-content-center ">
<div class="col-6 bg-gray "  >
<div class="card my-5   bg-transparent" >
         <div class="card-header">
            <div class="col-md-12">
                <h4 class="card-title"><strong>Bienvenue</strong> 
                 
                </h4>
            </div>
         </div>
         <div class="card-body">
 <form action="{{ route('signales.store') }}" method="POST">
 @csrf
          
  <div class="form-group">
    <label for="inputAddress">Nom complet</label>
    <input type="text" class="form-control" id="inputAddress" name="Nom" placeholder="Nom et Prenom">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Numéro de Téléphone </label>
    <input type="text" class="form-control" id="inputAddress2" name="Numero" placeholder="Numero de Télephone">
  </div>
 
  <div class="form-group">
    <label for="inputAddress">Localisation</label>
    <input type="text" class="form-control"  name="Local" id="inputAddress" placeholder="Localisation">
  </div>
  <div class="form-group">
    <label for="inputAddress">Commentaire</label>
    <textarea class="form-control"  name="coment" >  </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form> 
         </div>
</div>
</div>
</div>
</div>
</div>
        @endsection
    
