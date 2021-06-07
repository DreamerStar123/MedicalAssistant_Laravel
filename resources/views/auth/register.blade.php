@extends('layouts.app')

@section('content')

<div class="signup">
    <div id="signup_hover">
      <img src="assets/img/dr.jpg" class="img-fluid signup-img">
      <h1 class="inscrire"><b>S'INSCRIRE</b></h1>
    </div>
    <div class="lign"></div>
    <section id="inscrire">
      <form method="POST" action="{{ route('register') }}" class="d-flex">
        @csrf

        <div class="pi_0">
          <div class="title align">
            <label>Titre</label>
            {{-- <input class="form-control form-control-sm" type="text" placeholder="Dr./Pr." name="title" aria-label=".form-control-sm example" value="{{ old('title') }}"> --}}
            <select class="form-control form-control-sm" name="title" id="title">
              <option value="Dr.">Dr.</option>
              <option value="Pr.">Pr.</option>
            </select>
          </div>
          <div class="name align">
            <label for="name">Prénom</label>
            <input class="form-control form-control-sm @error('name') is-invalid @enderror" type="text" name="name"  value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="lastname align">
            <label for="lastname">Nom</label>
            <input class="form-control form-control-sm @error('lastname') is-invalid @enderror" type="text" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>
            <span class="text-danger">@error('lastname') {{ $message }} @enderror</span>
          </div>
          <div class="email align">
            <label for="email">Email</label>
            <input class="form-control form-control-sm @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
            <p>Nous ne divulguerons pas votre adresse email. Celle-ci nous sert<br>
              uniquement à vous communiquer des informations importantes.
            </p>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="password align">
            <label for="password">Password</label>
            <input class="form-control form-control-sm @error('email') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
            <p>Choisissez un mot de passe pour votre compte T-Care.<br>
              Le mot de passe doit comporter au moins 8 caractères.
            </p>
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="pc_0 align">
            <label for="password">Confirmation du mot de passe</label>
            <input class="form-control form-control-sm" type="password" name="password_confirmation" required autocomplete="new-password">
          </div>
        </div>
        <div class="pi_1">
          <div class="specialite align">
            <label>Spécialité(s)</label>
            <input class="form-control form-control-sm" type="text" name="specialite" aria-label=".form-control-sm example" value="{{ old('') }}">
          </div>
          <div class="mb-3 align">
            <label for="exampleFormControlTextarea1" class="form-label">Numéro et rue du cabinet</label>
            <textarea class="form-control textarea " id="exampleFormControlTextarea1" placeholder="Exemple : 11, Avenue du 16
            Novembre" rows="3" name="adresse"></textarea>
          </div>
          <div class="ville align">
            <label>Ville</label>
            @include('sets.cities')
          </div>
          <div class="phone_0 align">
            <label>Numéro de Téléphone (cabinet)</label>
            <input class="form-control form-control-sm" type="text" name="phone_ca" aria-label=".form-control-sm example" value="{{ old('phone_ca') }}">
          </div>
          <div class="phone_1 align">
            <label>Numéro de portable</label>
            <input class="form-control form-control-sm" type="text" name="phone_per" aria-label=".form-control-sm example" value="{{ old('phone_per') }}">
            <p>Ne sera utilisé que par l'équipe T-Care.<br>
              Ne sera pas communiqué aux patients.
            </p>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">
              Je certifie sur l’honneur<br>
              être un professionnel de santé
            </label>
            </div>
          <input class="btn btn-primary mb-3" type="submit" value="inscrire" required><br>
          <a href="/login">J’ai déjà un compte T-Care</a>
        </div>
      </form>
    </section>
</div>

@endsection
