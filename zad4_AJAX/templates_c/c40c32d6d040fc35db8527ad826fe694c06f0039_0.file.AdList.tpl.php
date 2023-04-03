<?php
/* Smarty version 3.1.30, created on 2023-04-03 19:46:46
  from "C:\xampp\htdocs\AS_projekt\app\views\AdList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_642b11067dfb49_58563049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c40c32d6d040fc35db8527ad826fe694c06f0039' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\AdList.tpl',
      1 => 1680543962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:AdListTable.tpl' => 1,
  ),
),false)) {
function content_642b11067dfb49_58563049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_774091393642b11067de654_09190435', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_700360461642b11067df7d6_45626581', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_774091393642b11067de654_09190435 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="d-flex flex-column align-items-center bg-white-80 p-2">
  <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adListPart','table'); return false;">
	  <div class="form-group mb-2">
		  <legend>Lista ogłoszeń</legend>
		  <fieldset>
			  <input type="text" placeholder="Wpisz słowo kluczowe" name="sf_tytul" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->tytul;?>
"/>
      </fieldset>
		  <button type="submit" name="submit" class="btn btn-primary mb-2 ml-2">Wyszukaj</button>
	  </div>
  </form>
</div>
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_700360461642b11067df7d6_45626581 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="table" class="container">
  <?php $_smarty_tpl->_subTemplateRender("file:AdListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
</div>
<?php
}
}
/* {/block 'bottom'} */
}
