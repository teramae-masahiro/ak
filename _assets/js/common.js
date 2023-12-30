const hamburger = document.querySelector(".p-header__hamburger");
const nav = document.querySelector(".p-nav");
const spList = document.querySelector(".p-nav__sp-list");
const sns = document.querySelector(".p-nav__sns");
console.log(sns);

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
  sns.classList.toggle("is-active");
  document.querySelector(".p-header__nav").classList.toggle("is-active");
  nav.classList.toggle("is-active");
  spList.classList.toggle("is-active");
});

const loading = document.querySelector("#loading");
document.addEventListener("DOMContentLoaded", () => {
  gsap.set(loading, {
    opacity: 0,
    y: 100,
  });
  let tl = gsap.timeline();

  tl.to(loading, {
    duration: 1,
    opacity: 1,
    y: 0,
    ease: "power2.out",
  });
});

document.addEventListener('scroll', function() {
  const fvElement = document.querySelector('.p-fv');
  const header = document.querySelector('.p-header__wrapper');
  const logoSvgElements = document.querySelectorAll('.p-header__home-link svg *');
  const navElements = document.querySelectorAll('.p-nav a');
  const snsElements = document.querySelectorAll('.p-nav svg *');
  const hamburgerLines = document.querySelectorAll('.p-header__hamburger--line'); // ハンバーガーメニューのライン

  if (!fvElement || !header || !logoSvgElements) return;

  const fvBottom = fvElement.offsetTop + fvElement.offsetHeight;
  const scrollPosition = window.pageYOffset;
  const scrollPercentage = Math.min(scrollPosition / fvBottom, 1);

  const colorValue = Math.floor(255 - (204 * scrollPercentage));
  const opacity = Math.min(scrollPercentage, 1);

  navElements.forEach(function(element) {
    element.style.color = `rgb(${colorValue}, ${colorValue}, ${colorValue})`;
  });

  snsElements.forEach(function(element) {
    element.style.fill = `rgb(${colorValue}, ${colorValue}, ${colorValue})`;
  });

  hamburgerLines.forEach(function(line) {
    line.style.backgroundColor = `rgb(${colorValue}, ${colorValue}, ${colorValue})`;
  });

  header.style.backgroundColor = `rgba(255, 255, 255, ${opacity})`;

  if (scrollPercentage > 0.5) {
    const adjustedPercentage = (scrollPercentage - 0.5) * 2;
    const red = Math.floor(0 * adjustedPercentage);
    const green = Math.floor(194 * adjustedPercentage);
    const blue = Math.floor(232 * adjustedPercentage);
    logoSvgElements.forEach(function(element) {
      element.style.fill = `rgb(${red}, ${green}, ${blue})`;
    });
  } else {
    logoSvgElements.forEach(function(element) {
      element.style.fill = 'rgb(255, 255, 255)';
    });
  }
});
