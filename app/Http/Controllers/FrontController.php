<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function accueil(){
    	return view('accueil.index');
    }


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
			'img/zinguerie/zinguerie_1.jpg'
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
    	];

    	for ($i=0; $i < count($photos); $i++) { 
    		$nombre_photos[] = $i;
    	}

    	return view('accueil.modal_photos', compact('photos', 'titre', 'nombre_photos'));
    }
}
