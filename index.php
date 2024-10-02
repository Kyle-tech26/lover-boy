    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Register & Login</title>
</head>
<body>
    <div class="container" id="signUp" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
       
        <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fname" id="fname" placeholder="First Name" required>
        <label for="fname">First Name</label>
    </div>
        <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required>
        <label for="lname">Last Name</label>
    </div>
        <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="e   mail">Email</label>
    </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="passwords" required>
            <label for="passwords">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">
        ----------or----------
    </p>
    <div class="icons">  
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
    </div>
</div>
    
<div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register.php">
        
    <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="password" required>
            <label for="password">Password</label>
        </div>
        <p class="recover">
            <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <p class="or">
        ----------or----------
    </p>

    <div class="icons">  
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
        <p>Don't have account yet?</p>
        <button id="signUpButton">Sign Up</button>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>