<?php
/* Smarty version 3.1.30, created on 2023-01-06 16:03:00
  from "C:\xampp\htdocs\AS_projekt\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63b83824ef6607_06151844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5d50b357f9fff02119fb5346d3d2d727fea2583' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\LoginView.tpl',
      1 => 1673016531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63b83824ef6607_06151844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127099340363b83824ef61b1_97472774', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_127099340363b83824ef61b1_97472774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
		<fieldset>
		<div class="form-row mt-4">
    		<div class="col-lg-4 offset-lg-4 rounded-top text-center pt-3 pr-3 pl-3 bg-light-50">
				<h3>Logowanie do systemu</h3><br>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label for="id_login">Login: </label>
					<input id="id_login" type="text" class="form-control" name="login" placeholder="Podaj login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />
				</div>
			</div>

    		<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
        		<div class="form-group">
					<label for="id_haslo">Hasło: </label>
					<input id="id_haslo" type="password" class="form-control" name="haslo" placeholder="Podaj hasło"/><br/>
				</div><br>
			</div>

			<div class="col-lg-4 offset-lg-4 rounded-bottom pb-3 pr-3 pl-3 bg-light-50">
				<input type="submit" value="Zaloguj się" class="btn btn-primary btn-block mb-2"/>
				<span class="d-block">
        			Brak konta?
        			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registrationShow">Zarejestruj się!</a>
        		</span>
			</div>
		</div>
		</fieldset>
	</form>
</div>
<?php
}
}
/* {/block 'top'} */
}
