const search = document.querySelector('input[placeholder="enter the date (YYYY-MM-DD)"]');
const historyContainer = document.querySelector(".hist");

search.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {date: this.value};

        fetch("/getExercises", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (history) {
            historyContainer.innerHTML = "";
            loadHistory(history)
        });
    }
});

function loadHistory(histories) {
    histories.forEach(history => {
        console.log(history);
        createHistory(history);
    });
}

function createHistory(history) {
    console.log(history);
    const template = document.querySelector("#history-template");

    const clone = template.content.cloneNode(true);
    const name = clone.querySelector(".name");
    name.innerHTML = history.name;
    const body_part = clone.querySelector(".body_part");
    body_part.innerHTML = history.body_part;
    const weight = clone.querySelector(".weight");
    weight.innerHTML = history.weight;
    const reps = clone.querySelector(".reps");
    reps.innerHTML = history.reps;

    historyContainer.appendChild(clone);
}
