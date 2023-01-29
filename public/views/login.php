<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>Login page</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
            <h1>FitFreak</h1>
            <h2>Become a beast!</h2>
        </div>
        <div class="login-container">
            <form class="login" action="login" method="POST">
                <div class="messages">
                    <?php if(isset($messages))
                        {
                            foreach ($messages as $message){
                                echo $message;
                            }
                        }
                        ?>
                </div>
                <input name="email" type="text" placeholder="Email@email.com">
                <input name="password" type="password" placeholder="Password">
                <button id="login" type="submit">LOGIN</button>
                <a onclick="href='/register'" id="non-registered-button">Not registered? Register now!</a>
            </form>
        </div>
        
    </div>
</body>