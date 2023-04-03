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