<?php
/* Smarty version 3.1.30, created on 2023-01-06 16:51:21
  from "C:\xampp\htdocs\AS_projekt\app\views\EditAdvertisementView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63b843791ca719_21991613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ad8064c711dc4f2cec9b9a0e4f12dde7536d5cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS_projekt\\app\\views\\EditAdvertisementView.tpl',
      1 => 1673017834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63b843791ca719_21991613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24736434863b843791ca276_23213763', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_24736434863b843791ca276_23213763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
advertisementSave" method="post" enctype="multipart/form-data" class="pure-form pure-form-aligned bottom-margin">
    <div class="form-row">
      <div class="col-lg-4 offset-lg-4 rounded-top text-center pt-3 pr-3 pl-3 bg-light-50">
			  <h2>Edycja ogłoszenia</h2><br>
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
          <option  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kategoria;?>
"><?php echo $_smarty_tpl->tpl_vars['form']->value->kategoria_nazwa;?>
</option>
          <option  value="1">Motoryzacja</option>
          <option  value="2">Elektronika</option>
          <option  value="3">Ubrania</option>
          <option  value="4">Nieruchomości</option>
          <option  value="5">Meble</option>
          <option  value="6">Sport</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="opis">Opis ogłoszenia</label>
      <textarea name="opis" class="form-control" id="opis" placeholder="Podaj opis ogłoszenia" rows="10"><?php echo $_smarty_tpl->tpl_vars['form']->value->opis;?>
</textarea>
    </div>

    <div class="form-group col-md-4">
      <label for="cena">Cena</label>
      <input type="number" name="cena" class="form-control" id="cena" placeholder="Cena w zł" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena;?>
"/>
    </div>

    <div class="form-group row mb-0">
      <div class="col-lg-12">
        <input type="submit" value="Edytuj ogłoszenie" class="btn btn-primary"/>
        <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
myAdvertisements" role="button">Powrót</a>
      </div>
      <input type="hidden" name="IDogloszenie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->IDogloszenie;?>
">
    </div>
  </form>
</div>
<?php
}
}
/* {/block 'top'} */
}
