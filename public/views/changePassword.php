<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/settings.css">
    <script src="https://kit.fontawesome.com/1f8a42c6c3.js" crossorigin="anonymous"></script>
    <title>History</title>
</head>
<body>
<div class="base-container">
    <nav>

        <img src="public/img/logo.svg">
        <h3>FitFreak</h3>

        <ul>
            <li>
                <i class="fa-sharp fa-solid fa-house"></i>
                <a href="/workouts" class="button">home page</a>
            </li>
            <li>
                <i class="fa-regular fa-calendar"></i>
                <a href="/history" class="button">history</a>
            </li>
            <li>
                <i class="fa-sharp fa-solid fa-gear"></i>
                <a href="#" class="button">settings</a>
            </li>
            <li>
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="#" class="button">logout</a>
            </li>
        </ul>

    </nav>
    <main>
        <h5>Change Password</h5>
        <form>
            <input name="Old password" type="password" placeholder="Old Password">
            <input name="New password" type="password" placeholder="New Password">
            <input name="repeatNewPassword" type="password" placeholder="Repeat New Password">
            <button id="changePassword" type="submit">Change Password</button>
        </form>

    </main>
</div>
</body>