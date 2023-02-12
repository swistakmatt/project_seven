async function getAdminData(url) {
    const response = await fetch(url);

    if (response.ok) {
      const data = await response.json();
      return data;
    } else {
      throw new Error('Something went wrong');
    }
  }
  
  getAdminData('/adminData').then(data => {
    console.log(data);
    const adminList = document.querySelector('.admin-container ul');
    data.forEach((item) => {
      const adminItem = document.createElement('li');
      adminItem.innerHTML = `
        <span class="nickname">${item.nickname}</span>
        <span class="id_user">${item.id_user}</span>
        <span class="email">${item.email}</span>
        <span class="created">${item.created}</span>
        <span class="role">${item.role}</span>
        <span class="balance">${item.balance}</span>
        <span class="claim_timestamp">${item.claim_timestamp}</span>
      `;
      adminList.appendChild(adminItem);
    });
  });