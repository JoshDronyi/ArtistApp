<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h1>Register a New Account</h1>
		<!-- needs an action, could be register.php-->
		<form>
			<table>
				<tbody>					
					<tr>
						<td>
							First Name
						</td>
						<td>
							<input type="text" name="first" required/><br />
						</td>
					</tr>
					<tr>
						<td>
							Last Name
						</td>
						<td>
							<input type="text" name="last" required/><br />
						</td>
					</tr>
					<tr>
						<!-- account name not required, if not entered one will be created based on the user's name -->
						<td>
							Account Name
						</td>
						<td>
							<input type="text" name="aname" /><br />
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							<input type="email" name="Email" placeholder="Email" required/><br />
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="password" name="password1" placeholder="Password" required/><br />
						</td>
					</tr>
					<tr>
						<td>
							Repeat Password
						</td>
						<td>
							<input type="password" name="password2" placeholder="Repeat Password" required/><br />
						</td>
					</tr>
				</tbody>
			</table>
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>