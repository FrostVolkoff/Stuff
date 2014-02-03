<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
{
	//Ligar a db, localhost(meu servidor) root(local) e a password
	$connect = mysql_connect("localhost","root","") or die("Couldn Connect!");
	//nome da db
	mysql_select_db("Stuff") or die('Couldn find db!');
	
	//Verifica se o username está na db
	$query = mysql_query("SELECT * FROM users WHERE username='$username'");
	
	$numrows = mysql_num_rows($query);
	
	if ($numrows!=0)
	{
		while ($row = mysql_fetch_assoc($query))
		{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}
		
		if ($username==$dbusername&&$password==$dbpassword)
		{
			echo("Welcome $username");
			$_SESSION['username']=$username;
		}
		else
		{
			die("Wrong Password!");
		}
	}
	else
		die("That user doesnt exist!");
}
else
{
	die("Please enter a username and a password!");
}
?>