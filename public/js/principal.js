document.addEventListener("DOMContentLoaded", function () {
    const menuForm = document.getElementById("menuForm");
  
    menuForm.addEventListener("submit", function (e) {
      e.preventDefault();
  
      const weekInput = document.getElementById("week");
      const menuInput = document.getElementById("menu");
  
      const week = weekInput.value;
      const menu = menuInput.value;
  
   
      localStorage.setItem(week, menu);
  
     
      weekInput.value = "";
      menuInput.value = "";
  
      
      alert("Cardápio enviado com sucesso para a semana " + week);
    });
  });
  