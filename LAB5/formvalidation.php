<html>
<head>
    <title>Club Registration Form</title>
</head>

<body>
    

    <fieldset >
        <legend align=""><h1>Club Member Registration Form</h1></legend>
        <form action="" method="post"></form>
        <table >
        <tr>
                    <td align="right"><Span>Name</Span></td>
                    <td>: <input type="text" placeholder="Name" value="" name="name"> 
                    
                </tr>
                <tr>
                    <td  align="right"><span>Username</span></td>
                    <td>: <input type="text" placeholder="Username" value="" name="uname"> 
                   
                </tr>

                <tr>
                    <td align="right"><span>Password</span></td>
                    <td>: <input type="password" placeholder="Password" value="" name="pass"> 
                   
                </tr>

                <tr>
                    <td align="right"><Span>Confirm Password</span></td>
                    <td>: <input type="password" placeholder="Confirm Password" value="" name="cpass">
                   
                </tr>

                <tr>
                <td align="right"><Span>Email</span></td>
                    <td>: <input type="text" placeholder="Email" value="" name="email"> 
                   
                </tr>

                <tr>
                <td align="right"><Span>Phone Number</span></td>
                    <td>: <input type="text" placeholder="Phone Number" value="" name="phonenumber">
                   
                </tr>
                
                <tr>
                    <td align="right" rowspan="4"><span>Address</span></td>
                    <td>: <input type="text" placeholder="Street Address" value="" name="street"> 
                   
                </tr>

                <tr>
                    <td>: <input type="text" placeholder="City" value="" name="city">
                    
                    
                    
                </tr>
                <tr>
                    <td>: <input type="text" placeholder="State" value="" name="state">
                    
                
                </tr>

                <tr>
                    <td>: <input type="text" placeholder="Postal/zip code" value="" name="zip"> 
                   
                </tr>

                <tr>
                <td align="right">Birth Date</td>
						<td>:
							<select name="day" value="">
								<option>Day</option>
								
							
							</select>
							<select name="month" value ="">
								<option>Month</option>
								
								
							</select>
                            <select name="year" value ="">
								<option>Year</option>
								
								
							</select>
                           
						</td>
                </tr>
                
                <tr>
						<td align="right"><Span>Gender</span></td>
						<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
                       
				</tr>

                <tr>
                    <td align="right" rowspan="4"><span>Where did you hear about us?</span></td>
                    <td><input type="checkbox" value="A friend or colleague" name="aboutus[]">A friend or colleague 
                   
                </tr>

                <tr>
                <td><input type="checkbox" value="Google" name="aboutus[]">Google</td>
                    
                    
                    
                </tr>
                <tr>
                <td><input type="checkbox" value="Blog Post" name="aboutus[]">Blog Post</td>
                    
                
                </tr>

                <tr>
                    <td><input type="checkbox" value="News Article" name="aboutus[]">News Article</td> 
                   
                </tr>
						<td align="right"><Span>Bio </span></td>
						<td>:<textarea name="bio"></textarea>
                       
                        </td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="Register"></td>
				</tr>
        </table>
    </fieldset>
</body>
</html>