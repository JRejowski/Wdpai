const addButtons = Array.from(document.querySelectorAll(".addExercise"));

addButtons.forEach((add)=>{
    add.addEventListener("click", function (event){

        const name = add.parentElement.parentElement.querySelector(".Name");
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

})

const address = getCurrentURL();

function getCurrentURL () {  return window.location.href; }
