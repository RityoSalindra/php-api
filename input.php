<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuruddin Rityo Salindra</title>
  </head>
  <body>
    <form method="post" action="prosesInput.php">
      <table align="center">
        <tr>
    			<td colspan="2">
    				<h3><center>INPUT DATA SISWA</center></h3>
    			</td>
    		</tr>
        <tr>
          <td>ID</td>
          <td><input type="text" name="id"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td style="vertical-align: top">Level</td>
          <td>
            <input type="radio" name="level" value="admin">Admin<br>
            <input type="radio" name="level" value="user">User<br>
            <input type="radio" name="level" value="guest">Guest
          </td>
        </tr>
        <tr>
          <td>Fullname</td>
          <td><input type="text" name="fullname"></td>
        </tr>
        <tr>
          <td colspan="2">
            <center><button type="submit" value="submit">SUBMIT</button></center>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>