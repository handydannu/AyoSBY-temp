<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*** [!] Legacy Config ***/
$config['site_map'] = array(
        'news'               => 59, // parent
        'nasional'           => 65,
        'internasional'      => 66,
        'bandung'            => 64,
        'bisnis'             => 68,
        'jabar'              => 80,
        'info-grafis'        => 81,
        'komunitas'          => 60, // parent
        'event'              => 70,
        'profil'             => 71,
        'persib'             => 62, // parent
        'maung-bandung'      => 72,
        'pernak-pernik'      => 73,
        'bobotoh'            => 74,
        'unik'               => 63, // parent
        'olahraga'           => 67, // parent
        'piala-dunia-2018'   => 82,
        'sehat'              => 69, // parent
        'wisata'             => 61, // parent
        'kuliner'            => 75,
        'destinasi'          => 76,
        'belanja'            => 77,
        'fashion'            => 78,
        'hotel'              => 79,
        'netizen'            => 90 // parent
        
);

$config['site_map_child'] = array(
        'nasional'           => 65,
        'internasional'      => 66,
        'bandung'            => 64,
        'bisnis'             => 68,
        'jabar'              => 80,
        'info-grafis'        => 81,
        'event'              => 70,
        'profil'             => 71,
        'maung-bandung'      => 72,
        'pernak-pernik'      => 73,
        'bobotoh'            => 74,
        'piala-dunia-2018'   => 82,
        'kuliner'            => 75,
        'destinasi'          => 76,
        'belanja'            => 77,
        'fashion'            => 78,
        'hotel'              => 79
);

$config['site_map_parent'] = array(
        'news'               => 59,
        'komunitas'          => 60,
        'persib'             => 62,
        'unik'               => 63,
        'olahraga'           => 67,
        'sehat'              => 69,
        'wisata'             => 61,
        'netizen'            => 90
);


$config['category_name'] = array(
        59      => 'news', // parent
        65      => 'nasional' ,
        66      => 'internasional',
        64      => 'bandung',
        68      => 'bisnis',
        80      => 'jabar',
        81      => 'info-grafis',
        60      => 'komunitas', // parent
        70      => 'event',
        71      => 'profil',
        62      => 'persib', // parent
        72      => 'maung-bandung',
        73      => 'pernak-pernik',
        74      => 'bobotoh',
        63      => 'unik' , // parent
        67      => 'olahraga', // parent
        82      => 'piala-dunia-2018',
        69      => 'sehat', // parent
        61      => 'wisata', // parent
        75      => 'kuliner',
        76      => 'destinasi',
        77      => 'belanja',
        78      => 'fashion',
        79      => 'hotel',
        90      => 'netizen', // parent
        'foto'  => 'foto',
        'video' => 'video'
);

$config['site_domain'] = array();

/* End of file site_map.php */
/* Location: ./application/config/site_map.php */
