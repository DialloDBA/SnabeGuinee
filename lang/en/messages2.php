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
    'sidebar'=>[
        'dashboard'=>"Dashbaord",
        'eleves'=>[
            'title'=>"Students",
        ],
        'classes'=>[
            'title'=>"Classroom",
        ],
        'inscriptions'=>[
            'title'=>"Inscriptions",
        ],
        'notes'=>[
            'title'=>"Scores",
        ],
    ],

    'annees'   => [
        'header'=>[
            'title'=>"School Year",
            "active"=>"All School Year",
            "item"=>"Add new School Year"
        ],
        'button'=>[
            'valid'=>"Save the data",
            'reset'=>"Cancel",
            'edit'=>"Edit",
            "delete"=>"Delete",
            'add_year'=>"Add new School Year"
        ],
        'column'=>[
            'libelle'=>"Libel",
            'debut'=>"Begin Date",
            'fin'=>"End Date",
            'current_status'=>"Current Status",
            'status'=>"Status",
            'added_by'=>"Added By",
            'actions'=>"Actions",
        ],
        'field'=>[
            'libelle'=>"Libel of school Year",
            'date_debut'=>"Begining Date",
            'date_fin'=>"End Date"
        ],
        "flash"=>[
            'insert_success'=>"School Year added successfuly.",
            'update_success'=>"School Year updated successfuly.",
        ],
        "status"=>[
            'active'=>"active year",
            'past'=>"Closed Year",
            "next"=>"Next Year"
        ],
    ],
];
