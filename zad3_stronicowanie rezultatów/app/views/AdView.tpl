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
      <div class="col-lg-4">
        <span class="h4 m-2">Cena: {$w["cena"]} zł</span><br>
        <span class="m-2">Ocena: {$w["srednia_ocen"]}/5</span>     
      </div>
      <div class="col-lg-3">
        <a class="btn btn-info btn-block m-2" href="{$conf->action_root}adList" role="button">Wróć do przeglądania</a>
        <a class="btn btn-primary btn-block m-2" href="{$conf->action_url}addComment&id={$w['IDogloszenie']}" role="button">Oceń ogłoszenie</a>
      </div>
      <h3>Opis</h3>
      <div style="background-color: #ADD8E6; font-size: 18px;" class="col-lg-12 rounded">
        <span class="p-4 d-block">{$w["opis"]}</span>
      </div>
      <div class="col-lg-12">
        <hr>
      </div>
      <div class="col-lg-12">
        <h3>Opinie</h3>
        {foreach $wyniki2 as $w2} 
          <div class="border rounded p-3 bg-gray-10 my-2">
            <div>
              <span class="font-weight-bold">{$w2["imie"]} ocenił ogłoszenie {$w2["ocena"]}/5</span>
            </div>
            <div>
              {$w2["komentarz"]}
            </div>
          </div>
        {/foreach}
      </div>
    </div>
    <input type="hidden" name="id" value="{$form->id}">
  {/foreach}
</div>
{/block}