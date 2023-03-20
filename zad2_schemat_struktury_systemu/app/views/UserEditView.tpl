{extends file="main.tpl"}

{block name=top}
<div class="container">
	<form action="{$conf->action_root}userSave" method="post"  class="pure-form pure-form-aligned bottom-margin">
    <fieldset>
      <div class="col-lg-5 offset-lg-3 rounded-top text-center pt-3 pr-3 pl-3 bg-light-50">
			  <h2>Edycja profilu użytkownika</h2><br>
		  </div>
		  <div class="form-group row">
        <label for="imie" class="col-lg-2 col-form-label">Imię</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="imie" name="imie" placeholder="Podaj imię" value="{$form->imie}">
        </div>
      </div>

      <div class="form-group row">
        <label for="nazwisko" class="col-lg-2 col-form-label">Nazwisko</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Podaj nazwisko" value="{$form->nazwisko}">
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-lg-2 col-form-label">E-mail</label>
        <div class="col-lg-8">
          <input type="email" class="form-control" id="email" name="email" placeholder="Podaj email"  value="{$form->email}">
        </div>
      </div>

		  <div class="form-group row">
        <label for="miasto" class="col-lg-2 col-form-label">Miasto</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="miasto" name="miasto" placeholder="Podaj miasto" value="{$form->miasto}">
        </div>
      </div>

      <div class="form-group row">
        <label for="numer_tel" class="col-lg-2 col-form-label">Numer telefonu</label>
        <div class="col-lg-8">
          <input type="number" class="form-control" id="numer_tel" name="numer_tel" placeholder="Podaj numer telefonu"  value="{$form->numer_tel}">
        </div>
      </div>

      <div class="form-group row mb-0">
        <div class="col-lg-12">
          <input type="submit" class="btn btn-primary" value="Edytuj profil">
          <a class="btn btn-info" href="{$conf->action_root}adminView" role="button">Powrót</a>
        </div>
      </div>
		  <input type="hidden" name="IDuzytkownik" value="{$form->IDuzytkownik}">
    </fieldset>
	</form>		
</div>
{/block}