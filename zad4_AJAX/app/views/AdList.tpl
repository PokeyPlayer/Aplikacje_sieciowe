{extends file="main.tpl"}

{block name=top}
<div class="d-flex flex-column align-items-center bg-white-80 p-2">
  <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_root}adListPart','table'); return false;">
	  <div class="form-group mb-2">
		  <legend>Lista ogłoszeń</legend>
		  <fieldset>
			  <input type="text" placeholder="Wpisz słowo kluczowe" name="sf_tytul" value="{$searchForm->tytul}"/>
      </fieldset>
		  <button type="submit" name="submit" class="btn btn-primary mb-2 ml-2">Wyszukaj</button>
	  </div>
  </form>
</div>
{/block}

{block name=bottom}
<div id="table" class="container">
  {include file="AdListTable.tpl"} 
</div>
{/block}