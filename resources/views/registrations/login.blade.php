@extends('registrations.css.logincss')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>signin-signup</title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form action="" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btn">

                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-fields-container">
                    <div class="input-field1">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Firstname">
                    </div>
                    <div class="input-field1">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Lastname">
                    </div>
                </div>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-fields-container">
                    <div class="input-field1">
                        <i class="fas fa-phone"></i>
                        <input type="tel" placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" inputmode="numeric" required>
                    </div>

                    <div class="input-field1">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="input-field">
                    <i class="fas fa-location"></i>
                    <input type="address" placeholder="Address">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Sign up" class="btn">

                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member of Brand?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>

            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to Brand?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
<script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");
    const sign_in_btn2 = document.querySelector("#sign-in-btn2");
    const sign_up_btn2 = document.querySelector("#sign-up-btn2");

    sign_up_btn.addEventListener("click", (event) => {
        event.preventDefault(); // Prevent form submission
        container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", (event) => {
        event.preventDefault(); // Prevent form submission
        container.classList.remove("sign-up-mode");
    });

    sign_up_btn2.addEventListener("click", (event) => {
        event.preventDefault(); // Prevent form submission
        container.classList.add("sign-up-mode2");
        document.querySelector('.left-panel').style.display = 'flex'; // Show "Member of Brand?" panel
        document.querySelector('.right-panel').style.display = 'none'; // Hide "New to Brand?" panel
    });

    sign_in_btn2.addEventListener("click", (event) => {
        event.preventDefault(); // Prevent form submission
        container.classList.remove("sign-up-mode2");
        document.querySelector('.left-panel').style.display = 'none'; // Hide "Member of Brand?" panel
        document.querySelector('.right-panel').style.display = 'flex'; // Show "New to Brand?" panel
    });
</script>


</html>