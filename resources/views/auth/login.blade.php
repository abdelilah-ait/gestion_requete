@extends('app')

@section('content')
    <div class="container">
      <div class="profile">
        <button class="profile__avatar" id="toggleProfile">
          <img src="../../assets/img/login.png" alt="Avatar" /> 
              <!-- <span class="fa fa-user-circle fa-5x" aria-hidden="true"></span> -->
        </button>
        <form action="{{route('validatelogin')}}" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="profile__form">
              <div class="profile__fields">
                <div class="title">
                  <!-- <span>
                      Système de Suivi et Traitement des Requêtes
                  </span> -->
                  <img src="../../assets/img/title.png" alt="Avatar" />
                </div>
                <div class="field">
                  <input type="text" id="fieldUser" name="user" class="input" value="{{ old('user') }}" required pattern=.*\S.* />
                  <label for="fieldUser" class="label">Nom d'utilisateur</label>
                </div>
                <div class="field">
                  <input type="password" id="fieldPassword" name="password" class="input" required pattern=.*\S.* />
                  <label for="fieldPassword" class="label">Mot de passe</label>
                </div>
                <div class="profile__footer">
                   <div class="button raised blue only_button">
                      <div class="center"><button name="submit" type="submit" style="height: 43px;">Se connecter</button></div>
                      <paper-ripple fit></paper-ripple>
                    </div>
                </div>

              </div>
           </div>
        </form>
        
      </div>
    </div>
@endsection
