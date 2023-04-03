<?php
/* Smarty version 3.1.30, created on 2022-11-14 19:49:28
  from "C:\xampp\htdocs\php_07_routing\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63728db8417b44_70732935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3cf26c09d30360a056e0aaa32f121a7c251f925' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07_routing\\app\\views\\CalcView.tpl',
      1 => 1668451214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_63728db8417b44_70732935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27883796263728db8417018_55931653', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_27883796263728db8417018_55931653 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_kwota">Kwota kredytu: </label>
			<input id="id_kwota" type="text" placeholder="Kwota kredytu" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
		</div>
        <div class="pure-control-group">
			<label for="id_lata">Ile lat: </label>
			<input id="id_lata" type="text" placeholder="Okres spłaty kredytu" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
">
		</div>
        <div class="pure-control-group">
			<label for="id_oprocentowanie">Oprocentowanie kredytu %: </label>
			<input id="id_oprocentowanie" type="text" placeholder="Oprocentowanie kredytu" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
">
		</div>
		<div class="pure-controls">
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['wynik']->value->wynik)) {?>
<div class="messages info">
	Miesięczna rata wynosi: <?php echo $_smarty_tpl->tpl_vars['wynik']->value->wynik;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
