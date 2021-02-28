<html>
<head>
    <style>

        .my-font{
            font-family:consolas:
            font-size:
        }
         #header{
            height:20px;
            background-color:black;
            posititon:fixed;
            top:0;
            left:0;
            color:white;
            fornt-family:consolas;

           

        }

        .footer{
            height:20px;
            background-color:black;
            bottom:0;
            left:0;
            width:100%;
            posititon:fixed;
            color:white;
            text-align:center;
            font-family:consolas;
           

        }


        .btn-mine{
            background-color:red;
            font-family:consolas;
            color:white;
            border:none;
            width:

        }

        .btn-mine:hover{
            background-color:red;

        }

        .btn-mine:activate{
            background-color:red;

        }

       
        #logindiv{
            border:1px solid black;
            margin:auto;
            width:20%;
            border-radius:10px;
            margin-top:15%;
            padding-bottom:25px;
            font-family:consolas;
        }
    </style>
</head>
 <body>
 <div id="footer"></div>
 <div id="header"></div>
     <div id="logindiv">
      <h1>Login Form</h1>
     <table>
     <tr> 
        <td>Username:</td>
        <td><input type="text" name="uname"</td>
     </tr>

     <tr>

     <td>Password:</td>
     <td><input type="password" name="pass"</td>
     </tr>

     <tr> 
       
        <td colspan="2"><input type="submit" value="Login" name="login"</td>
     </tr>
     </table>
     </div>
 </body>