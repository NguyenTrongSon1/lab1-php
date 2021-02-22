<html>
<head>
    <title>Employy Detaols</title>
</head>
<body>
<h4>Enter your details|</h4>
<from method=post action="EMP_DETAILS.php">
<table>
    <tr>
        <td>Employee ID</td>
        <td><input type="text" name="empid"</td>
    </tr>
    <tr>
        <td>Department</td>
        <td>
            <input type="=radio" name="dept" value="finance">Finance
            <input type="radio" name="dept" value="marketing">Marketing
            <input type="=radio" name="dept" value="IT">IT
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email"></td>
    </tr>
</table>
    <br>
    <td><input type="submit" value="submit"></td>
</from>
</body>
</html>