  async function getRankingData(url) {
    const response = await fetch(url);

    if (response.ok) {
      const data = await response.json();
      return data;
    } else {
      throw new Error('Something went wrong');
    }
  }
  
  getRankingData('/rankingData').then(data => {
    const rankingList = document.querySelector('.ranking-container ul');
    data.forEach((item, index) => {
      const rankingItem = document.createElement('li');
      rankingItem.innerHTML = `
        <span class="rank">${index + 1}</span>
        <span class="name">${item.nickname}</span>
        <span class="score">${item.balance}</span>
      `;
      rankingList.appendChild(rankingItem);
    });
  });