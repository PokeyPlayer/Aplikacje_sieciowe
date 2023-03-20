{extends file="main.tpl"}

{block name=top}
<div class="container">
  <form action="{$conf->action_root}advertisementSave" method="post" enctype="multipart/form-data" class="pure-form pure-form-aligned bottom-margin">
    <div class="form-row">
      <div class="col-lg-4 offset-lg-4 rounded-top text-center pt-3 pr-3 pl-3 bg-light-50">
			  <h2>Edycja ogłoszenia</h2><br>
		  </div>
      <div class="form-group col-md-8">
        <label for="tytul">Tytuł ogłoszenia</label>
        <input type="text" name="tytul" class="form-control" id="tytul" placeholder="Podaj tytuł ogłoszenia" value="{$form->tytul}"/>
      </div>
        
      <div class="form-group col-md-4">
        <label for="kategoria">Kategoria ogłoszenia</label>
        <select class="form-control" name="kategoria" id="kategoria" value="{$form->kategoria}">
          <option  value="{$form->kategoria}">{$form->kategoria_nazwa}</option>
          <option  value="1">Motoryzacja</option>
          <option  value="2">Elektronika</option>
          <option  value="3">Ubrania</option>
          <option  value="4">Nieruchomości</option>
          <option  value="5">Meble</option>
          <option  value="6">Sport</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="opis">Opis ogłoszenia</label>
      <textarea name="opis" class="form-control" id="opis" placeholder="Podaj opis ogłoszenia" rows="10">{$form->opis}</textarea>
    </div>

    <div class="form-group col-md-4">
      <label for="cena">Cena</label>
      <input type="number" name="cena" class="form-control" id="cena" placeholder="Cena w zł" value="{$form->cena}"/>
    </div>

    <div class="form-group row mb-0">
      <div class="col-lg-12">
        <input type="submit" value="Edytuj ogłoszenie" class="btn btn-primary"/>
        <a class="btn btn-info" href="{$conf->action_root}myAdvertisements" role="button">Powrót</a>
      </div>
      <input type="hidden" name="IDogloszenie" value="{$form->IDogloszenie}">
    </div>
  </form>
</div>
{/block}