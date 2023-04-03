<section  class="row"> 
{foreach $wyniki as $w}
  <article class="col-12 m-1 p-3 border-bottom bg-light-50 product-size">
    <div class="row">
      <div class="col-lg-2 col-md-3">
        <a class="d-block img-mh-130" href="{$conf->action_url}adView&id={$w['IDogloszenie']}"><img src="img/{$w["zdjecie"]}" class="img-fluid d-block mx-auto img-size product-img" alt="Zdjęcie produktu"></a>
      </div>
      <div class="col-lg-7 col-md-5">
        <a href="{$conf->action_url}adView&id={$w['IDogloszenie']}" class="h4 m-2">{$w["tytul"]}</a>
			  <ul class="m-0">
          <li>{$w["nazwa"]}</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4">
         <span class="h3 m-2">Cena: {$w["cena"]} zł</span>
        <br>
        <span class="m-2">Ocena: {$w["srednia_ocen"]}/5</span>
      </div>
    </div>
  </article>
{/foreach}
</section>
<br>
<div class="btn-toolbar mb-2" role="toolbar" style="justify-content: center; display: flex;" aria-label="Toolbar with button groups">
{if $strony > 1}
    {$s}
{/if}
</div>