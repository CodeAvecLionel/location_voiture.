@extends('layouts.base')
@section('content')

<p class="contact"><strong>Qui sommes nous</strong></p>
<hr>
<a class="back" href="{{route('home')}}"><i class="bi bi-arrow-left-square-fill"></i></a></i>


<div class="container my-1 py-1 z-depth-1">
 <section class="text-center px-md-5 mx-md-5 dark-grey-text">
   <div class="row d-flex justify-content-center">
     @foreach($contacts as $contact)
     <div class="col-lg-7">
       <p class="titre2">{{$contact -> desc_site }}</p>
     </div>
     <hr>
     <p class="titre">Ce que nous offrons</p>
     <hr>
     <div class="col-lg-7">
        <p class="titre1">Flotte de Voitures Variée :</p>
       <p class="titre2">{{$contact -> flotte_de_voiture }}</p>
     </div>
     <hr>
     <div class="col-lg-7">
        <p class="titre1">Tarifs Compétitifs :</p>
       <p class="titre2">{{$contact -> tarifs_competitif }}</p>
     </div>
     <hr>
     <div class="col-lg-7">
        <p class="titre1">Facilité de Réservation en Ligne :</p>
       <p class="titre2">{{$contact -> facilite_de_reservation_en_ligne }}</p>
     </div>
     <hr>
     <div class="col-lg-7">
        <p class="titre1">Service Clientèle Exceptionnel :</p>
       <p class="titre2" >{{$contact -> service_clientele }}</p>
     </div>
     <hr>
     <div class="col-lg-7">
        <p class="titre1">Assurance et Sécurité : </p>
       <p class="titre2">{{$contact -> assurance_securite }}</p>
     </div>
     <hr>
     <div class="col-lg-7">
        <p class="titre1">Programme de Fidélité : </p>
       <p class="titre2">{{$contact -> programe_de_facilite }}</p>
     </div>
     <hr>
   </div>
 </section>
</div>


<div class="container my-3 py-3 z-depth-1">
<section class="text-center px-md-3 mx-md-3 dark-grey-text">
  <div class="row">
    <div class="col-lg-6 mb-lg-0 mb-md-4">
      <div class="view overlay z-depth-1-half">
        <img src="img/team/team-1.jpg" class="img-fluid"
          alt="">
        <a href="#">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <div class="col-lg-6 ">
      <h2 class="font-weight-bold">Telechargée notre carnet d'offre</h2>
      <hr>
      
      <p class="titre2">{{$contact -> appel_a_laction }}</p>
      @endforeach
      <a class="btn btn-info btn-md waves-effect" href="#" role="button">Download<i
          class="fa fa-download ml-1"></i></a>
    </div>
  </div>
</section>
</div>




<style>
      .contact{
        margin-top: 2em;
        text-align: center;
        text-transform: uppercase;
        text-decoration: solid;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 50px;
        font-style: normal;
        background: burlywood;
    }

    .back{
            margin-top: 5em;
            color: red;
            justify-content: center;
            font-size: 30px;
            margin-left: 50%;
        }

    .titre{
        text-align: center;
        text-transform: uppercase;
        text-decoration: solid;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 20px;
        font-style: normal;
        background: burlywood;
    }
    .titre1{
        text-align: left;
        text-transform: uppercase;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 20px;
        font-style: normal;
    }
    .titre2{
        text-align: left;
        font-size: 15px;
        font-style: normal;
    }
</style>

@endsection