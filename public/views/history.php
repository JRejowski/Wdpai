<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/history.css">

    <script src="https://kit.fontawesome.com/1f8a42c6c3.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/history.js" defer></script>
    <title>History</title>
</head>
<body>
    <div class="base-container">
        <?php
        include ('nav.php')
        ?>
        <main>
            <header>
                <div class="enter-date">
                        <input placeholder="enter the date (YYYY-MM-DD)">
                </div>
            </header>
            <section class="history">
                <table>
                    <tr>
                        <th>Exercise</th>
                        <th>Body Part</th>
                        <th>Weight</th>
                        <th>Reps</th>
                    </tr>
                </table>
                <table class="hist">

                </table>



            </section>
        </main>
    </div>
</body>

<template id="history-template">
    <tr>
        <td class="name"></td>
        <td class="body_part"></td>
        <td class="weight"></td>
        <td class="reps"></td>
    </tr>
</template>