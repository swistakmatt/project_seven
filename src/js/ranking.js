async function getRankingData() {
    try {
      const response = await fetch('/public/ranking-data.json');
      const data = await response.json();
      return data;
    } catch (error) {
      console.error(error);
    }
  }
  
  getRankingData().then(data => {
    const rankingList = document.querySelector('.ranking-container ul');
    data.forEach(player => {
      const listItem = document.createElement('li');
      listItem.innerHTML = `
        <span class="rank">${player.rank}</span>
        <span class="name">${player.name}</span>
        <span class="score">${player.score}</span>
      `;
      rankingList.appendChild(listItem);
    });
  });