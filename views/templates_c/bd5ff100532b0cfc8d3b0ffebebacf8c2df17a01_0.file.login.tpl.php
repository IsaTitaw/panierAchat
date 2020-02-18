<?php
/* Smarty version 3.1.33, created on 2020-02-16 16:55:57
  from 'C:\xampp\htdocs\projetWeb\marcWepika\views\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e49660d4a8bd3_06014807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd5ff100532b0cfc8d3b0ffebebacf8c2df17a01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetWeb\\marcWepika\\views\\templates\\login.tpl',
      1 => 1581868556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e49660d4a8bd3_06014807 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp">
    </div>
       <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php }
}
