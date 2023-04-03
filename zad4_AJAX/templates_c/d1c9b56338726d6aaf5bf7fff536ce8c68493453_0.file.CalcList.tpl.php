<?php
/* Smarty version 3.1.30, created on 2022-12-09 12:34:03
  from "C:\xampp\htdocs\AS_projekt\app\views\CalcList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63931d2bcd1349_93679367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1c9b56338726d6aaf5bf7fff536ce8c68493453' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\CalcList.tpl',
      1 => 1670585638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63931d2bcd1349_93679367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149232559463931d2bcc6a14_85414252', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192649036063931d2bcd0ee1_57106254', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_149232559463931d2bcc6a14_85414252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="d-flex flex-column align-items-center bg-white-80 p-2">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcList">
	<div class="form-group mb-2">
		<legend>Lista ogłoszeń</legend>
		<fieldset>
			<input type="text" placeholder="Wyszukaj" name="sf_tytul" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->tytul;?>
" />
	</div>
		<button type="submit" class="pure-button pure-button-primary">Wyszukaj</button>
	</fieldset>
</form>
</div>	

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_192649036063931d2bcd0ee1_57106254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<main class="container">
    <section class="row"> 
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wyniki']->value, 'w');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
?>   
      <article class="col-12 m-2 p-3 border-bottom bg-light-50 rounded product-size">
        <div class="row">
          <div class="col-lg-2 col-md-3">
            <a class="d-block img-mh-130" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcEdit&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDogloszenie'];?>
"><img src="img/<?php echo $_smarty_tpl->tpl_vars['w']->value["zdjecie"];?>
" class="img-fluid d-block mx-auto img-size product-img" alt="Zdjęcie produktu"></a>
          </div>
          <div class="col-lg-7 col-md-5">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcEdit&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDogloszenie'];?>
" class="h4 m-2"><?php echo $_smarty_tpl->tpl_vars['w']->value["tytul"];?>
</a>
			        <ul class="m-0">
                <li><?php echo $_smarty_tpl->tpl_vars['w']->value["nazwa"];?>
</li>
              </ul>
          </div>
          <div class="col-lg-3 col-md-4">
            <span class="h3 m-2">Cena: <?php echo $_smarty_tpl->tpl_vars['w']->value["cena"];?>
 zł</span>
            <br>
            <span class="m-2">Ocena: <?php echo $_smarty_tpl->tpl_vars['w']->value["srednia_ocen"];?>
 /10</span>
          </div>
        </div>
      </article>
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </section>
  </main>
<?php
}
}
/* {/block 'bottom'} */
}
