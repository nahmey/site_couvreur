<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function accueil(){
    	return view('accueil.index');
    }

    // commentaire pour test


    public function zingueriePhotos(){
    	$titre = 'Zinguerie';
    	$nombre_photos = [];
    	$photos = [
    		'img/zinguerie/zinguerie.jpg',
            'img/zinguerie/pignon_arbre_3.jpg',
            'img/zinguerie/pignon_arbre_2.jpg',
            'img/zinguerie/pignon_ar_3.jpg',
            'img/zinguerie/pignon_ar_2.jpg',
            'img/zinguerie/pignon_ar.jpg',
            'img/zinguerie/pignon_1.jpg',
    		'img/zinguerie/zinguerie_2.jpg',
			'img/zinguerie/zinguerie_3.jpg',
			'img/zinguerie/zinguerie_4.jpg',
			'img/zinguerie/zinguerie_5.jpg',
			'img/zinguerie/zinguerie_6.jpg',
			'img/zinguerie/zinguerie_7.jpg',
			'img/zinguerie/zinguerie_1.jpg',
            'img/zinguerie/chantier_jung_1.jpg',
            'img/zinguerie/chantier_jung_2.jpg',
            'img/zinguerie/chantier_jung_3.jpg',
            'img/zinguerie/chantier_jung_4.jpg',
            'img/zinguerie/cuivre_1.jpg',
            'img/zinguerie/cuivre_2.jpg',
            'img/zinguerie/cuivre_3.jpg',
            'img/zinguerie/chantier_planche_de_rive_1.jpg',
            'img/zinguerie/decrochement_gouttieres.jpg',
            'img/zinguerie/gouttieres.jpg',
            'img/zinguerie/gouttieres_hoerdt.jpg',
            'img/zinguerie/habillage_de_cheminee.jpg',
            'img/zinguerie/tuyau_de_descente.jpg',
            'img/zinguerie/tuyau_descente.jpg',

    	];

    	for ($i=0; $i < count($photos); $i++) { 
    		$nombre_photos[] = $i;
    	}

    	return view('accueil.modal_photos', compact('photos', 'titre', 'nombre_photos'));
    }


    public function couverturePhotos(){
    	$titre = 'Couverture';
    	$nombre_photos = [];
    	$photos = [
    		'img/couverture/couverture_1.jpg',
    		'img/couverture/couverture_2.jpg',
			'img/couverture/couverture_3.jpg',
			'img/couverture/couverture_4.jpg',
			'img/couverture/couverture_5.jpg',
			'img/couverture/couverture_6.JPG',
            'img/couverture/20.jpg',
            'img/couverture/21.jpg',
            'img/couverture/charpente_weyersheim.jpg',
            'img/couverture/rive_apres.jpg',
            'img/couverture/rive_de_proche.jpg',
            'img/couverture/toit_fini_2.jpg',
            'img/couverture/toit_pendant.jpg',
            'img/couverture/toiture_hoerdt.jpg',
            'img/couverture/toiture_hoerdt_2.jpg',
            'img/couverture/toiture_hoerdt_arriere.jpg',
            'img/couverture/tuile_tradi_12.jpg',
    	];

    	for ($i=0; $i < count($photos); $i++) { 
    		$nombre_photos[] = $i;
    	}

    	return view('accueil.modal_photos', compact('photos', 'titre', 'nombre_photos'));
    }
}
