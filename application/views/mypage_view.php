<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
    <h1>Mypage</h1>
    <a href="<?php echo site_url('hello/index2');?>">Link to hello function index2</a>
    <br>
    <a href="<?php echo site_url('welcome');?>">Link to welcome</a>

    <br>

    <img src="<?php echo base_url('img');?>/transformer.jpg" alt="" width="300px">
</body>
</html>
