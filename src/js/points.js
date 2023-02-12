try {
const form = document.querySelector('form');
const button = form.querySelector('button[type="submit"]');


button.addEventListener('click', async (e) => {
  e.preventDefault();
  const url = new URL('/claimPoints', window.location.href);
  const response = await fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'urlencoded'
    }
  });
  const data = await response.text();
  
  const result = document.getElementById('claim-result-text');
  result.innerHTML = data;
});
} catch (e) {
}