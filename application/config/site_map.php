<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*** [!] Legacy Config ***/
$config['site_map'] = array(
        'surabaya-raya'      => 1, // parent
        'nasional'           => 2,
        'internasional'      => 3,
        'regional'           => 4,
        'persebaya'          => 5,
        'sport'              => 6, // parent
        'gaya-hidup'         => 7, // parent
        'tren'               => 8, // parent
        'inovasi'            => 9,
        'netizen'            => 10,
        'surabaya'           => 11, 
        'mojokerto'          => 12,
        'gresik'             => 13,
        'jombang'            => 14,
        'sidoarjo'           => 15, 
        'kuliner'            => 16, 
        'destinasi'          => 17,
        'modern'             => 18, 
        'hot-news'           => 19, // parent
        'unik'               => 20,
        'sepak-bola'         => 21,
        'arema'              => 22,
        'madura-united'      => 23,
        'otomotif'           => 24,
        'gadget'             => 25,
        'fashion'            => 26,
        'wisata'             => 27 // parent
        
);

$config['site_map_child'] = array(
        'nasional'           => 2,
        'internasional'      => 3,
        'regional'           => 4,
        'persebaya'          => 5,
        'inovasi'            => 9,
        'netizen'            => 10,
        'surabaya'           => 11, 
        'mojokerto'          => 12,
        'gresik'             => 13,
        'jombang'            => 14,
        'sidoarjo'           => 15, 
        'kuliner'            => 16, 
        'destinasi'          => 17,
        'modern'             => 18, 
        'unik'               => 20,
        'sepak-bola'         => 21,
        'arema'              => 22,
        'madura-united'      => 23,
        'otomotif'           => 24,
        'gadget'             => 25,
        'fashion'            => 26
);

$config['site_map_parent'] = array(
        'surabaya-raya'      => 1, // parent
        'sport'              => 6, // parent
        'gaya-hidup'         => 7, // parent
        'tren'               => 8, // parent
        'hot-news'           => 19, // parent
        'wisata'             => 27 // parent
);


$config['category_name'] = array(
        1     =>  'surabaya-raya', // parent
        2     => 'nasional',
        3     => 'internasional',
        4     => 'regional',
        5     => 'persebaya',
        6     => 'sport', // parent
        7     => 'gaya-hidup', // parent
        8     => 'tren', // parent
        9     => 'inovasi',
        10    => 'netizen',
        11    => 'surabaya', 
        12    => 'mojokerto',
        13    =>  'gresik',
        14    => 'jombang',
        15    => 'sidoarjo', 
        16    => 'kuliner', 
        17    => 'destinasi',
        18    => 'modern', 
        19    => 'hot-news', // parent
        20    => 'unik',
        21    => 'sepak-bola',
        22    => 'arema',
        23    => 'madura-united',
        24    => 'otomotif',
        25    => 'gadget',
        26    => 'fashion',
        27    => 'wisata', // parent
        'foto'  => 'foto',
        'video' => 'video'
);

$config['site_domain'] = array();

/* End of file site_map.php */
/* Location: ./application/config/site_map.php */
