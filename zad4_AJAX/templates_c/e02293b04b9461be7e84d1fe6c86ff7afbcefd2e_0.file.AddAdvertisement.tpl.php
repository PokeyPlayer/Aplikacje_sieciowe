<?php
/* Smarty version 3.1.30, created on 2023-01-06 16:51:04
  from "C:\xampp\htdocs\AS_projekt\app\views\AddAdvertisement.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63b84368d46f46_05003148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e02293b04b9461be7e84d1fe6c86ff7afbcefd2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\AddAdvertisement.tpl',
      1 => 1673018549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63b84368d46f46_05003148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149950581863b84368d46ae7_13898180', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_149950581863b84368d46ae7_13898180 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addAdvertisement" method="post" enctype="multipart/form-data" class="pure-form pure-form-aligned bottom-margin">
    <div class="form-row">
      <div class="col-lg-4 offset-lg-4 rounded-top text-center pt-3 pr-3 pl-3 bg-light-50">
			  <h2>Dodawanie ogłoszenia</h2><br>
		  </div>
      <div class="form-group col-md-8">
        <label for="tytul">Tytuł ogłoszenia</label>
        <input type="text" name="tytul" class="form-control" id="tytul" placeholder="Podaj tytuł ogłoszenia" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->tytul;?>
"/>
      </div>

      <div class="form-group col-md-4">
        <label for="kategoria">Kategoria ogłoszenia</label>
        <select class="form-control" name="kategoria" id="kategoria" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kategoria;?>
">
          <option value="0">--wybierz--</option>
          <option value="1">Motoryzacja</option>
          <option value="2">Elektronika</option>
          <option value="3">Ubrania</option>
          <option value="4">Nieruchomości</option>
          <option value="5">Meble</option>
          <option value="6">Sport</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="opis">Opis ogłoszenia</label>
      <textarea name="opis" class="form-control" id="opis" placeholder="Podaj opis ogłoszenia" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->opis;?>
" rows="10"></textarea>
    </div>

    <div class="form-group col-md-4">
      <label for="cena">Cena</label>
      <input type="number" name="cena" class="form-control" id="cena" placeholder="Cena w zł" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena;?>
"/>
    </div>

    <div class="form-group">
      <label for="zdjecie">Dodaj zdjęcie do ogłoszenia</label>
      <input type="file" name="zdjecie" class="form-control-file" id="zdjecie" />
    </div>
      
    <input type="submit" value="Dodaj ogłoszenie" class="btn btn-primary btn-block"/>
    <a class="btn btn-info btn-block" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adList" role="button">Powrót</a>
    <input type="hidden" name="id_uzyt" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_uzyt;?>
">
    
  </form>
</div>
<?php
}
}
/* {/block 'top'} */
}
