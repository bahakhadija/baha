@extends('base')
 
@section('contenu')
    <div class="o-page o-page--center">
      <div class="o-page__card">
        <div class="c-card c-card--center">
          <span class="c-icon c-icon--large u-mb-small">
            <img src="" alt="logo">
          </span>

          <h4 class="u-mb-medium">Se connecter</h4>
          <form method="POST">
            {{ csrf_field() }}
            <div class="c-field">
              <label class="c-field__label">ADRESSE E-MAIL</label>
              <input class="c-input u-mb-small" type="email" name="email" placeholder="Adresse E-mail" required="">
            </div>
            
            <div class="c-field">
              <label class="c-field__label" style="
    float: left;
">MOT DE PASSE</label>
              <a href="Forgot_password.html" style="
    float: right;
">mot de passe oublié ?</a>
    <input class="c-input u-mb-small" type="password" name="password" placeholder="Entrer mot de passe" required="">
            </div>

            <a href="/" class="c-btn c-btn--fullwidth c-btn--info">Se connecter</a>
          </form>
        </div>
      </div>
    </div>

    

@endsection