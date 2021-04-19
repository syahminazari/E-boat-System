<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  mysql_connect('localhost','root','');
  mysql_select_db('perlesenan');
  $select=mysql_query("update users set password='$password' where email='$email'");
}
?>
