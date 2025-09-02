$(document).ready(function(){
    $('.banner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        speed: 500,
      });      
  });
  
  /* --MENU MOBILE-- */
  document.querySelector(".abrirMenu").onclick = function(){ /*quando selecionar o abrirMenu ao clicar nele*/
    document.documentElement.classList.add("menuAtivo"); /*vai criar uma classe menuAtivo no elemento principal, que é o html*/
    
  }

  document.querySelector(".fecharMenu").onclick = function(){
    document.documentElement.classList.remove("menuAtivo"); /*vai remover a classe menuAtivo do elemento principal, que é o html*/
  }