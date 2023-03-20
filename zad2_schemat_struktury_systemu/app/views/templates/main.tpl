<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Projekt serwis ogloszeniowy</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/bootstrap.min.css">
</head>

<body style="margin: 20px;">
<div class="pure-menu pure-menu-horizontal bottom-margin">
{if (count($conf->roles)>0 && $smarty.session.IDuzytkownik!=1 && ($conf->roles['user']))}
	<a href="{$conf->action_root}adList" class="pure-menu-heading pure-menu-link">Lista ogloszeń</a>
	<a href="{$conf->action_root}addAdvertisementShow" class="pure-menu-heading pure-menu-link">Dodaj ogłoszenie</a>
	<a href="{$conf->action_root}myAdvertisements" class="pure-menu-heading pure-menu-link">Moje ogłoszenia</a>
	<a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
{elseif (count($conf->roles)>0 && $smarty.session.IDuzytkownik==1 && ($conf->roles['admin']))}
	<a href="{$conf->action_root}adminView" class="pure-menu-heading pure-menu-link">Panel administracyjny</a>
	<a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
{else}	
	<a href="{$conf->action_root}adList" class="pure-menu-heading pure-menu-link">Lista ogloszeń</a>
	<a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Logowanie</a>
	<a href="{$conf->action_root}registrationShow" class="pure-menu-heading pure-menu-link">Rejestracja</a>
{/if}
</div>
<hr>

{block name=messages}
{if $messages->isError()}
	<div class="messages error">
		{foreach $messages->getErrors() as $msg}
		{strip}
			{$msg}
			<br>
		{/strip}
		{/foreach}
	</div>
{/if}

{if $messages->isInfo()}
	<div class="messages info">
		{foreach $messages->getInfos() as $msg}
		{strip}
			{$msg}
			<br>
		{/strip}
		{/foreach}
	</div>
{/if}
{/block}

{block name=top} {/block}

{block name=bottom} {/block}
<br><br>

{block name=footer}
<div class="footer text-center text-light">
	<p>© 2023 Projekt serwis ogłoszeniowy </p>
</div>
{/block}

</div>
</body>
</html>