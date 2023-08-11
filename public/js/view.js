document.addEventListener("DOMContentLoaded", function () {
    const menuList = document.getElementById("menuList");
  
    
    function loadMenusFromLocalStorage() {
      for (let i = 0; i < localStorage.length; i++) {
        const week = localStorage.key(i);
        const menu = localStorage.getItem(week);
        
        const menuLink = document.createElement("a");
        menuLink.href = "cardapio.html?week=" + encodeURIComponent(week);
        menuLink.textContent = week;
        menuList.appendChild(menuLink);
      }
    }
  
    loadMenusFromLocalStorage();
  });
  