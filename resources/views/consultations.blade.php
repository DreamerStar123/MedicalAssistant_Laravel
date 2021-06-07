@extends('layouts.app')

@section('content')

<section>
    <form method="POST" action="/consultations" class="consultation">
        @csrf
        <div class="consult-title">
            <p>Consultation</p>
            <div class="consult-lign"></div>
        </div>
        <label class="first-row" for="name">
            <p>Nom du patien</p>
            <input type="text" class="@error('name') is-invalid @enderror" name="name" placeholder="Entrez le nom du patient">
            @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </label>            
        <div class="second-row">
        <label for="phone_client">
            <p>Telephone</p>
            <input type="text" class="@error('phone_client') is-invalid @enderror" name="phone_client">
            @error('phone_client')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </label>
        <label for="CIN">
          <p>CIN</p>
          <input type="text" class="@error('CIN') is-invalid @enderror" name="CIN">
          @error('CIN')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </label>
        <label>
          <p>Médicament</p>
          <input type="text" class="@error('medicament') is-invalid @enderror" name="medicament" placeholder="Entrer le nom du medicament">
          @error('medicament')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </label>
      </div>
      <div class="third-row">
        <label for="posologie">
            <p>Posologie</p>
            <textarea name="posologie" class="@error('posologie') is-invalid @enderror"></textarea>
            @error('posologie')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </label>
        <button type="submit" class="btn-consultation">Enregistrer</button>
      </div>
            
        
    </form>
</section>

@endsection