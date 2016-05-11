<!DOCTYPE html>
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="test.css"></link>
	<script src="test.js"></script>
	</head>
	<body>
		<h1>Edit Account Info</h1>
		<form>
			<table>
				<tbody>
					<tr>
						<td>
							Account Type
						</td>
						<td>
							<select id="ATypeMenu">
								<option>Musician</option>
								<option>Artist</option>
								<option>Facilitator</option>
								<option>Fan</option>
							</select>
						</td>
						<td>
							<div class="helper" id="atype">
								?
							</div>
						</td>
						<td class="help" id="atypehelp">
							Musician: this applies to instrumentalists, singers, DJ's, producers, and the like.
							If you are an individual who does not consider themself a solo artist this is the type for you.
							With this you can use this service to connect with artists looking to add something extra to their act 
							or to meet other musicians and create your own group.
						</td>
					</tr>
					<tr>
						<td>
							Bio
						</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<textarea name="bio" rows="4" cols="16">Tell us about what you do
							</textarea><br />
						</td>
					</tr>
					<tr>
						<td>
							Level of Involvement
						</td>
						<td>
							<select>
								<option>--default--</option>
								<option>Enjoyment</option>
								<option>Exposure</option>
								<option>Payment</option>
							</select><br />
						</td>
						<td>
							<div class="helper" id="involve">
								?
							</div>
						</td>
						<td class="help" id="involvehelp">
							By default you will be asked about this each time you log in.<br/>
							If you are looking for people to jam with privately pick <strong>Enjoyment</strong>.<br/>
							If you are looking to pick up a few gigs but you don't mind doing it for free pick <strong>Exposure</strong>.<br/>
							If you are looking to be paid for your services, pick <strong>Payment</strong>.<br/>
						</td>
					</tr>
					<tr>
						<td>
							Text 3
						</td>
						<td>
							<input type="text" name="text3" /><br />
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