<?php
/* Smarty version 3.1.33, created on 2020-02-18 10:08:13
  from 'C:\xampp\htdocs\projetWeb\marcWepika\views\templates\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4ba97dec6968_37382727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '379011e535f226c4abc2b74ddf5502473721c8a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetWeb\\marcWepika\\views\\templates\\category.tpl',
      1 => 1582015133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4ba97dec6968_37382727 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row product_list ">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <div class="col-md-3 product_card ">
            <div class="card">
                <a href="product/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" rel="Vous avez choisi par catégorie...">
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
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
