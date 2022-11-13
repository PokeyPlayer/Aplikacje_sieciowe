{if $messages->isError()}
<div class="messages error">
	<ol>
	{foreach $messages->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
</div>
{/if}

{if $messages->isInfo()}
<div class="messages info bottom-margin">
	<ol>
	{foreach $messages->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
</div>
{/if}