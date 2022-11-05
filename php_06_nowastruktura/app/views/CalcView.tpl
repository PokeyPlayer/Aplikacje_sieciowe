{extends file="main.tpl"}

{block name=footer}Kalkulator kredytowy wersja 2022{/block}

{block name=content}

<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
		<fieldset>

			<label for="id_kwota">Kwota kredytu: </label>
			<input id="id_kwota" type="text" placeholder="Kwota kredytu" name="kwota" value="{$form->kwota}">
					
			<label for="id_lata">Ile lat: </label>
			<input id="id_lata" type="text" placeholder="Okres spłaty kredytu" name="lata" value="{$form->lata}">

			<label for="id_oprocentowanie">Oprocentowanie kredytu %: </label>
			<input id="id_oprocentowanie" type="text" placeholder="Oprocentowanie kredytu" name="oprocentowanie" value="{$form->oprocentowanie}">

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{if $messages->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $messages->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if $messages->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $messages->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($wynik->wynik)}
	<h4>Miesięczna rata wynosi: </h4>
	<p class="res">
	{$wynik->wynik}
	</p>
{/if}

</div>
</div>

{/block}