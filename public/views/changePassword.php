<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/settings.css">
    <script src="public/js/update_password.js" defer></script>
    <title>Change password</title>
</head>
<body>
<div class="base-container">
    <?php
    include ('nav.php')
    ?>
    <main>
        <h5>Change Password</h5>
        <form class="change-password" action="changePassword" method="POST">
            <div class="messages">
                <?php if(isset($messages)) {
                    foreach ($messages as $message){
                        echo $message;
                    }
                }
                ?>
            </div>
            <input name="OldPassword" type="password" placeholder="Old Password">
            <input name="NewPassword" type="password" placeholder="New Password">
            <input name="repeatNewPassword" type="password" placeholder="Repeat New Password">
            <button id="changePassword" type="submit">Change Password</button>
        </form>

    </main>
</div>
</body>