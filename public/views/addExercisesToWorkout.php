<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/history.css">
    <script src="https://kit.fontawesome.com/1f8a42c6c3.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../public/js/addExerciseToWorkout.js" defer></script>
    <title>Add exercises</title>
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
        <h5>Add Exercises</h5>
            <table>
                <tr>
                    <th>Exercise</th>
                    <th>Body part</th>
                    <th>Add</th>
                </tr>
                <?php foreach ($exercises as $exercise): ?>
                <tr>
                    <td class="Name"><?= $exercise->getName() ?></td>
                    <td><?= $exercise->getBodyPart() ?></td>
                    <td><button class="addExercise" type="submit">Add to exercise!</button</td>
                </tr>
                <?php endforeach; ?>
            </table>
    </main>
</div>
</body>