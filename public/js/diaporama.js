$(document).ready(function () {
    slider.init();
    slider.defilementAutomatique();
});

slider = { //on crée un objet slider
    init: function () {
        slider.elem = $("#list_figure");//div qui rassemble l'ensemble des figures
        slider.slides = slider.elem.find("figure");//tableau des slides de la div list figure
        slider.nbSlide = slider.elem.find("figure").length; //on trouve toutes les figures de l'élément slider
        slider.diapoActuelle = 0;
        
        
        slider.slider = $("#slider");
        slider.iconeflechegauche = $("#flechegauche");
        slider.iconeflechedroite = $("#flechedroite");
        
        //on cache les images du slider
        slider.slideHide() ;
        
        //on affiche la slide actuelle
        slider.slides[slider.diapoActuelle].style.display = 'block' ; 
        
        //détecter click sur les boutons
        slider.flecheGauche() ; 
        slider.flecheDroite() ; 
        
        //pause ou reprise sur le slider
        slider.mouseover() ; 
        slider.mouseout();
        
        //touche du clavier demarre le slide
        slider.clavierSlider() ; 
       
    },
    /* METHODES ======================================================================================= */
    
    /* ON CACHE LES IMAGES DU SLIDER */
    
    slideHide: function(){
            for(var i=0;i<slider.nbSlide;i++) {
            slider.slides[i].style.display = 'none'; 
        }},
    
    /* ON DETECTE LE CLICK SUR L'ICONE DES FLECHES */
    
    flecheGauche: function() {
        slider.iconeflechegauche.click(function () {
            //4 on créer une fonction prev
            slider.prev();
        });
    },
    flecheDroite: function() {
        slider.iconeflechedroite.click(function () {
            //1 on créer une fonction next
            slider.next();
        });
    },
    
    /* ON CRÉER LA FONCTION NEXT ET PREVIOUS POUR INCREMENTER OU DECREMENTER LA DIAPOSITIVE SUIVANTE OU PRECEDENTE */
    
    next: function () { // on recréer une fonction pour aller à l'élément suivant
        slider.diapoActuelle++; //on incrémente la diapo actuelle 
         
        if (slider.diapoActuelle > slider.nbSlide - 1) //on fait la boucle
        {
            slider.diapoActuelle = 0;
        }
        
        //on cache l'ensemble des figures
        for(var i=0;i<slider.nbSlide;i++) {//pour chaque figure du slide 
            slider.slides[i].style.display = 'none'; 
        }
        //on affiche la diapo actuelle
        slider.slides[slider.diapoActuelle].style.display = 'block';  
    },
    prev: function () { //2 on recréer une fonction pour aller à l'élément d'avant
        slider.diapoActuelle--; //on décrémente la diapo actuelle 
        if (slider.diapoActuelle < 0) //on fait la boucle
        {
            slider.diapoActuelle = slider.nbSlide - 1;
        }

        for(var i=0;i<slider.nbSlide;i++) {
            slider.slides[i].style.display = 'none'; 
        }
        slider.slides[slider.diapoActuelle].style.display = 'block'; 
    },
    
    /* ON CRÉER UN DEFILEMENT AUTOMATIQUE TOUTE LES 4 SECONDES AVEC LE SETINTERVAL ET LA FONCTION STOP AVEC CLEARINTERVAL */
    
    defilementAutomatique: function () { //5 défilement automatique
        slider.timer = window.setInterval("slider.next()", 4000);
    },
    stop_defil: function () { //6 on arrête le défilement
        window.clearInterval(slider.timer);
    },
    
    /* MOUSEOUT MOUSEOVER */
    
     mouseout: function(){
        //8 on reprend le défilement quand on est HZ
        slider.slider.mouseout(function () {
            slider.defilementAutomatique();
        });
    },
    mouseover: function() {
        //7 on arrête le défilement quand on est dans la zone
        slider.slider.mouseover(function () {
            slider.stop_defil();
        });
    },
    
    /* DEFILEMENT DU SLIDER AVEC LES TOUCHES DU CLAVIER */
    
    clavierSlider: function() {
        //9 on fait bouger le slide avec les flèches du clavier
        document.addEventListener("keydown", function (e) {//on écoute l'évènement de la touche
            if (e.keyCode === 37) {
                slider.prev();
            } else if (e.keyCode === 39) {
                slider.next();
            }
        });
    },
   
    
    

    
}
