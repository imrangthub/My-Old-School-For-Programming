<?php
	if ($_POST['FirstName'] == '')
	{
		$FirstName = '<span style="color:red;">First name omitted.</span>';
	}
	else
	{
		$FirstName = $_POST['FirstName'];
	}
	
	if ($_POST['LastName'] == '')
	{
		$LastName = '<span style="color:red;">Last name omitted.</span>';
	}
	else
	{
		$LastName = $_POST['LastName'];
	}

	if ($_POST['Title'] == '')
	{
		$Title = '<span style="color:red;">Title omitted.</span>';;
	}
	else
	{
		$Title = $_POST['Title'];
	}

	if ( array_key_exists('TitleOfCourtesy',$_POST) )
	{
		$TitleOfCourtesy = $_POST['TitleOfCourtesy'];
	}
	else
	{
		$TitleOfCourtesy = '<span style="color:red;">
			Title of Courtesy not selected.</span>';
	}

	if ($_POST['Address'] == '')
	{
		$Address = '<span style="color:red;">Address omitted.</span>';
	}
	else
	{
		$Address = $_POST['Address'];
	}

	if ($_POST['City'] == '')
	{
		$City = '<span style="color:red;">City omitted.</span>';
	}
	else
	{
		$City = $_POST['City'];
	}

	if ($_POST['Region'] == '')
	{
		$Region = '<span style="color:red;">Region omitted.</span>';
	}
	else
	{
		$Region = $_POST['Region'];
	}

	if ($_POST['PostalCode'] == '')
	{
		$PostalCode = '<span style="color:red;">Postal code omitted.</span>';
	}
	else
	{
		$PostalCode = $_POST['PostalCode'];
	}

	if ($_POST['Country'] == '')
	{
		$Country = '<span style="color:red;">Country omitted.</span>';
	}
	else
	{
		$Country = $_POST['Country'];
	}

	if ($_POST['HomePhone'] == '')
	{
		$HomePhone = '<span style="color:red;">Home phone omitted.</span>';
	}
	else
	{
		$HomePhone = $_POST['HomePhone'];
	}

	if ($_POST['Extension'] == '')
	{
		$Extension = '<span style="color:red;">Extension omitted.</span>';
	}
	else
	{
		$Extension = $_POST['Extension'];
	}

	if ($_POST['Notes'] == '')
	{
		$Notes = 'none';
	}
	else
	{
		$Notes = $_POST['Notes'];
	}

	if ($_POST['ReportsTo'] == 0)
	{
		$ReportsTo = '<span style="color:red;">Manager not selected.</span>';
	}
	else
	{
		$ReportsTo = $_POST['ReportsTo'];
	}

	if ($_POST['Password1'] == $_POST['Password2'])
	{
		$Password = $_POST['Password1'];
	}
	else
	{
		$Password = '<span style="color:red;">Passwords do not match.</span>';
	}
?>
<html>
<head><title>Process Employee</title></head>
<body>
	<h1>Process Employee</h1>
	<ul>
	<?php
		echo "<li><b>Name:</b> $TitleOfCourtesy $FirstName $LastName</li>";
		echo "<li><b>Title:</b> $Title</li>";
		echo "<li><b>Address:</b> $Address</li>";
		echo "<li><b>City, Region Zip:</b> $City, $Region $PostalCode</li>";
		echo "<li><b>Country:</b> $Country</li>";
		echo "<li><b>Home phone:</b> $HomePhone</li>";
		echo "<li><b>Extension:</b> $Extension</li>";
		echo "<li><b>Notes:</b> $Notes</li>";
		echo "<li><b>Manager:</b> $ReportsTo</li>";
		echo "<li><b>Password:</b> $Password</li>";
	?>
	</ul>
</body>
</html>
