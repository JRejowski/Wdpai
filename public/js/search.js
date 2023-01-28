const search = document.querySelector('input[placeholder="search workout routines"]');
const workoutContainer = document.querySelector(".workouts");

search.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (workouts) {
            workoutContainer.innerHTML = "";
            loadWorkouts(workouts)
        });
    }
});

function loadWorkouts(workouts) {
    workouts.forEach(workout => {
        console.log(workout);
        createWorkout(workout);
    });
}

function createWorkout(workout) {
    const template = document.querySelector("#workout-template");

    const clone = template.content.cloneNode(true);
    const div = clone.querySelector("div");
    div.id = workout.id;
    const image = clone.querySelector("img");
    image.src = `/public/uploads/${workout.image}`;
    const title = clone.querySelector("h4");
    title.innerHTML = workout.title;

    workoutContainer.appendChild(clone);
}
