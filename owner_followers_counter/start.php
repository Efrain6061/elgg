<?php 
/**
 * Start file for the Owner Block Followers Plugin By Efrain J Valentin at Puerto Rico
 */

/**
 * Initializes the Owner Block Followers Plugin By Efrain J Valentin at Puerto Rico
 * 
 * @return void
 */
function owner_block_init() {
	elgg_extend_view("css/elgg", "css/counter.css");
}

elgg_register_event_handler('init', 'system', 'owner_block_init');
elgg_register_event_handler('init', 'system', 'profile_init', 1);
