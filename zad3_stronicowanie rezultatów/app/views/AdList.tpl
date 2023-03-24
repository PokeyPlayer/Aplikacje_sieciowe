{extends file="main.tpl"}

{block name=top}
<div class="d-flex flex-column align-items-center bg-white-80 p-2">
  <form class="pure-form pure-form-stacked" action="{$conf->action_url}adList" method="post">
	  <div class="form-group mb-2">
		  <legend>Lista ogłoszeń</legend>
		  <fieldset>
			  <input type="text" placeholder="Wpisz słowo kluczowe" name="sf_tytul" value="{$searchForm->tytul}" />
      </fieldset>
		  <button type="submit" name="submit" class="btn btn-primary mb-2 ml-2">Wyszukaj</button>
	  </div>
  </form>
</div>
{/block}

{block name=bottom}
<div class="container">
  <section class="row"> 
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
</div>
{/block}