<?php
/* Smarty version 3.1.30, created on 2022-11-30 19:01:22
  from "C:\xampp\htdocs\AS_projekt\app\views\CalcEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63879a72aab718_74800289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e5ca9006341b05024c7c02659391933a6c3a492' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\CalcEdit.tpl',
      1 => 1669556922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63879a72aab718_74800289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89748496363879a72aab290_78459612', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_89748496363879a72aab290_78459612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane kredytu</legend>
		<div class="pure-control-group">
            <label for="kwota">Kwota: </label>
            <input id="kwota" type="text" placeholder="Kwota kredytu" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
        </div>
		<div class="pure-control-group">
            <label for="lata">Lata: </label>
            <input id="lata" type="text" placeholder="Okres kredytowania (lata)" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
">
        </div>
		<div class="pure-control-group">
            <label for="oprocentowanie">Oprocentowanie: </label>
            <input id="oprocentowanie" type="text" placeholder="Oprocentowanie kredytu" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>
<?php
}
}
/* {/block 'top'} */
}
