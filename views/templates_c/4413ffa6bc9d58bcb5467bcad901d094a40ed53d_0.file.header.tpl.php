<?php
/* Smarty version 3.1.33, created on 2020-01-16 21:02:04
  from 'C:\xampp\htdocs\projetWeb\marcWepika\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e20c13c939933_83137851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4413ffa6bc9d58bcb5467bcad901d094a40ed53d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetWeb\\marcWepika\\views\\templates\\header.tpl',
      1 => 1579204922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e20c13c939933_83137851 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
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

    <?php if (isset($_smarty_tpl->tpl_vars['bootstrap']->value) && $_smarty_tpl->tpl_vars['bootstrap']->value) {?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php }?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="views/img/logo.jpg" alt="zen attitude" width="50 px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
        </div>
    </nav>

</head>



</div><?php }
}