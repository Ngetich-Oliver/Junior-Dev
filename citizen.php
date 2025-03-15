<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen by birth</title>
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

    <a href="registration.html">Citizen by registration</a>
<form action="evaluate.php" method="post">

            Citizenship by birth:
            <p><label for="FullName">Full Name</label>
            <input type="text" name="FullName" id="FullName" autofocus required></p>
            <p><label for="Gender">Gender</label>
            <select name="Gender" id="Gender">
                <option value="0">Select gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select></p>
            <p><label for="IDNumber">National ID Number</label>
            <input type="text" name="IDNumber" id="IDNumber" autofocus required></p>
            <p><label for="VoterId">Voter ID Nunber</label>
            <input type="text" name="VoterId" id="VoterId" autofocus required></p>
            <p><label for="County">County</label>
            <input type="text" name="County" id="County" autofocus required></p>
            <p><label for="Constituency">Constituency</label>
            <input type="text" name="Constituency" id="Constituency" autofocus required></p>
            <p><label for="Ward">Ward</label>
            <input type="text" name="Ward" id="Ward" autofocus required></p>
            <p><label for="CurrentLocation">Current Location</label>
            <input type="text" name="CurrentLoc" id="CurrentLoc" autofocus required></p>
            <button>Submit</button>
    
</form>

<button id="logout">Logout</button>
<footer>
    <p>IEBC your vote,your future</p>
</footer>
<script src="index.js"></script>
</body>
</html>