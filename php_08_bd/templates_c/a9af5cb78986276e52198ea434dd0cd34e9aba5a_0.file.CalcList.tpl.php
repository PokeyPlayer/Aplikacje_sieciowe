<?php
/* Smarty version 3.1.30, created on 2022-11-27 14:50:05
  from "C:\xampp\htdocs\php_08_bd\app\views\CalcList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63836b0d3db849_96684287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9af5cb78986276e52198ea434dd0cd34e9aba5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_bd\\app\\views\\CalcList.tpl',
      1 => 1669556919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63836b0d3db849_96684287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65797084663836b0d3d0c39_27311257', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191832443463836b0d3db407_83733887', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_65797084663836b0d3d0c39_27311257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Kwota" name="sf_kwota" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->kwota;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_191832443463836b0d3db407_83733887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcNew">+ Nowe wyliczenie kredytu</a>
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wyniki']->value, 'w');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['w']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["lata"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["oprocentowanie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["wynik"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcEdit&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDwynik'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcDelete&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDwynik'];?>
">Usuń</a></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</tbody>
</table>
<?php
}
}
/* {/block 'bottom'} */
}
