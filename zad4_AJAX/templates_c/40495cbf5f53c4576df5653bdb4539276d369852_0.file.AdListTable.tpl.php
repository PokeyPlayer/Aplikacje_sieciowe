<?php
/* Smarty version 3.1.30, created on 2023-04-03 19:46:46
  from "C:\xampp\htdocs\AS_projekt\app\views\AdListTable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_642b1106807480_67795129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40495cbf5f53c4576df5653bdb4539276d369852' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\AdListTable.tpl',
      1 => 1680543964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642b1106807480_67795129 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section  class="row"> 
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
</div><?php }
}
