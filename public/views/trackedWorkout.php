<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/workout.css">
    <link rel="stylesheet" type="text/css" href="public/css/trackedWorkout.css">
    <script src="https://kit.fontawesome.com/1f8a42c6c3.js" crossorigin="anonymous"></script>
    <title>Your Workout</title>
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
        <h5>Workout Title</h5>
        <section id="exercises">
            <table>
                <tr>
                    <th>Exercise name</th>
                    <th>Weight</th>
                    <th>Reps</th>
                </tr>
                <tr>
                    <td>Exercise 1</td>
                    <td><input id="wr" name="weight" type="text" placeholder="kg"></td>
                    <td><input id="wr" name="reps" type="text" placeholder="reps"></td>
                </tr>
                <tr>
                    <td>Exercise 2</td>
                    <td><input id="wr" name="weight" type="text" placeholder="kg"></td>
                    <td><input id="wr" name="reps" type="text" placeholder="reps"></td>
                </tr>
            </table>
        </section>
        <button id="start" type="submit">Finished!</button>
    </main>
</div>
</body>