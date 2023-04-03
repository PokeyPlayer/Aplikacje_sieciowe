<?php
/* Smarty version 3.1.30, created on 2023-04-03 19:46:33
  from "C:\xampp\htdocs\AS_projekt\app\views\AdminViewTable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_642b10f9b42587_49180377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89eaea165776a08cbaeb3d1bd1a65a695048cefe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\AdminViewTable.tpl',
      1 => 1680543950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642b10f9b42587_49180377 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
</table><?php }
}
