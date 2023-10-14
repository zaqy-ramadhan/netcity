// Fungsi untuk menambahkan kelas "scrolled" pada navbar saat di-scroll
function updateNavbarBackground() {
    if (window.scrollY > 50) {
        document.querySelector('.navbar').classList.add('scrolled');
    } else {
        document.querySelector('.navbar').classList.remove('scrolled');
    }
}

// Panggil fungsi saat halaman dimuat dan di-scroll
window.addEventListener('load', updateNavbarBackground);
window.addEventListener('scroll', updateNavbarBackground);

//animasi slide up
let elements = document.querySelectorAll('.slide-up');

function isInViewport(element) {
  let rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function checkElements() {
  elements.forEach(function(element) {
    if (isInViewport(element)) {
      element.classList.add('visible');
    } else {
      element.classList.remove('visible');
    }
  });
}

window.addEventListener('scroll', checkElements);



// animasi fade
let fade = document.querySelectorAll('.fade-in');

function isInViewportFade(element) {
  let rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function checkElementsFade() {
  fade.forEach(function(element) {
    if (isInViewportFade(element)) {
      element.classList.add('visible');
    } else {
      element.classList.remove('visible');
    }
  });
}

window.addEventListener('scroll', checkElementsFade);

//jalan pertama dibuka belum scroll
window.addEventListener('load', function() {
  let elements = document.querySelectorAll('.slide-up, .fade-in');
  elements.forEach(function(element) {
    element.classList.add('visible');
  });
});

function showProject() {
  // Hide other section and show contact section
  document.getElementById("home").style.display = "none";
  document.getElementById("contact").style.display = "none";
  document.getElementById("project").style.display = "block";
}

function showHome() {
  // Hide other section and show contact section
  document.getElementById("home").style.display = "block";
  document.getElementById("contact").style.display = "none";
  document.getElementById("project").style.display = "none";
}

function showContact() {
  // Hide other section and show contact section
  document.getElementById("home").style.display = "none";
  document.getElementById("contact").style.display = "block";
  document.getElementById("project").style.display = "none";
}