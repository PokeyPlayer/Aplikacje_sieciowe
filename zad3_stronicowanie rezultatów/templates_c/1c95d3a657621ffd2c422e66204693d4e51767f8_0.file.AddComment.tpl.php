<?php
/* Smarty version 3.1.30, created on 2023-01-08 09:40:43
  from "C:\xampp\htdocs\AS_projekt\app\views\AddComment.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63ba818b7f3974_42666245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c95d3a657621ffd2c422e66204693d4e51767f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\AddComment.tpl',
      1 => 1673020499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63ba818b7f3974_42666245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105800696563ba818b7f34e1_17620972', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_105800696563ba818b7f34e1_17620972 extends Smarty_Internal_Block
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
      <div class="col-lg-7">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
adView&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['IDogloszenie'];?>
" class="btn btn-info btn-block">Wróć do ogłoszenia</a>
        <form class="pure-form pure-form-aligned" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addSave" method="post">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
          <div class="form-group">
            <label for="ocena">Ocena:</label>
            <select class="form-control" id="ocena" name="ocena">
              <option value="1">1 - niedostatecznie</option>
              <option value="2">2 - dopuszczająco</option>
              <option value="3">3 - dostatecznie</option>
              <option value="4">4 - dobrze</option>
              <option value="5">5 - bardzo dobrze</option>
            </select>
          </div>
          <div class="form-group">
            <label for="komentarz">Komentarz</label>
            <textarea class="form-control" id="komentarz" name="komentarz" aria-describedby="komentarzPomoc" rows="4"></textarea>
            <small id="komentarzPomoc" class="form-text text-muted">Komentarz nie jest obowiązkowy, możesz dodać samą ocenę. Pamiętaj jednak, że nie możesz dodać komentarza bez oceny</small>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Dodaj opinię</button><br>
        </form>
      </div>
      <h3>Opis</h3>
      <div style="background-color: #ADD8E6; font-size: 18px;" class="col-lg-12 rounded">
        <span class="p-4 d-block"><?php echo $_smarty_tpl->tpl_vars['w']->value["opis"];?>
</span>
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->IDuzytkownik;?>
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
