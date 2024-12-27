<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/signup.css">
    <title>Signup</title>
</head>

<body>
<form action="../php/signup_process.php" method="POST" class="form">
        <p class="title">Register</p>
        <p class="message">Signup now and get full access to our Website.</p>
        <div class="flex">
            <label>
                <input required type="text" class="input" name="firstName" placeholder=" ">
                <span>Firstname</span>
            </label>
            <label>
                <input required type="text" class="input" name="lastName" placeholder=" ">
                <span>Lastname</span>
            </label>
        </div>
        <label>
            <input required type="email" class="inputother" name="email" placeholder=" ">
            <span>Email</span>
        </label>
        <label>
            <input required type="password" class="inputother" name="password" placeholder=" ">
            <span>Password</span>
        </label>
        <label>
            <input required type="password" class="inputother" name="confirmPassword" placeholder=" ">
            <span>Confirm Password</span>
        </label>
        <button class="submit" type="submit">Submit</button>
        <p class="signin">Already have an account? <a href="./login.php">Signin</a></p>
    </form>
    
</body>

</html>
