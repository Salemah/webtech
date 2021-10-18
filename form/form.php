<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
   
    <form action="second.php" method="post">
    <table>
    <tr>
    <td>ID</td>
    <td> :</td>
    <td><input type="text" id="id" name="id"></td>
    </tr>
    <tr>
    <td>Name</td>
    <td>:</td>
    <td><input type="text" id="sname" name="sname"></td>
    </tr>
    <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" id="password" name="password"></td>
    </tr>
    <tr>
    <td>Gender</td>
    <td>:</td>
    <td>
    <input type="radio" name="gender" value="Male"> &nbsp; Male
    <input type="radio" name="gender" value="Female"> &nbsp; Female
    <input type="radio" name="gender" value="Others"> &nbsp; Others
    </td>
    </tr>
    <tr>
    <td>Skills</td>
    <td>:</td>
    <td>
    <input type="checkbox" name="skills" value="c#"> &nbsp; C#
    <input type="checkbox" name="skills" value="c"> &nbsp; C
    <input type="checkbox" name="skills" value="Java"> &nbsp; Java
    <input type="checkbox" name="skills" value="python"> &nbsp; Python
    </td>
    </tr>
    <tr>
    <td>Department</td>
    <td>:</td>
    <td>
    <select name="department">
    <option value="1">CSE</option>
    <option value="2">EEE</option>
    <option value="3">BBA</option>
    </select>
    </td>
    </tr>
    <tr>
    <td>Address</td>
    <td>:</td>
    <td>
    <textarea rows="3" cols="20" name="address"></textarea>
    </td>
    </tr>
    <tr>
    <td><input type="submit" value="Click" name="btnClick"></td>
    </tr>
    </table>
    </form>
    
</body>
</html>