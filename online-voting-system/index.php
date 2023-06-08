<html>
    <head>
        <title>voting system - Home</title>
        <link rel="stylesheet" href="stylesheet.css">
        <style>
            #headerSection {
                background-color: #FFFFFF;
                
            }
            #loginSection {
                background-color: 	#FFFFFF ;
                background-image: url('.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body style="background-color: #FFFFFF">
        
            <center>
            <div id="headerSection">
            <h1>Voting System</h1> 
    
            </div>
            

            <div id="loginSection">
                <h2 align = "left">Login</h2>
<img src="image1.jpg" alt="Paris">
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter your mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter your password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>

            </center> 
    </body>
</html>