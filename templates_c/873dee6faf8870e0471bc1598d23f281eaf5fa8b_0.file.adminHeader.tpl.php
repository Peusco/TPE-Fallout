<?php
/* Smarty version 3.1.39, created on 2021-09-26 20:25:57
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE\falloutTPE1\templates\adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6150bb35c0b571_14323799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '873dee6faf8870e0471bc1598d23f281eaf5fa8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE\\falloutTPE1\\templates\\adminHeader.tpl',
      1 => 1632679384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6150bb35c0b571_14323799 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <base href="''.BASE_URL.'">
    <title>FalloutDB</title>
</head>
<body class="adminBody">
    <header class="header admin-header">
        <nav class="nav re-container">
            <a href="home" class="nav-logo admin-logo">FALLOUT 4 DB</a>

            <div class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <li class="nav-item"><a href="allItems" class="nav-link nav-admin">All items</a></li>
                    <li class="nav-item"><a href="allCategories" class="nav-link nav-admin">All categories</a></li>
                    <li class="nav-item nav-login-item"><a href="login" class="nav-link nav-link-item nav-admin-btn">Log in</a></li>
                </ul>
            </div>

            <div class="nav-toggle" id="navToggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header><?php }
}
