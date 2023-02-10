const input = document.getElementById("bet-input");

function incrementValue(amount) {
    input.value = parseInt(input.value) + amount;
  }

function changeValue(value) {
    input.value = value;
}

function doubleValue() {
    input.value = parseInt(input.value) * 2;
}

function halfValue() {
    input.value = parseInt(input.value) / 2;
}