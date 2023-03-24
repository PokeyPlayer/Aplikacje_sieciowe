<?php
/* Smarty version 3.1.30, created on 2023-01-08 10:55:00
  from "C:\xampp\htdocs\AS_projekt\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63ba92f4a03690_59230264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f69961fa887dd7b100babf496522c1500dd5f001' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\templates\\main.tpl',
      1 => 1673171639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ba92f4a03690_59230264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Projekt serwis ogloszeniowy</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap.min.css">
</head>

<body style="margin: 20px;">
<div class="pure-menu pure-menu-horizontal bottom-margin">
<?php if ((count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0 && $_SESSION['IDuzytkownik'] != 1 && ($_smarty_tpl->tpl_vars['conf']->value->roles['user']))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adList" class="pure-menu-heading pure-menu-link">Lista ogloszeń</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addAdvertisementShow" class="pure-menu-heading pure-menu-link">Dodaj ogłoszenie</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
myAdvertisements" class="pure-menu-heading pure-menu-link">Moje ogłoszenia</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
<?php } elseif ((count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0 && $_SESSION['IDuzytkownik'] == 1 && ($_smarty_tpl->tpl_vars['conf']->value->roles['admin']))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminView" class="pure-menu-heading pure-menu-link">Panel administracyjny</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
<?php } else { ?>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adList" class="pure-menu-heading pure-menu-link">Lista ogloszeń</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Logowanie</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registrationShow" class="pure-menu-heading pure-menu-link">Rejestracja</a>
<?php }?>
</div>
<hr>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151635691363ba92f4a01635_11092628', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154741446163ba92f4a020d3_71429613', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99143426663ba92f4a02985_25586588', 'bottom');
?>

<br><br>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45605297063ba92f4a031f8_89483052', 'footer');
?>


</div>
</body>
</html><?php }
/* {block 'messages'} */
class Block_151635691363ba92f4a01635_11092628 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
	<div class="messages error">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<br>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
	<div class="messages info">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<br>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
<?php }
}
}
/* {/block 'messages'} */
/* {block 'top'} */
class Block_154741446163ba92f4a020d3_71429613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_99143426663ba92f4a02985_25586588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
/* {block 'footer'} */
class Block_45605297063ba92f4a031f8_89483052 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="footer text-center text-light">
	<p>© 2023 Projekt serwis ogłoszeniowy </p>
</div>
<?php
}
}
/* {/block 'footer'} */
}
