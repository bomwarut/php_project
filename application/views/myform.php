<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<h1>Form</h1>
<form action="<?php echo site_url('Form/showform');?>" method="post" accept-charset="utf-8">
    name:<input type = "text" name="name" required placeholder="name">
    <br>
    lname:<input type = "text" name="lastname" required placeholder="last name">
    <br>
    <button type="submit">Save</button>
</form>
</body>
</html>
