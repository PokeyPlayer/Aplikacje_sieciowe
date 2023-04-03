{extends file="main.tpl"}

{block name=top}
<div class="container">
  <form action="{$conf->action_root}addAdvertisement" method="post" enctype="multipart/form-data" class="pure-form pure-form-aligned bottom-margin">
    <div class="form-row">
      <div class="col-lg-4 offset-lg-4 rounded-top text-center pt-3 pr-3 pl-3 bg-light-50">
			  <h2>Dodawanie ogłoszenia</h2><br>
		  </div>
      <div class="form-group col-md-8">
        <label for="tytul">Tytuł ogłoszenia</label>
        <input type="text" name="tytul" class="form-control" id="tytul" placeholder="Podaj tytuł ogłoszenia" value="{$form->tytul}"/>
      </div>

      <div class="form-group col-md-4">
        <label for="kategoria">Kategoria ogłoszenia</label>
        <select class="form-control" name="kategoria" id="kategoria" value="{$form->kategoria}">
          <option value="0">--wybierz--</option>
          <option value="1">Motoryzacja</option>
          <option value="2">Elektronika</option>
          <option value="3">Ubrania</option>
          <option value="4">Nieruchomości</option>
          <option value="5">Meble</option>
          <option value="6">Sport</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="opis">Opis ogłoszenia</label>
      <textarea name="opis" class="form-control" id="opis" placeholder="Podaj opis ogłoszenia" value="{$form->opis}" rows="10"></textarea>
    </div>

    <div class="form-group col-md-4">
      <label for="cena">Cena</label>
      <input type="number" name="cena" class="form-control" id="cena" placeholder="Cena w zł" value="{$form->cena}"/>
    </div>

    <div class="form-group">
      <label for="zdjecie">Dodaj zdjęcie do ogłoszenia</label>
      <input type="file" name="zdjecie" class="form-control-file" id="zdjecie" />
    </div>
      
    <input type="submit" value="Dodaj ogłoszenie" class="btn btn-primary btn-block"/>
    <a class="btn btn-info btn-block" href="{$conf->action_root}adList" role="button">Powrót</a>
    <input type="hidden" name="id_uzyt" value="{$form->id_uzyt}">
    
  </form>
</div>
{/block}