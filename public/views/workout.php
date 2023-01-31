<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/workout.css">
    <script src="https://kit.fontawesome.com/1f8a42c6c3.js" crossorigin="anonymous"></script>
    <title>History</title>
</head>
<body>
<div class="base-container">
    <?php
    include ('nav.php')
    ?>
    <main>
        <h5><?php echo $workouts[0]->getTitle() ?></h5>
        <button>Add exercises</button>
        <section id="exercises">
            <?php foreach ($workouts as $workout): ?>
            <p><?= $workout->getName()?></p>
            <?php endforeach; ?>
        </section>

        <button onclick="location.href='/trackedWorkout'" id="start">Start your workout!</button>
    </main>
</div>
</body>