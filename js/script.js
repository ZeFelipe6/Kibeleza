$('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });

  /* MEU MOBILE*/
document.querySelector("abrirMenu").onclick = function(){
  document.documentElement.classList.add("menuAtivo");
}

document.querySelector("fecharMenu").onclick = function(){
  document.documentElement.classList.add("menuAtivo");
}