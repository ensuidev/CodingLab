<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[480px] h-[580px] p-5 principal_main">
        <div class="flex flex-col justify-center items-center">
            <header class="pt-10 pb-8">
                <h2 class="font-semibold font text-4xl text-white">
                    Login Form
                </h2>
            </header>
            <form method="post" action="./db/functions.php">
                <div class="grid grid-cols-1 w-80 gap-4">
                        <input class="p-2 rounded-sm" name="usr" type="text" placeholder="Email or Phone">
                        <input class="p-2 rounded-sm" name="pass" type="password" placeholder="Password">
                        <a class="text-white" href="#">Forgot your password?</a>
                        <button class="p-2 rounded-sm font-medium text-white bg-cyan-800" name="submit" type="submit" id="login_BTN">Login</button>
                </div>
            </form>
            <div class="pt-7 w-80 flex flex-col items-center justify-center">
                <h4 class="text-white font-medium text-2xl pb-3">Or login with</h4>
                <div class="grid grid-cols-2 w-80 gap-2">
                        <button class="bg-blue-700 rounded-sm" id="facebook_BTN">
                            <i class="fa fa-facebook text-2xl"></i>
                        </button>
                        <button class="p-3 rounded-sm" id="instagram_BTN">
                            <i class="fa fa-instagram text-2xl"></i>
                        </button>
                </div>
            </div>
            <div class="text-white py-8 text-lg justify-center items-center flex flex-col">
                <h5 class="text-black">Don't you have account?</h5>
                <a href="#">Sign Up</a>
            </div>
        </div>
    </main>

    <script src="js/tailwindcss-3.2.6.js"></script>
</body>

</html>