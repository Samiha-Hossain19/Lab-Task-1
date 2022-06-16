<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		#form{
            margin: auto;
            width: 300px;
            margin-top: 200px;
            border-style: ridge;
            padding: 20px 35px 20px 30px;
        }
        .text-box{
            width: 100%;
            height: 25px;
            margin-bottom: 5px;
            border-style: solid;
            border-width: 1px;
        }
        .label{
            font-weight: bold;
        }
        #submit{
            width: 100%;
            height: 30px;
            margin-bottom: 10px;
            margin-top: 5px;
            font-family: Georgia;
        }
	</style>
</head>
<body>

	<form action="loginCheck.php" method="post">
    <fieldset>
				<legend>Log In</legend>
				<table>
					<tr>
						<td>username</td>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>