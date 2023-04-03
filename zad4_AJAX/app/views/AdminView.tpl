{extends file="main.tpl"}

{block name=top}
<div class="d-flex flex-column align-items-center bg-white-80 p-2">
	<form id="search-form" class="pure-form pure-form-aligned" onsubmit="ajaxPostForm('search-form','{$conf->action_root}adminViewPart','table'); return false;">
		<div class="form-group mb-2">
			<legend>Zarządzanie użytkownikami</legend>
			<fieldset>
				<input type="text" placeholder="Wyszukaj użytkownika" name="sf_uzytkownik" value="{$searchForm2->uzytkownik}" />
			</fieldset>
			<button type="submit" class="btn btn-primary mb-2">Wyszukaj</button>
		</div>
	</form>
</div>	
{/block}

{block name=bottom}
<div class="container">
  <section class="row">
      <div id="table" class="table-responsive">
	  	{include file="AdminViewTable.tpl"}
      </div>
  </section>
</div>
{/block}