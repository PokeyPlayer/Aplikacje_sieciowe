<?php
/* Smarty version 3.1.30, created on 2022-11-27 11:31:18
  from "C:\xampp\htdocs\php_08_bd\app\views\PersonList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63833c766b99b1_18607172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b74878dce5409c21350af0f33884bd2027e740a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_bd\\app\\views\\PersonList.tpl',
      1 => 1669545055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63833c766b99b1_18607172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78958676563833c766ad887_12573112', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104716177863833c766b9576_26439902', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_78958676563833c766ad887_12573112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList">
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
class Block_104716177863833c766b9576_26439902 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">+ Nowe wyliczenie kredytu</a>
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
personEdit&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDwynik'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDwynik'];?>
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
