<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/history.css">
    <title>Add exercises</title>
</head>
<body>
<div class="base-container">
    <?php
    include ('nav.php')
    ?>
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
                    <td><?= $exercise->getName() ?></td>
                    <td><?= $exercise->getBodyPart() ?></td>
                    <td><button id="addExercise" type="submit">Add to exercise!</button</td>
                </tr>
                <?php endforeach; ?>
            </table>
    </main>
</div>
</body>