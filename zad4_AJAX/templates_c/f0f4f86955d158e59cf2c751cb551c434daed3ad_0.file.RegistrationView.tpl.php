<?php
/* Smarty version 3.1.30, created on 2023-01-06 16:03:07
  from "C:\xampp\htdocs\AS_projekt\app\views\RegistrationView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63b8382bb38283_37507702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0f4f86955d158e59cf2c751cb551c434daed3ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\RegistrationView.tpl',
      1 => 1673017359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63b8382bb38283_37507702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196431533463b8382bb37e22_49642621', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_196431533463b8382bb37e22_49642621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registration" method="post"  class="pure-form pure-form-aligned bottom-margin">
		<fieldset>
		<div class="form-row mt-4">
    		<div class="col-lg-4 offset-lg-4 rounded-top text-center pt-3 pr-3 pl-3 bg-light-50">
				<h3>Rejestracja</h3><br>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_imie">Imię: </label>
					<input id="id_imie" type="text" class="form-control" name="imie" placeholder="Podaj imię" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->imie;?>
" />
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_nazwisko">Nazwisko: </label>
					<input id="id_nazwisko" type="text" class="form-control" name="nazwisko" placeholder="Podaj nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwisko;?>
" />
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_email">Email: </label>
					<input id="id_email" type="email" class="form-control" name="email" placeholder="Podaj email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" />
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_miasto">Miasto: </label>
					<input id="id_miasto" type="text" class="form-control" name="miasto" placeholder="Podaj miasto" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->miasto;?>
" />
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_numer_tel">Numer telefonu: </label>
					<input id="id_numer_tel" type="number" class="form-control" name="numer_tel" placeholder="Podaj numer telefonu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->numer_tel;?>
" />
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
    			<div class="form-group">
					<label class="d-none" for="id_login">Login: </label>
					<input id="id_login" type="text" class="form-control" name="login" placeholder="Podaj login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />
				</div>
			</div>

    		<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
        		<div class="form-group">
					<label class="d-none" for="id_haslo">Hasło: </label>
					<input id="id_haslo" type="password" class="form-control" name="haslo" placeholder="Podaj hasło"/>
				</div>
			</div>

			<div class="col-lg-4 offset-lg-4 pr-3 pl-3 bg-light-50">
        		<div class="form-group">
					<label class="d-none" for="id_haslo2">Hasło: </label>
					<input id="id_haslo2" type="password" class="form-control" name="haslo2" placeholder="Powtórz hasło"/>
				</div>	
			</div>

			<div class="col-lg-4 offset-lg-4 rounded-bottom pb-3 pr-3 pl-3 bg-light-50">
				<input type="submit" value="Zarejestruj się" class="btn btn-primary btn-block mb-2"/>
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
