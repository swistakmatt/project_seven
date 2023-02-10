const input = document.getElementById("bet-input");
const betButton = document.getElementById("bet-form-submit");
const result = document.getElementById("coinflip-result-text");

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


betButton.addEventListener("click", async (e) => {
    e.preventDefault();
    const bet = input.value;
    const side = document.querySelector('input[name="side"]:checked');
    const sideValue = side.value; 
    
    const url = new URL('/submitBet', window.location.href);
    url.searchParams.set('bet', bet);
    url.searchParams.set('side', sideValue);

    const response = await fetch(url, {
        method: 'GET',
        headers: {
            'Content-Type': 'urlencoded'
        }

    })

    const data = await response.text();

    result.innerHTML = data;
});