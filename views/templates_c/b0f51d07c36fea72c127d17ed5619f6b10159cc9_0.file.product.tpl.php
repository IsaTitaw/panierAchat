<?php
/* Smarty version 3.1.33, created on 2020-02-19 19:07:19
  from 'C:\xampp\htdocs\projetWeb\marcWepika\views\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4d7957e6d8e0_14365374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f51d07c36fea72c127d17ed5619f6b10159cc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetWeb\\marcWepika\\views\\templates\\product.tpl',
      1 => 1582135635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4d7957e6d8e0_14365374 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col">
            <br>
            <h2 class="bd-title text-center"><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/images/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
" class="img-thumbnail">
        </div>
        <div class="col">
            <h6 class="bd-lead"><?php echo $_smarty_tpl->tpl_vars['product']->value->getShortDescription();?>
</h6>
            <br>
            <p><?php echo $_smarty_tpl->tpl_vars['product']->value->getLongDescription();?>
</p>
            <br>
            <div class="col">
                <h6>Quantité restante : <?php echo $_smarty_tpl->tpl_vars['product']->value->getStock();?>
</h6>
                <h4 class="text-right">Prix : <?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
€</h4>
            </div>
            <button type="button" class="btn btn-success">Add to cart</button>

        </div>

    </div>
</div>
<?php }
}
