<html>
<head>
<title>Pemakaian Operator Aritmatika dalam PHP</title>
</head>

<body>
<form name="form1" method="post" action="OpAritmatika.php">
	<h2>Operator Aritmatika</h2>
	<table width="50%" border="1">
		<tr>
			<td width="30%">
			<div align="center">Operand Kiri</div>
		</td>
		<td width="20%">
			<div align="center">Operator</div>
		</td>
		<td width="30%">
			<div align="center">Operand Kanan</div>
		</td>
		<td>
			<div align="center">&nbsp;</div>
		</td>
	</tr>
	<td>
		<div align="center">
			<input type="text" name="operand1" size="10">
		</div>
	</td>
<td>
	<div align="center">
		<select name="operator">
			<option>+</option>
			<option>-</option>
			<option>%</option>
			<option>*</option>
			<option>/</option>
		</select>
	</div>
</td>
<td>
		<div align="center">
			<input type="text" name="operand2" size="10">
		</div>
	</td>
	<td>
		<div align="center">
			<input type="submit" name="submit" value="submit">
		</div>
	</td>
</table>
</form>
</body>
</html>