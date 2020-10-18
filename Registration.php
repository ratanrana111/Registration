<html>
<head>
<title>Registration</title>
</head>
<body>
<form action="submitaction/final.php" method='post'>

<fieldset>
<legend>Registration</legend>

<table>
<tr><td> Name: <td>  <input type="text"></td></tr>
<tr><td> Email: <td> <input type="email"></td></tr>
<tr><td> User Name: <td> <input type="text"></td></tr>
<tr><td> Password: <td> <input type="password"></td></tr>
<tr><td> Confirm Password: <td> <input type="password"></td></tr>
</table><br>

<fieldset>
<legend>Gender</legend>
<input type="radio" name="gender">Male     
<input type="radio" name="gender">Female  
<input type="radio" name="gender">Other<br>
</fieldset><br>

<fieldset>
<legend>Date Of Birth</legend>
<input type="text" name="date"size="5"/>/
<input type="text" name="month"size="5"/>/
<input type="text" name="year"size="5"/>(dd/mm/yyyy)<br>
</fieldset><br>

<input type="submit" value="Submit"/>
<input type="reset" value="Reset"/>

</fieldset>
</form>
</body>
</html>
