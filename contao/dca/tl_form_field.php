<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
	->addField('placeholder', 'fconfig_legend', PaletteManipulator::POSITION_APPEND)
	->applyToPalette('select', 'tl_form_field')
;
