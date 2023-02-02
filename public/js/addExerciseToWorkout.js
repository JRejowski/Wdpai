const add = document.querySelector(".addExercise");
const name = document.querySelector(".Name");


const address = getCurrentURL();
add.addEventListener("click", function (event){

   const parts = address.split('/');
    const id_workout = parts.pop() || parts.pop();
    const data = {workout: id_workout, exercise_name: name.innerHTML};
    console.log(data);
    fetch("/addExerciseToWorkout", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(function (response) {
        return response.json();
    });
});

function getCurrentURL () {  return window.location.href; }