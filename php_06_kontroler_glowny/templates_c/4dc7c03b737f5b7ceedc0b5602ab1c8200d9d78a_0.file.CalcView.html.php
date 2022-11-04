<?php
/* Smarty version 3.1.30, created on 2022-11-04 16:42:51
  from "C:\xampp\htdocs\php_06_kontroler_glowny\app\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636532fba23419_19213027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dc7c03b737f5b7ceedc0b5602ab1c8200d9d78a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_kontroler_glowny\\app\\CalcView.html',
      1 => 1667319970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636532fba23419_19213027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1863500099636532fb9de397_64644875', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1963910666636532fba22aa1_02103787', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_1863500099636532fb9de397_64644875 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator kredytowy wersja 2022<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1963910666636532fba22aa1_02103787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
		<fieldset>

			<label for="id_kwota">Kwota kredytu: </label>
			<input id="id_kwota" type="text" placeholder="Kwota kredytu" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
					
			<label for="id_lata">Ile lat: </label>
			<input id="id_lata" type="text" placeholder="Okres spłaty kredytu" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
">

			<label for="id_oprocentowanie">Oprocentowanie kredytu %: </label>
			<input id="id_oprocentowanie" type="text" placeholder="Oprocentowanie kredytu" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
">

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['wynik']->value->wynik)) {?>
	<h4>Miesięczna rata wynosi: </h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['wynik']->value->wynik;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
