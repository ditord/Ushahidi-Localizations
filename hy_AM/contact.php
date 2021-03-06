﻿<?php

$lang = array
(
	'contact_name' => array
	(
		'required'		=> 'Մուտքագրեք անունը:',
		'length'        => 'Անվան դաշտը պետք է պարունակի առնվազն 3 նիշ:'
	),

	'contact_subject' => array
	(
		'required'		=> 'Մուտքագրեք վերնագիրը:',
		'length'        => 'Վերնագրի դաշտը պետք է պարունակի առնվազն 3 նիշ: '
	),
	
	'contact_message' => array
	(
		'required'        => 'Մուտքագրեք հաղորդագրությունը:'
	),
	
	'contact_email' => array
	(
		'required'    => 'Մուտքագրեք էլ-փոստի հասցեն, կամ հանեք վանդակից համապատասխան նշումը:',
		'email'		  => 'Էլ-փոստի դաշտում նշված հասցեն ճիշտ չէ:',
		'length'	  => 'Էլ-փոստի դաշտում կարող եք մուտքագրել առնվազն 4 և առավելագույնը` 64 նիշ:'
	),
	
	'captcha' => array
	(
		'required' => 'Մուտքագրեք պաշտպանության կոդը:', 
		'default' => 'Մուտքագրեք ճիշտ պաշտպանության կոդ:'
	)
	
);
