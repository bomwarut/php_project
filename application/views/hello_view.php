<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<h1>Hello World </h1>
    <hr>
    <h1>HTML Helper</h1>

    <?php echo br(5);?>
    f

    <p>Head Html</p>
    <?php echo heading("text",1);?>

    <h1>nbs function</h1>
    <?php echo "HEllo";
    echo nbs(10);
    echo "devbanban";?>

    <h1>ol function</h1>
    <?php
    $list = array('a','b','v','f');
    echo ol($list);
    echo '<hr>';
    echo ul($list);
    ?>
</body>
</html>
