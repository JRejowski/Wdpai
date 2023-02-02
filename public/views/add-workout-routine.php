<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/workouts.css">
    <script src="https://kit.fontawesome.com/1f8a42c6c3.js" crossorigin="anonymous"></script>
    <title>Add workout routine</title>
</head>
<body>
    <div class="base-container">
        <?php
        include ('nav.php')
        ?>
        <main>

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