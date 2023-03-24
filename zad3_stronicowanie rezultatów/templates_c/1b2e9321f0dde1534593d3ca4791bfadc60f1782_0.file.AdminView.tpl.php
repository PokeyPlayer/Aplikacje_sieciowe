<?php
/* Smarty version 3.1.30, created on 2023-01-06 16:03:18
  from "C:\xampp\htdocs\AS_projekt\app\views\AdminView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63b838368b9d69_02464285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2e9321f0dde1534593d3ca4791bfadc60f1782' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\AdminView.tpl',
      1 => 1673015174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63b838368b9d69_02464285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65289805763b838368aa4e1_40672636', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64665946963b838368b9804_65807050', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_65289805763b838368aa4e1_40672636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="d-flex flex-column align-items-center bg-white-80 p-2">
	<form class="pure-form pure-form-aligned" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adminView" method="post">
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
class Block_64665946963b838368b9804_65807050 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <section class="row">
      <div class="table-responsive">
        <table class="table table-hover bg-white-80" >
          <thead>
	          <tr>
		          <th>ID</th>
		          <th>Imię</th>
		          <th>Nazwisko</th>
		          <th>Email</th>
		          <th>Login</th>
              	  <th>Edycja</th>
              	  <th>Usuwanie</th>
	          </tr>
          </thead>

          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uzytkownicy']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["IDuzytkownik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["imie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["nazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["login"];?>
</td><td><a class="btn btn-block btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userEdit&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['IDuzytkownik'];?>
" role="button">Edytuj</a></td><td><a class="btn btn-block btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['IDuzytkownik'];?>
" role="button">Usuń</a></td></tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </tbody>
        </table>
      </div>
  </section>
</div>
<?php
}
}
/* {/block 'bottom'} */
}
