window.addEventListener('scroll', function() {
  const header = document.querySelector('header');
  const scrolled = window.scrollY > 0;
  header.classList.toggle('scrolled', scrolled);
});