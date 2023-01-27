<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/workouts.css">
    <script src="https://kit.fontawesome.com/1f8a42c6c3.js" crossorigin="anonymous"></script>
    <title>Add workout routine</title>
</head>
<body>
    <div class="base-container">
        <nav>

                <img src="public/img/logo.svg">
                <h3>FitFreak</h3>
            
            <ul>
                <li>
                    <i class="fa-regular fa-calendar"></i>
                    <a href="#" class="button">history</a>
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
            <header>
                <div class="search-bar">
                    <form>
                        <input placeholder="search workout routines">
                    </form>
                </div>
                <div class="add-workout-routine">
                    <i class="fa-solid fa-plus"></i>
                    Add workout routine
                </div>
            </header>
            <section class="workouts-form">
                <h5>Create your routine!</h5>
                <form action="addWorkoutRoutine" method="POST" ENCTYPE="multipart/form-data">
                    <?php if(isset($messages))
                    {
                        foreach ($messages as $message){
                            echo $message;
                        }
                    }
                    ?>
                    <input name="title" type="text" placeholder="Title">
                    <input type="file" name="file">
                    <button type="submit">Send</button>
                </form>
            </section>
        </main>
    </div>
</body>