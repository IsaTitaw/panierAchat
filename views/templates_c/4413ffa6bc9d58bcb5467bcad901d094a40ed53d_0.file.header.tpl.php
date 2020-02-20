<?php
/* Smarty version 3.1.33, created on 2020-02-20 12:56:07
  from 'C:\xampp\htdocs\projetWeb\marcWepika\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e73d7192009_68002315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4413ffa6bc9d58bcb5467bcad901d094a40ed53d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetWeb\\marcWepika\\views\\templates\\header.tpl',
      1 => 1582199766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e73d7192009_68002315 (Smarty_Internal_Template $_smarty_tpl) {
?><head>

    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php if (isset($_smarty_tpl->tpl_vars['assets']->value) && is_array($_smarty_tpl->tpl_vars['assets']->value)) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['assets']->value['css'])) {?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assets']->value['css'], 'css');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
?>

                <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" media="screen">

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    <?php }?>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/views/img/logo.jpg" alt="zen attitude" width="50 px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/projetWeb/marcWepika/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blabla</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>

            <form class="form-inline" action="/projetWeb/marcWepika/search" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Nom du produit" aria-label="Search" name="productName">
                <button type="button" class="btn btn-success">Search</button>
            </form>



            <div class="btn-group ml-3">
                <button type="button" class="btn btn-success">Catégories</button>
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="/projetWeb/marcWepika/category/animaux">Animaux</a></li>
                    <li><a href="/projetWeb/marcWepika/category/travail">Travail</a></li>
                    <li><a href="/projetWeb/marcWepika/category/maison">Maison</a></li>
                </ul>
            </div>


            <?php if (isset($_smarty_tpl->tpl_vars['userEmail']->value)) {?>
                <span class="ml-5">Bonjour <?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>
</span> <a href="/projetWeb/marcWepika/logout" class="btn btn-danger ml-3">Logout</a>
            <?php } else { ?>
                <a href="/projetWeb/marcWepika/login" class="btn btn-success ml-5">Login</a>
            <?php }?>


                        


        </div>
    </nav>



</head>




</div><?php }
}
