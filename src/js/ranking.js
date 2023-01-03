async function getRankingData() {
    try {
      const response = await fetch('../ranking-data.json');
      const data = await response.json();
      return data;
    } catch (error) {
      console.error(error);
    }
  }
  
  getRankingData().then(data => {
    console.log(data);
  });