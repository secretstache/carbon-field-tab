<?php
use Carbon_Fields\Carbon_Fields;
use Carbon_Field_Tab\Tab_Field;

define( 'Carbon_Field_Tab\\DIR', __DIR__ );

Carbon_Fields::extend( Tab_Field::class, function( $container ) {
	return new Tab_Field( $container['arguments']['type'], $container['arguments']['name'], $container['arguments']['label'] );
} );