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
  }).to(loading, {
    opacity: 0,
    duration: 1,
    ease: "power2.in",
  });
});
