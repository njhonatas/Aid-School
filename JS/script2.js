// Obtém a referência para o elemento do perfil
const perfilLink = document.querySelector('.perfil-link');

// Obtém a referência para o elemento da dropbar
const dropbar = document.querySelector('.dropbar');

// Adiciona um evento de clique ao elemento do perfil
perfilLink.addEventListener('click', () => {
  // Alterna a classe 'active' da dropbar para exibi-la ou ocultá-la
  dropbar.classList.toggle('active');
});
