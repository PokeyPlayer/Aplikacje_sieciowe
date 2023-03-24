{extends file="main.tpl"}

{block name=top}
<div class="d-flex flex-column align-items-center bg-white-80 p-2">
	<form class="pure-form pure-form-aligned" action="{$conf->action_url}adminView" method="post">
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
      <div class="table-responsive">
        <table class="table table-hover bg-white-80" >
          <thead>
	          <tr>
		          <th>ID</th>
		          <th>Imię</th>
		          <th>Nazwisko</th>
		          <th>Email</th>
		          <th>Login</th>
              	  <th>Edycja</th>
              	  <th>Usuwanie</th>
	          </tr>
          </thead>

          <tbody>
          {foreach $uzytkownicy as $u}
          {strip}
	          <tr>
		           <td>{$u["IDuzytkownik"]}</td>
		           <td>{$u["imie"]}</td>
		           <td>{$u["nazwisko"]}</td>
		           <td>{$u["email"]}</td>
                   <td>{$u["login"]}</td>
		           <td>
			        	<a class="btn btn-block btn-primary" href="{$conf->action_url}userEdit&id={$u['IDuzytkownik']}" role="button">Edytuj</a>
		            </td>
                	<td>
                  		<a class="btn btn-block btn-danger" href="{$conf->action_url}userDelete&id={$u['IDuzytkownik']}" role="button">Usuń</a>
                	</td>
	          </tr>
          {/strip}
          {/foreach}
          </tbody>
        </table>
      </div>
  </section>
</div>
{/block}