<?php
/* Smarty version 3.1.30, created on 2023-03-24 13:55:02
  from "C:\xampp\htdocs\AS_projekt\app\views\MyAdvertisementsView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_641d9da616ba21_66695315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '788225f6baec7d7bcb0c31eece74e5eb134b62d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\MyAdvertisementsView.tpl',
      1 => 1679427367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_641d9da616ba21_66695315 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1653678227641d9da6153d66_93127018', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1399012583641d9da616b294_74420955', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1653678227641d9da6153d66_93127018 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="d-flex flex-column align-items-center bg-white-80 p-2"><br>
    <h4>Moje ogłoszenia</h4>
  </div>
<hr>
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_1399012583641d9da616b294_74420955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <section class="row"> 
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wyniki']->value, 'w');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
?>   
    <article class="col-12 m-1 p-3 border-bottom bg-light-50 rounded product-size">
      <div class="row">
        <div class="col-lg-2 col-md-3">
          <img src="img/<?php echo $_smarty_tpl->tpl_vars['w']->value["zdjecie"];?>
" class="img-fluid d-block mx-auto  product-img" alt="Zdjęcie produktu">
        </div>
        <div class="col-lg-5 col-md-5">
          <a class="h4 m-2"><?php echo $_smarty_tpl->tpl_vars['w']->value["tytul"];?>
</a>
			    <ul class="m-0">
            <li><?php echo $_smarty_tpl->tpl_vars['w']->value["nazwa"];?>
</li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4">
          <span class="h4 m-2">Cena: <?php echo $_smarty_tpl->tpl_vars['w']->value["cena"];?>
 zł</span>
          <br>
          <span class="m-2">Ocena: <?php echo $_smarty_tpl->tpl_vars['w']->value["srednia_ocen"];?>
/5</span>
        </div>
        <div class="col-lg-2 col-md-4">
          <a class="btn btn-primary btn-block m-2" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
advertisementEdit&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDogloszenie'];?>
" role="button">Edytuj ogłoszenie</a>
          <a class="btn btn-danger btn-block m-2" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
advertisementDelete&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDogloszenie'];?>
" role="button">Usuń ogłoszenie</a>
        </div>
      </div>
    </article>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </section>
</div>
<?php
}
}
/* {/block 'bottom'} */
}
