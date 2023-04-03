<?php
/* Smarty version 3.1.30, created on 2023-04-03 19:46:33
  from "C:\xampp\htdocs\AS_projekt\app\views\AdminView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_642b10f9b18e15_57014355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2e9321f0dde1534593d3ca4791bfadc60f1782' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\AdminView.tpl',
      1 => 1680543947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:AdminViewTable.tpl' => 1,
  ),
),false)) {
function content_642b10f9b18e15_57014355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2012574400642b10f9b17637_32100434', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_545742922642b10f9b18766_01465969', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_2012574400642b10f9b17637_32100434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="d-flex flex-column align-items-center bg-white-80 p-2">
	<form id="search-form" class="pure-form pure-form-aligned" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminViewPart','table'); return false;">
		<div class="form-group mb-2">
			<legend>Zarządzanie użytkownikami</legend>
			<fieldset>
				<input type="text" placeholder="Wyszukaj użytkownika" name="sf_uzytkownik" value="<?php echo $_smarty_tpl->tpl_vars['searchForm2']->value->uzytkownik;?>
" />
			</fieldset>
			<button type="submit" class="btn btn-primary mb-2">Wyszukaj</button>
		</div>
	</form>
</div>	
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_545742922642b10f9b18766_01465969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <section class="row">
      <div id="table" class="table-responsive">
	  	<?php $_smarty_tpl->_subTemplateRender("file:AdminViewTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div>
  </section>
</div>
<?php
}
}
/* {/block 'bottom'} */
}
