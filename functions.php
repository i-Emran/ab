<?php


require_once get_template_directory().'/lib/updater.php';

add_action('after_setup_theme', function() {

	//get_template_part('lib/Updater');
});



new Updater(
	[
		'name' => 'ab', // Theme Name.
		'repo' => 'i-Emran/ab', // Theme repository.
		'slug' => 'ab', // Theme Slug.
		'url' => 'https://github.com/i-Emran/ab', // Theme URL.
		'ver' => 1.6 // Theme Version.
	]
);
