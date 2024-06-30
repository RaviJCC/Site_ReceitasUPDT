function toggleSubMenu() {
  const submenu = document.getElementById("submenuReceitas");
  submenu.classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.miniminicabecalho')) {
    const submenus = document.getElementsByClassName("submenu");
    for (let i = 0; i < submenus.length; i++) {
      const submenu = submenus[i];
      if (submenu.classList.contains('show')) {
        submenu.classList.remove('show');
      }
    }
  }
}