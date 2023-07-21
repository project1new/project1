const counterElement = document.getElementById("counter");
let count = 1;
let plues='+';

function updateCounter() {
    counterElement.textContent = plues+count;
}

function incrementCounter() {
    if (count >= 102) {

    } else {
        count++;
    }
    updateCounter();
}

// Call incrementCounter every second (1000ms)
setInterval(incrementCounter, 15);
