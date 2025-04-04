(function () {
  const openBtn = document.getElementById('open-menu-mobile');
  const closeBtn = document.getElementById('close-menu-mobile');
  const menu = document.getElementById('navbar-mobile');


  openBtn.addEventListener('click', function () {
    menu.classList.add('active');
  });
  
  closeBtn.addEventListener('click', function () {
    menu.classList.remove('active');
  });

})();