<?php
/* Smarty version 3.1.30, created on 2023-01-12 19:20:15
  from "C:\xampp\htdocs\AS_projekt\app\views\UserEditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63c04f5f4afa44_89442763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2525aa47e4227adb7ef41c2b22600dd7254734d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\UserEditView.tpl',
      1 => 1673547269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63c04f5f4afa44_89442763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89631064163c04f5f4af587_78956821', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_89631064163c04f5f4af587_78956821 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userSave" method="post"  class="pure-form pure-form-aligned bottom-margin">
    <fieldset>
      <div class="col-lg-5 offset-lg-3 rounded-top text-center pt-3 pr-3 pl-3 bg-light-50">
			  <h2>Edycja profilu użytkownika</h2><br>
		  </div>
		  <div class="form-group row">
        <label for="imie" class="col-lg-2 col-form-label">Imię</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="imie" name="imie" placeholder="Podaj imię" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->imie;?>
">
        </div>
      </div>

      <div class="form-group row">
        <label for="nazwisko" class="col-lg-2 col-form-label">Nazwisko</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Podaj nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwisko;?>
">
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-lg-2 col-form-label">E-mail</label>
        <div class="col-lg-8">
          <input type="email" class="form-control" id="email" name="email" placeholder="Podaj email"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
">
        </div>
      </div>

		  <div class="form-group row">
        <label for="miasto" class="col-lg-2 col-form-label">Miasto</label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="miasto" name="miasto" placeholder="Podaj miasto" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->miasto;?>
">
        </div>
      </div>

      <div class="form-group row">
        <label for="numer_tel" class="col-lg-2 col-form-label">Numer telefonu</label>
        <div class="col-lg-8">
          <input type="number" class="form-control" id="numer_tel" name="numer_tel" placeholder="Podaj numer telefonu"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->numer_tel;?>
">
        </div>
      </div>

      <div class="form-group row mb-0">
        <div class="col-lg-12">
          <input type="submit" class="btn btn-primary" value="Edytuj profil">
          <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminView" role="button">Powrót</a>
        </div>
      </div>
		  <input type="hidden" name="IDuzytkownik" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->IDuzytkownik;?>
">
    </fieldset>
	</form>		
</div>
<?php
}
}
/* {/block 'top'} */
}
