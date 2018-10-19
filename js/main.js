/*definition de la fonction show_hide**********************************************************************/
function myFunction(link) {
    var x = document.getElementById("myDIV");
    if (x.style.display == "none") {
      $("#myDIV").show(500);
      $("#selectedImage").attr('src',link)
    } else {
      $("#myDIV").hide(500);
    }
  }
  /*on attribut la source i au link i********************************************************************* */
  let link1 = $("#image1").attr("src") 
  let link2 = $("#image2").attr("src") 
  let link3 = $("#image3").attr("src") 
  let link4 = $("#image4").attr("src") 
  let link5 = $("#image5").attr("src") 
  let link6 = $("#image6").attr("src") 
/*definition de la fonction change**************************************************************************/
  function badil0(){
    document.getElementById("ee").innerHTML = "<h1 >0.2 Sprich mit uns-  HOTEL PACHA</h1><br><p>Cet événement est Basé sur le concept de l’innovation et de la créativité.Une journée d’échange, dedébats et de tables rondes traitant des sujets d’actualité (La POLLUTION).Dans ce cadre et avec la participation de plus que 80 personnes, l’action vise à rapprocher les élèves ingénieurs, les employeurs,les élèves, les médecins, les directeurs. C’est une occasion privilégiée pour communiquer et échanger des idées avec des élèves ingénieurs, des employeurs, des élèves, des médecins , directeurs...</p>";
}
  function badil1(){
    document.getElementById("ee").innerHTML = "<h1>Formations de Prise de parole en public et en Team Building- à l'ENET'COM</h1><br><p>deutsch club enet'com organise une formation de prise de parole en public animée par le formateur Moez Krichen qui vise tous ceux désirant savoir travailler en équipe ou encore ceux qui veulent assurer les meilleurs  discours à chaque prise de parole.</p>";
}
function badil2(){
    document.getElementById("ee").innerHTML = "<h1>Engineers Success Stories in Germany ESSG 1.0- à l'ENET'COM </h1><br>Deutsch club ENET'com dans sa 2ème année de victoire et aventure vous offre l'occasion de transformer vos ambitions en réalité.";
}
function badil3(){
    document.getElementById("ee").innerHTML = "<h1>Café Talk-à la maison de lingénieur</h1><br><p>Cet événement vous offre une précieuse opportunité d’expression et de communication en Allemand ainsi qu'une discussion enrichie avec des personnes qui en parlent parfaitement et qui sont doués.</p>";
}
 
  /************************************************************************************************************** */
  $("#image1").click(function(){
      myFunction(link1)
      badil0()
  })
  $("#image2").click(function(){
      myFunction(link2)
      badil1()
  })
  $("#image3").click(function(){
      myFunction(link3)
      badil2()
  })
  $("#image4").click(function(){
      myFunction(link4)
      badil3()
  })
  
/*hide**************************************************************************************************************/
$(document).ready(function(){
    $(".btn1").click(function(){
        $("#myDIV").hide(1000);
    });
   
});
/**************************************************************************************************** */

