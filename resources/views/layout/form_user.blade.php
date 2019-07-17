
@extends('layout.default')

@Section('title')
    <title>Creation de Gestionnaire</title>
@endSection

{{-- Partie qui traite le formulaire pour l'ajout d'un Gestionnaire --}}

@section('page')
<a class="navbar-brand" href="#">Page de création de {{ $client }}</a>
@endsection

@Section('content')
  <br>
  <div class="container">
        <a href="{{ asset('user/gestionnaires') }}" class="col-md-6">
             <button type="submit" class="btn btn-primary"><i class="fas fa-list-times"></i> Listes des {{ $client }}s</button>
        </a>
     </div>
     <br>
  <div class="row justify-content-md-center">
        <form class="form-gestionnaire form col-md-8">
            <h1 class="text-center">Creation d'un nouvel {{ $client }}</h1>
                <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nom" placeholder="Entrer votre Nom">
                </div>
                <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" placeholder="Entrer votre Prenom">
                </div>
                <div class="form-group">
                        <label for="role">Role</label>
                        <select value="{{ $client }}" class="form-control" id="role" name="role">
                                <option value="Gestionnaire">Gestionnaire</option>
                                <option value="Comptable">Comptable</option>
                                <option value="Controlleur">Comptrolleur</option>
                                <option value="Client">Client</option>
                              </select>
                   
                </div>
                <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Entrer votre email">
                </div>
                <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Entrer votre Mot de passe">
                </div>
                <div class="form-group">
                        <label for="repeat-password">Confirmer Mot de Passe</label>
                        <input name="repeat-password" type="password" class="form-control" id="repeat-password" placeholder="Confirmer votre Mot de passe">
                </div>
               <br>
                <button type="submit" id="soumettre" class="btn btn-block btn-primary btn-add-ges">Enrégistrer</button>
            </form>
    </div>
 
@endSection

@section('footer')
     
@endsection