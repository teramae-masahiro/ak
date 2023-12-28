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
    var scrollPosition = window.pageYOffset;
    var maxScroll = document.body.scrollHeight - window.innerHeight;
    var scrollPercentage = scrollPosition / maxScroll;

    // SVG内の全ての要素の色を変更
    var svgElements = document.querySelectorAll('svg *');
    svgElements.forEach(function(element) {
      element.style.fill = `rgba(${Math.floor(255 * scrollPercentage)}, ${Math.floor(255 * (1 - scrollPercentage))}, 0)`;
    });
  });

