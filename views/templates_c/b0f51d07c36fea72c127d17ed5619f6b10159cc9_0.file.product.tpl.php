<?php
/* Smarty version 3.1.33, created on 2020-02-16 15:08:04
  from 'C:\xampp\htdocs\projetWeb\marcWepika\views\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e494cc42bf596_93554196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f51d07c36fea72c127d17ed5619f6b10159cc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetWeb\\marcWepika\\views\\templates\\product.tpl',
      1 => 1581862082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e494cc42bf596_93554196 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-3 product_card ">
<div class="card">
    <a href="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" rel="Vous avez choisi">
        <img src="images/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
.jpg" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
">
    </a>
    <div class="card-body">
        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h5>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->getShortDescription();?>
</p>
        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-primary add-to-cart mx-auto"><i class="fa fa-cart"></i> Add to cart</a>
            </div>
            <div class="col-sm-6 price">
                <?php echo number_format($_smarty_tpl->tpl_vars['product']->value->getPrice(),2);?>
€
            </div>
        </div>
    </div>
</div>
</div>
<?php }
}
