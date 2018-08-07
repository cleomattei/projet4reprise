<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>
<section>
   
    <div class="slider" id="slider">

        <div id=flechegauche><i class="far fa-arrow-alt-circle-left"></i></div>
        <div id=flechedroite><i class="far fa-arrow-alt-circle-right"></i>
        </div>


        <div id="parent_figure">
            <!--content-list-->
            <div id="list_figure">
                <!--slider content-->
                <figure id="slide1">
                    <img src='/public/images/baleine_alaska.jpg' alt="image d'une baleine grise en plein saut" />
                    <figcaption>
                        <p>Alaska, source d'inspiration</p>
                    </figcaption>
                </figure>

                <figure id="slide2">
                    <img src="/public/images/alaska_teddybears.jpg" alt="image d'un ours brun debout au milieu d'une rivière" />
                    <figcaption>
                        <p>Alaska pays sauvage</p>
                    </figcaption>
                </figure>

                <figure id="slide3">
                    <img src="/public/images/alaska_trapper.jpg" alt="image d'un groupe de trappeur sur un chemin de montagne" />
                    <figcaption>
                        <p>Pays des trappeurs et des belles randonnées</p>
                    </figcaption>
                </figure>

                <figure id="slide4">
                    <img src="/public/images/alaska_boreal.jpg" alt="image d'un vélo avec un compteur" />
                    <figcaption>
                        <p>Pays des aurores boréales où l'on peux voir un autre monde...</p>
                    </figcaption>
                </figure>
            </div>
        </div>


    </div>

</section>
<div class="row space-margin-bot">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <img alt="portrait de jean forteroche à 70 ans avec une barbe" src="/public/images/jean_forteroche_portrait.jpg" />
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <img alt="signature de jean forteroche caligraphiée" src="/public/images/signature_jean_forteroche.png" />
    </div>
</div>
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 class="color-fauve">Jean Forteroche</h1>

        <p class="type-roman">
            Né au Canada le 11 mai 1966, Jean Forteroche s'installe en France au milieu des années 1990 et commence à écrire ses premiers romans qui ne connaîtront que peu de succès. Intéressé par la scène, il souhaite devenir acteur.
        </p>
        <p class="type-roman">
            En 1995, il trouve des petits rôles et se produit dans des cafés-théâtres de Paris. La dernière comédie où il apparait est un échec. Il se détourne de la scène et décide de faire le point sur sa vie en retournant au Canada sur les traces de son père.
        </p>
        <p class="type-roman">
            En replongeant dans la culture canadienne, il trouve l’inspiration et recommence à écrire.
        </p>
        <p class="type-roman">
            2014 est l’année de la consécration. « Voyage au bout de la Terre » suivi de « Matin en Alaska » sont vendus à plusieurs milliers d’exemplaires. Il est alors reconnu comme un grand romancier et comme critique littéraire.
        </p>
        <p class="type-roman">
            Un troisième tome arrive : « Billet simple pour l’Alaska ». Pour écrire cette nouvelle aventure, Jean FORTEROCHE a voyagé du Canada jusqu’aux contrées désertiques du Grand Nord et s’est inspiré de la vie d’un trappeur et de son chien qui ont été ses compagnons de route.
        </p>
        <p class="type-roman">
            Pour coller à la réalité de cette épopée, l’auteur a décidé de publier son roman en direct sur son propre blog « online », chapître après chapître.
        </p>

    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
