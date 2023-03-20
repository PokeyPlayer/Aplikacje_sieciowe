{extends file="main.tpl"}

{block name=top}
<div class="container">
	<form action="{$conf->action_root}registration" method="post"  class="pure-form pure-form-aligned bottom-margin">
		<fieldset>
		<div class="form-row mt-4">
    		<div class="col-lg-4 offset-lg-4 rounded-top text-center pt-3 pr-3 pl-3 bg-light-50">
				<h3>Rejestracja</h3><br>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_imie">Imię: </label>
					<input id="id_imie" type="text" class="form-control" name="imie" placeholder="Podaj imię" value="{$form->imie}" />
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_nazwisko">Nazwisko: </label>
					<input id="id_nazwisko" type="text" class="form-control" name="nazwisko" placeholder="Podaj nazwisko" value="{$form->nazwisko}" />
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_email">Email: </label>
					<input id="id_email" type="email" class="form-control" name="email" placeholder="Podaj email" value="{$form->email}" />
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_miasto">Miasto: </label>
					<input id="id_miasto" type="text" class="form-control" name="miasto" placeholder="Podaj miasto" value="{$form->miasto}" />
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_numer_tel">Numer telefonu: </label>
					<input id="id_numer_tel" type="number" class="form-control" name="numer_tel" placeholder="Podaj numer telefonu" value="{$form->numer_tel}" />
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_login">Login: </label>
					<input id="id_login" type="text" class="form-control" name="login" placeholder="Podaj login" value="{$form->login}" />
				</div>
			</div>

    		<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
        		<div class="form-group">
					<label class="d-none" for="id_haslo">Hasło: </label>
					<input id="id_haslo" type="password" class="form-control" name="haslo" placeholder="Podaj hasło"/>
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
        		<div class="form-group">
					<label class="d-none" for="id_haslo2">Hasło: </label>
					<input id="id_haslo2" type="password" class="form-control" name="haslo2" placeholder="Powtórz hasło"/>
				</div>	
			</div>

			<div class="col-lg-4 offset-lg-4 rounded-bottom pb-3 pr-3 pl-3 bg-light-50">
				<input type="submit" value="Zarejestruj się" class="btn btn-primary btn-block mb-2"/>
			</div>
		</div>	
		</fieldset>
	</form>
</div>
{/block}