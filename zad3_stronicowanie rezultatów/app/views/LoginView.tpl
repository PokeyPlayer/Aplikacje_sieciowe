{extends file="main.tpl"}

{block name=top}
<div class="container">
	<form action="{$conf->action_root}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
		<fieldset>
		<div class="form-row mt-4">
    		<div class="col-lg-4 offset-lg-4 rounded-top text-center pt-3 pr-3 pl-3 bg-light-50">
				<h3>Logowanie do systemu</h3><br>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label for="id_login">Login: </label>
					<input id="id_login" type="text" class="form-control" name="login" placeholder="Podaj login" value="{$form->login}" />
				</div>
			</div>

    		<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
        		<div class="form-group">
					<label for="id_haslo">Hasło: </label>
					<input id="id_haslo" type="password" class="form-control" name="haslo" placeholder="Podaj hasło"/><br/>
				</div><br>
			</div>

			<div class="col-lg-4 offset-lg-4 rounded-bottom pb-3 pr-3 pl-3 bg-light-50">
				<input type="submit" value="Zaloguj się" class="btn btn-primary btn-block mb-2"/>
				<span class="d-block">
        			Brak konta?
        			<a href="{$conf->action_root}registrationShow">Zarejestruj się!</a>
        		</span>
			</div>
		</div>
		</fieldset>
	</form>
</div>
{/block}