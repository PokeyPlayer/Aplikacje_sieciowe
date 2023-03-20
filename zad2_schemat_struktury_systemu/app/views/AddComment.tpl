{extends file="main.tpl"}

{block name=top}
<div class="container">
  {foreach $wyniki as $w}  
    <div class="row bg-white-80 p-2">
      <div class="col-lg-12">
        <h2>{$w["tytul"]}</h2>
        <h5>Kategoria: {$w["nazwa"]}</h5>
      </div>
      <div class="col-lg-5 ">
        <img src="img/{$w["zdjecie"]}" class="product-img2" alt="Zdjęcie produktu">
      </div>
      <div class="col-lg-7">
        <a href="{$conf->action_url}adView&id={$w['IDogloszenie']}" class="btn btn-info btn-block">Wróć do ogłoszenia</a>
        <form class="pure-form pure-form-aligned" action="{$conf->action_root}addSave" method="post">
          <input type="hidden" name="id" value="{$form->id}">
          <div class="form-group">
            <label for="ocena">Ocena:</label>
            <select class="form-control" id="ocena" name="ocena">
              <option value="1">1 - niedostatecznie</option>
              <option value="2">2 - dopuszczająco</option>
              <option value="3">3 - dostatecznie</option>
              <option value="4">4 - dobrze</option>
              <option value="5">5 - bardzo dobrze</option>
            </select>
          </div>
          <div class="form-group">
            <label for="komentarz">Komentarz</label>
            <textarea class="form-control" id="komentarz" name="komentarz" aria-describedby="komentarzPomoc" rows="4"></textarea>
            <small id="komentarzPomoc" class="form-text text-muted">Komentarz nie jest obowiązkowy, możesz dodać samą ocenę. Pamiętaj jednak, że nie możesz dodać komentarza bez oceny</small>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Dodaj opinię</button><br>
        </form>
      </div>
      <h3>Opis</h3>
      <div style="background-color: #ADD8E6; font-size: 18px;" class="col-lg-12 rounded">
        <span class="p-4 d-block">{$w["opis"]}</span>
      </div>
    </div>
    <input type="hidden" name="id" value="{$form->id}">
    <input type="hidden" name="id" value="{$form->IDuzytkownik}">
  {/foreach}
</div>
{/block}