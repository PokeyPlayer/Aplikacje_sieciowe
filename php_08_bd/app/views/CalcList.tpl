{extends file="main.tpl"}

{block name=top}
<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}calcList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Kwota" name="sf_kwota" value="{$searchForm->kwota}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	
{/block}

{block name=bottom}
<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}calcNew">+ Nowe wyliczenie kredytu</a>
</div>	

<table id="tab_wyniki" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Kwota</th>
		<th>Lata</th>
		<th>Oprocentowanie</th>
		<th>Wynik</th>
		<th>Opcje</th>
	</tr>
</thead>
<tbody>
{foreach $wyniki as $w}
{strip}
	<tr>
		<td>{$w["kwota"]}</td>
		<td>{$w["lata"]}</td>
		<td>{$w["oprocentowanie"]}</td>
		<td>{$w["wynik"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}calcEdit&id={$w['IDwynik']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}calcDelete&id={$w['IDwynik']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
{/block}