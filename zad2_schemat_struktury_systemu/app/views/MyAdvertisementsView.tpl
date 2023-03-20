{extends file="main.tpl"}

{block name=top}
  <div class="d-flex flex-column align-items-center bg-white-80 p-2"><br>
    <h4>Moje ogłoszenia</h4>
  </div>
<hr>
{/block}

{block name=bottom}
<div class="container">
  <section class="row"> 
	{foreach $wyniki as $w}   
    <article class="col-12 m-1 p-3 border-bottom bg-light-50 rounded product-size">
      <div class="row">
        <div class="col-lg-2 col-md-3">
          <img src="img/{$w["zdjecie"]}" class="img-fluid d-block mx-auto  product-img" alt="Zdjęcie produktu">
        </div>
        <div class="col-lg-5 col-md-5">
          <a class="h4 m-2">{$w["tytul"]}</a>
			    <ul class="m-0">
            <li>{$w["nazwa"]}</li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4">
          <span class="h4 m-2">Cena: {$w["cena"]} zł</span>
          <br>
          <span class="m-2">Ocena: {$w["srednia_ocen"]}/5</span>
        </div>
        <div class="col-lg-2 col-md-4">
          <a class="btn btn-primary btn-block m-2" href="{$conf->action_url}advertisementEdit&id={$w['IDogloszenie']}" role="button">Edytuj ogłoszenie</a>
          <a class="btn btn-danger btn-block m-2" href="{$conf->action_url}advertisementDelete&id={$w['IDogloszenie']}" role="button">Usuń ogłoszenie</a>
        </div>
      </div>
    </article>
	{/foreach}
  </section>
</div>
{/block}