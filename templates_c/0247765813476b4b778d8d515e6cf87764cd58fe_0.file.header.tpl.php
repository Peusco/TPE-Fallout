<?php
/* Smarty version 3.1.39, created on 2021-09-26 20:04:00
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE\falloutTPE1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6150b61069ff09_95620900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0247765813476b4b778d8d515e6cf87764cd58fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE\\falloutTPE1\\templates\\header.tpl',
      1 => 1632679384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6150b61069ff09_95620900 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <base href="<?php echo BASE_URL;?>
">
    <title>FalloutDB</title>
</head>
<body>
    <header class="header">
        <nav class="nav re-container">
            <a href="home" class="nav-logo">FALLOUT 4 DB</a>

            <div class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <li class="nav-item"><a href="allItems" class="nav-link">All items</a></li>
                    <li class="nav-item"><a href="allCategories" class="nav-link">All categories</a></li>
                    <li class="nav-item nav-login-item"><a href="login" class="nav-link nav-link-item">Log in</a></li>
                </ul>
            </div>

            <div class="nav-toggle" id="navToggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header><?php }
}
