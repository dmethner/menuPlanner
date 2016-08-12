<?php
return [
    'weight' => [
        'mg'  => 'Milligramm',
        'g'   => 'Gramm',
        'kg'  => 'Kilogramm',
        't'   => 'Tonne',
        // non defined mass
        'pfd' => 'Pfund',
        'Sc'  => 'Scheibe', // 25-30 g

        // american
        'oz'  => 'Unze', // 28,35 g
        'lb'  => 'Pfund', // 454 g
    ],
    'volume' => [
        'ml'  => 'Milliliter',
        'cl'  => 'Centiliter',
        'cm3' => 'Kubikcentimeter',
        'l'   => 'Liter',
        'dm3' => 'Kubikdezimeter', // is liter
        'm3'  => 'Kubikmeter',
        // non defined volumes
        'Tr'  => 'Tropfen', // = 1/15 ml
        'Sp'  => 'Spritzer', // = 2-5 Tr = 2/15 - 5/15 ml
        'Sch' => 'Schuss', // ~ 1 ml
        'Pr'  => 'Prise', // hold something between Thumb and Index Finger
        'Msp' => 'Messerspitze', // 1-3 Pr,
        'TL'  => 'Teelöffel', // 5 ml,
        'EL'  => 'Esslöffel', // 15 ml
        'Tas' => 'Tasse', // 200 ml
        // Handvoll
        'Bd'  => 'Bund', // ???

        // american
        'fl'     => 'Flüssigunze', // 28,4 ml
        'fl.oz.' => 'Flüssigunze', // 28,4 ml
        'pt' => 'Pint', // 470 ml
    ],
    'length' => [
        'mm' => 'Millimeter',
        'cm' => 'Centimeter',
        'm'  => 'Meter',
        'km' => 'Kilometer'
    ],
    'time' => [
        's' => 'Sekunde',
        'm' => 'Minute',
        'h' => 'Stunde',
        'd' => 'Tag',
        'M' => 'Monat', // non standard
        'a' => 'Jahr',
    ]];