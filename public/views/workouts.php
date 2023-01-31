<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/workouts.css">
    <script src="https://kit.fontawesome.com/1f8a42c6c3.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title>Main page</title>
</head>
<body>
    <div class="base-container">
        <?php
        include ('nav.php')
        ?>
        <main>
            <header>
                <div class="search-bar">
                        <input placeholder="search workout routines">
                </div>
                <div class="add-workout-routine">
                    <i class="fa-solid fa-plus"></i>
                    <a href="/addWorkoutRoutine">add workout</a>
                </div>
            </header>
            <section class="workouts">
                <?php if(isset($workouts)){
                foreach ($workouts as $workout): ?>
                <div id="workout 1">
                    <img onclick="location.href='/workout'" src="public/uploads/<?= $workout->getImage() ?>">
                    <h4><?= $workout->getTitle(); ?></h4>
                </div>
                <?php endforeach; }?>
            </section>
        </main>
    </div>
</body>

<template id="workout-template">
<div id="">
    <img src="">
    <h4>title</h4>
</div>
</template>