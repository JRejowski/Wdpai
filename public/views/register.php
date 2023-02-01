<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>Register page</title>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
            <h1>FitFreak</h1>
            <h2>Become a beast!</h2>
        </div>
        <div class="login-container">
            <form class="login" action="register" method="POST">
                <div class="messages">
                    <?php if(isset($messages))
                    {
                        foreach ($messages as $message){
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="email" type="text" placeholder="Email@email.com" required>
                <input name="password" type="password" placeholder="Password" required>
                <input name="repeatPassword" type="password" placeholder="Repeat Password" required>
                <button id="login" type="submit">REGISTER</button>
                <a onclick="href='/login'" id="non-registered-button">Already registered? Log in!</a>
            </form>
        </div>
        
    </div>
</body>