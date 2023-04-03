<?php
/* Smarty version 3.1.30, created on 2023-01-08 10:55:42
  from "C:\xampp\htdocs\AS_projekt\app\views\AdView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63ba931e697f99_95648619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e9f6a7fdf6e8be5df03d289d07de09298c92b67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\AdView.tpl',
      1 => 1673171670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63ba931e697f99_95648619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14885413563ba931e697418_32542445', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_14885413563ba931e697418_32542445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wyniki']->value, 'w');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
?>
    <div class="row bg-white-80 p-2">
      <div class="col-lg-12">
        <h2><?php echo $_smarty_tpl->tpl_vars['w']->value["tytul"];?>
</h2>
        <h5>Kategoria: <?php echo $_smarty_tpl->tpl_vars['w']->value["nazwa"];?>
</h5>
      </div>
      <div class="col-lg-5 ">
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['w']->value["zdjecie"];?>
" class="product-img2" alt="Zdjęcie produktu">
      </div>
      <div class="col-lg-4">
        <span class="h4 m-2">Cena: <?php echo $_smarty_tpl->tpl_vars['w']->value["cena"];?>
 zł</span><br>
        <span class="m-2">Ocena: <?php echo $_smarty_tpl->tpl_vars['w']->value["srednia_ocen"];?>
/5</span>     
      </div>
      <div class="col-lg-3">
        <a class="btn btn-info btn-block m-2" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adList" role="button">Wróć do przeglądania</a>
        <a class="btn btn-primary btn-block m-2" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addComment&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDogloszenie'];?>
" role="button">Oceń ogłoszenie</a>
      </div>
      <h3>Opis</h3>
      <div style="background-color: #ADD8E6; font-size: 18px;" class="col-lg-12 rounded">
        <span class="p-4 d-block"><?php echo $_smarty_tpl->tpl_vars['w']->value["opis"];?>
</span>
      </div>
      <div class="col-lg-12">
        <hr>
      </div>
      <div class="col-lg-12">
        <h3>Opinie</h3>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wyniki2']->value, 'w2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['w2']->value) {
?> 
          <div class="border rounded p-3 bg-gray-10 my-2">
            <div>
              <span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['w2']->value["imie"];?>
 ocenił ogłoszenie <?php echo $_smarty_tpl->tpl_vars['w2']->value["ocena"];?>
/5</span>
            </div>
            <div>
              <?php echo $_smarty_tpl->tpl_vars['w2']->value["komentarz"];?>

            </div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php
}
}
/* {/block 'top'} */
}
