<?php

return [
    /*
    |--------------------------------------------------------------------------
    | all front messages for application
    |--------------------------------------------------------------------------
    |
    | 
    |
    */
    'WEBSITE_INFO'=>[
        'TOP_MENU'=>[
            'HOME'=>'Accueil',
            'ABOUT'=>'A Propos',
            'NEWS'=>'Actualités',
            'FUTURS_STUDENT'=>'Futurs Eleves',
            'CONTACT'=>'Contact',
            'GALLERY'=>'Gallerie',
            'INFO'=>'Informations',
            'APPLY'=>'Postuler',
            'EDUTEAM'=>'Equipe Pédagogique',
            'FOUNDER'=>'Mot du Fondateur',
            'PROGRAMS'=>'Programme Scolaire',
            'INFRASTRUCTURE'=>'Programme Scolaire',
            'PARENTS'=>'Parents d\'Elève',
            'ADMISSIONS'=>'Parents d\'Elève',
            'REGISTRATION'=>'Parents d\'Elève',
            'KINDERGATEN'=>'Maternelle',
            'PRIMARY'=>'Primaire',
            'MIDDLE'=>'Collège',
            'HIGH'=>'Lycée',
            'PRIVATE'=>'Espace Privé',
        ],
        'PAGES'=>[
            'preincriptions'=>[
                'breadcrumbs'=>[
                    'pageTitle'=>'Formulaire de Pré-Inscription',
                    'homeTitle'=>'Accueil',
                    'activeTitle'=>'Pré-Inscription',
                ],
                'placeholders'=>[
                    'nom_eleve'=>'',
                    'prenom_eleve'=>'',
                ],
                "msg"=>[
                    'success'=>"Préinscription Effectuéé avec success.",
                ]
            ],
        ],
    ],
    'DASHBOARD'=>"Tableau de Bord",
    'WEBSITE'=>'Site Web',
    'sidebar'=>[
        'dashboard'=>"Tabeau de Bord",

        'sliders'=>[
            'title'=>"Gérer les Sliders",
            'liste' =>"Afficher les Sliders",
            'new' =>"Ajouter un Slider"
        ],
        'preinscriptions'=>[
            'title'=>"Les Pré-inscriptions",
            'liste' =>"Pré-inscriptions",
        ],
        'eleves'=>[
            'title'=>"Gestion Elèves",
        ],
        'classes'=>[
            'title'=>"gestion des classes",
        ],
        'inscriptions'=>[
            'title'=>"Inscriptions",
        ],
        'notes'=>[
            'title'=>"Gestion des Notes",
        ],
    ],
    'matieres'   => [
        'header'=>[
            'title'=>"Années Scolaire",
            "active"=>"Les Années Scolaire",
            "item"=>"Ajouter une Année Scolaire"
        ],
        'button'=>[
            'valid'=>"Enregister",
            'reset'=>"Annuler",
            'edit'=>"Editer",
            "delete"=>"Supprimer",
            "add_matiere"=>"Ajouter une Matiere"
        ],
        'column'=>[
            'libelle'=>"Libelle",
            'description'=>"Description de la Matiere",
            'fin'=>"Date de Fin",
            'current_status'=>"Statut Actuel",
            'status'=>"Statut",
            'added_by'=>"Ajoutée par",
            'actions'=>"Actions",
        ],
        'field'=>[
            'libelle'=>"Libelle",
            'libelle_placeholder'=>"Libelle de la Matière",
            'description'=>"Description",
            'description_placeholder'=>"Description de la Matière",
        ],
        "flash"=>[
            'insert_success'=>"La Matière est ajoutée avec succès.",
            'update_success'=>"La Matière est mise à jour avec succès.",
            'delete_success'=>"La Matière a été supprimée avec succès.",
        ],
        "status"=>[
            'active'=>"En cours",
            'past'=>"Ecoulée",
            "next"=>"Prochaine"
        ]
    ],
    'annees'   => [
        'header'=>[
            'title'=>"Années Scolaire",
            "active"=>"Les Années Scolaire",
            "item"=>"Ajouter une Année Scolaire"
        ],
        'button'=>[
            'valid'=>"Enregister les données",
            'reset'=>"Annuler",
            'edit'=>"Editer",
            "delete"=>"Supprimer",
            "add_year"=>"Ajouter une Année Scolaires"
        ],
        'column'=>[
            'libelle'=>"Libelle",
            'debut'=>"Date de Debut",
            'fin'=>"Date de Fin",
            'current_status'=>"Statut Actuel",
            'status'=>"Statut",
            'added_by'=>"Ajoutée par",
            'actions'=>"Actions",
        ],
        'field'=>[
            'libelle'=>"Libelle de l'Année Scolaire",
            'date_debut'=>"Date de Debut",
            'date_fin'=>"Date de fin"
        ],
        "flash"=>[
            'insert_success'=>"Année Scolaire ajoutée avec succès.",
            'update_success'=>"Année Scolaire modifiée avec succès.",
        ],
        "status"=>[
            'active'=>"En cours",
            'past'=>"Ecoulée",
            "next"=>"Prochaine"
        ]
    ],
    'sliders'   => [
        'header'=>[
            'index'=>[
                'title'=>"Les Sliders du Site",
                "active"=>"Les Sliders",
                "item"=>"Nouvel Slider"
            ],
            'create'=>[
                'title'=>"Les Sliders du Site",
                "active"=>"Les Années Scolaire",
                "item"=>"Aller la page d'accueil"
            ],
        ],
        'button'=>[
            'valid'=>"Enregister les données",
            'reset'=>"Annuler",
            'edit'=>"Editer",
            "delete"=>"Supprimer",
            "add_year"=>"Ajouter une Année Scolaires"
        ],
        'column'=>[
            'libelle'=>"Libelle",
            'debut'=>"Date de Debut",
            'fin'=>"Date de Fin",
            'current_status'=>"Statut Actuel",
            'status'=>"Statut",
            'added_by'=>"Ajoutée par",
            'actions'=>"Actions",
        ],
        'field'=>[
            'libelle'=>"Libelle de l'Année Scolaire",
            'date_debut'=>"Date de Debut",
            'date_fin'=>"Date de fin"
        ],
        "flash"=>[
            'insert_success'=>"Année Scolaire ajoutée avec succès.",
            'update_success'=>"Année Scolaire modifiée avec succès.",
        ],
        "status"=>[
            'active'=>"En cours",
            'past'=>"Ecoulée",
            "next"=>"Prochaine"
        ]
    ],
    'preinscriptions'   => [
        'header'=>[
            'index'=>[
                'title'=>"Les Pré-Inscriptions",
                "active"=>"Liste des Pré-Inscriptions",
                "item"=>"Nouvel Slider"
            ],
            'create'=>[
                'title'=>"Les Sliders du Site",
                "active"=>"Les Années Scolaire",
                "item"=>"Aller la page d'accueil"
            ],
        ],
        'button'=>[
            'valid'=>"Enregister les données",
            'reset'=>"Annuler",
            'edit'=>"Editer",
            "delete"=>"Supprimer",
            "add_year"=>"Ajouter une Année Scolaires"
        ],
        'column'=>[
            'libelle'=>"Libelle",
            'debut'=>"Date de Debut",
            'fin'=>"Date de Fin",
            'current_status'=>"Statut Actuel",
            'status'=>"Statut",
            'added_by'=>"Ajoutée par",
            'actions'=>"Actions",
        ],
        'field'=>[
            'libelle'=>"Libelle de l'Année Scolaire",
            'date_debut'=>"Date de Debut",
            'date_fin'=>"Date de fin"
        ],
        "flash"=>[
            'insert_success'=>"Année Scolaire ajoutée avec succès.",
            'update_success'=>"Année Scolaire modifiée avec succès.",
        ],
        "status"=>[
            'active'=>"En cours",
            'past'=>"Ecoulée",
            "next"=>"Prochaine"
        ]
    ],
    'temoignages'   => [
        'header'=>[
            'index'=>[
                'title'=>"Les Témoignages",
                "active"=>"Liste des Témoignages",
                "item"=>"Nouveau Témoignage"
            ],
            'create'=>[
                'title'=>"Les Sliders du Site",
                "active"=>"Les Années Scolaire",
                "item"=>"Aller la page d'accueil"
            ],
        ],
        'button'=>[
            'valid'=>"Enregister les données",
            'reset'=>"Annuler",
            'edit'=>"Editer",
            "delete"=>"Supprimer",
            "add_year"=>"Ajouter une Année Scolaires"
        ],
        'column'=>[
            'libelle'=>"Libelle",
            'debut'=>"Date de Debut",
            'fin'=>"Date de Fin",
            'current_status'=>"Statut Actuel",
            'status'=>"Statut",
            'added_by'=>"Ajoutée par",
            'actions'=>"Actions",
        ],
        'field'=>[
            'libelle'=>"Libelle de l'Année Scolaire",
            'date_debut'=>"Date de Debut",
            'date_fin'=>"Date de fin"
        ],
        "flash"=>[
            'insert_success'=>"Année Scolaire ajoutée avec succès.",
            'update_success'=>"Année Scolaire modifiée avec succès.",
        ],
        "status"=>[
            'active'=>"En cours",
            'past'=>"Ecoulée",
            "next"=>"Prochaine"
        ]
    ],

];
