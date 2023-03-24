<?php
/* Smarty version 3.1.30, created on 2023-03-24 17:58:54
  from "C:\xampp\htdocs\AS_projekt\app\views\AdList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_641dd6cec31265_28747715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c40c32d6d040fc35db8527ad826fe694c06f0039' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\AdList.tpl',
      1 => 1679677032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_641dd6cec31265_28747715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1855586791641dd6cec236a6_57543234', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_550012260641dd6cec30dd9_67928342', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1855586791641dd6cec236a6_57543234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="d-flex flex-column align-items-center bg-white-80 p-2">
  <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adList" method="post">
	  <div class="form-group mb-2">
		  <legend>Lista ogłoszeń</legend>
		  <fieldset>
			  <input type="text" placeholder="Wpisz słowo kluczowe" name="sf_tytul" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->tytul;?>
" />
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
class Block_550012260641dd6cec30dd9_67928342 extends Smarty_Internal_Block
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
      <article class="col-12 m-1 p-3 border-bottom bg-light-50 product-size">
        <div class="row">
          <div class="col-lg-2 col-md-3">
            <a class="d-block img-mh-130" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adView&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDogloszenie'];?>
"><img src="img/<?php echo $_smarty_tpl->tpl_vars['w']->value["zdjecie"];?>
" class="img-fluid d-block mx-auto img-size product-img" alt="Zdjęcie produktu"></a>
          </div>
          <div class="col-lg-7 col-md-5">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adView&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDogloszenie'];?>
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
/5</span>
          </div>
        </div>
      </article>
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </section>
  <br>
  <div class="btn-toolbar mb-2" role="toolbar" style="justify-content: center; display: flex;" aria-label="Toolbar with button groups">
  <?php if ($_smarty_tpl->tpl_vars['strony']->value > 1) {?>
     <?php echo $_smarty_tpl->tpl_vars['s']->value;?>

  <?php }?>
  </div>
</div>
<?php
}
}
/* {/block 'bottom'} */
}
