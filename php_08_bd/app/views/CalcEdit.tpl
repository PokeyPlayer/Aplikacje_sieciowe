{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}calcSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane kredytu</legend>
		<div class="pure-control-group">
            <label for="kwota">Kwota: </label>
            <input id="kwota" type="text" placeholder="Kwota kredytu" name="kwota" value="{$form->kwota}">
        </div>
		<div class="pure-control-group">
            <label for="lata">Lata: </label>
            <input id="lata" type="text" placeholder="Okres kredytowania (lata)" name="lata" value="{$form->lata}">
        </div>
		<div class="pure-control-group">
            <label for="oprocentowanie">Oprocentowanie: </label>
            <input id="oprocentowanie" type="text" placeholder="Oprocentowanie kredytu" name="oprocentowanie" value="{$form->oprocentowanie}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}calcList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="{$form->id}">
</form>	
</div>
{/block}