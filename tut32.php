<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

class person
{
	public $name = "";
	public $age = 0;
	
	public function sayhello()
	{
		echo "hello my name is $this->name and I am $this->age years old. <br>";
	}
}

$e1 = new person;
$e1->name = "Bryan";
$e1->age = 38;
$e1->sayhello();


$e2 = new person;
$e2->name = "Heather";
$e2->age = 20;
$e2->sayhello();

?>

</body>
</html>
