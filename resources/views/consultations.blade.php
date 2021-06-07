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

<section>
  <div class="consultation">
    @foreach ($today as $patient)
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Nom : </h6>
          </div>
          <div class="col-sm-9 text-secondary">
            {{ $patient->name }}
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">CIN : </h6>
          </div>
          <div class="col-sm-9 text-secondary">
            {{ $patient->CIN }}
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">NUM téléphone : </h6>
          </div>
          <div class="col-sm-9 text-secondary">
            {{ $patient->phone_client }}
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Médicament : </h6>
          </div>
          <div class="col-sm-9 text-secondary">
            {{ $patient->medicament }}
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Posologie : </h6>
          </div>
          <div class="col-sm-9 text-secondary">
            {{ $patient->posologie }}
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Date : </h6>
          </div>
          <div class="col-sm-9 text-secondary">
            {{ date('d/m/Y H:i', strtotime($patient->created_at)) }}
          </div>
        </div>
        <hr>
      </div>
    @endforeach
  </div>
</section>

@endsection