document.addEventListener("DOMContentLoaded", function () {
    const menuDiv = document.getElementById("menu");

    function loadMenuForWeek() {
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      const week = urlParams.get("{{route('refeitorios.cardapio')}}");

      if (week) {
        const menu = localStorage.getItem(week);
        if (menu) {
          const menuText = document.createElement("p");
          menuText.textContent = menu;
          menuDiv.appendChild(menuText);
        } else {
          const errorText = document.createElement("p");
          errorText.textContent = "Cardápio não encontrado para a semana " + week;
          menuDiv.appendChild(errorText);
        }
      } else {
        const errorText = document.createElement("p");
        errorText.textContent = "Semana não especificada na URL";
        menuDiv.appendChild(errorText);
      }
    }

    loadMenuForWeek();
  });
