<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        body{
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>
<body background="logo.jpg.jpg">  
<nav class="iebc">
    <div class="logo">
    <h1>IEBC</h1>
    <div class="two">
<ul>
    <li><a href="#about-us">About Us</a></li>
    <li><a href="#services">Services</a></li>
   <li><a href="#management">Managemement</a></li> 
    <li><a href="#contact">Contact Us</a></li>
    <li> <a href="create.php">Sign Up</a></li>
    <li> <a href="Login.php">Login</a></li>
</ul>
    </div>
</nav>

   
    <div class="container">
        
        <form action="process.php" method="post" id="signup" onsubmit="return validateForm()">
            <h1>Create an account</h1>
                <p><label for="Email">Email Address:</label>
                    <input type="email" name="Email" id="Email" autofocus required></p>
                    <p><label for="UserName">UserName</label>
                    <input type="text" name="UserName" id="UserName" autofocus required></p>
                    <p><label for="citizenship">Citizenship</label>
                    <input type="text" name="citizenship" id="citizenship" required autofocus></p>
                    <p><label for="Password">Password</label>
                    <input type="password" name="Password" id="Password" autofocus required></p>
                    <p><label for="ConfirmPassword">Confirm Password</label>
                    <input type="password" name="ConfirmPassword" id="ConfirmPassword" autofocus required></p>
                    <button id="Create" type="submit">Create</button>
           
        </form>
    </div>
    <footer>
    <p>IEBC your vote,your future</p>
</footer>
<script>
    function validateForm(){
        const userName= document.getElementById('UserName').value;
        if(UserName.trim()===""){
            alert("Username is required");
            return false;
        }
        return true;
    }

</script>
</body>
</html>