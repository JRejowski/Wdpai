<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/workout.css">
    <script src="https://kit.fontawesome.com/1f8a42c6c3.js" crossorigin="anonymous"></script>
    <title>History</title>
</head>
<body>
<div class="base-container">

    <nav>

        <img src="../public/img/logo.svg">
        <h3>FitFreak</h3>

        <ul>
            <li>
                <i class="fa-sharp fa-solid fa-house"></i>
                <a href="../workouts" class="button">home</a>
            </li>
            <li>
                <i class="fa-regular fa-calendar"></i>
                <a href="../history" class="button">history</a>
            </li>
            <li>
                <i class="fa-sharp fa-solid fa-gear"></i>
                <a href="../settings" class="button">settings</a>
            </li>
            <li>
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="../logout" class="button">logout</a>
            </li>
        </ul>

    </nav>
    <main>
        <h5><?php print_r($workout[0]->getTitle()) ?></h5>
        <button onclick="location.href='../addExercisesToWorkout'">Add exercises</button>
        <section id="exercises">
            <?php foreach ($workout as $w): ?>
            <p><?= $w->getName()?></p>
            <?php endforeach; ?>
        </section>

        <button onclick="location.href='../trackedWorkout/<?= $workout[0]->getId()?>'" id="start">Start your workout!</button>
    </main>
</div>
</body>