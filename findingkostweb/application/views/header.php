<?php
$meta = [
[
    'name'    => "viewport", 
    'content' => "width=device-width, initial-scale=1.0"
],
[
    'name'    => "description", 
    'content' => "Penghubung Antara Pemilik Kos Dengan Pencari Kos"
],
[
    'name'    => "author",
    'content' => "FindingKost"
]
];
$link = [
[
    'href'  => 'assets/images/favicon.gif',
    'rel'   => 'icon',
    'width' => '100px',
    'type'  => 'image/gif',
],
[
    'href'  => 'assets/css/materialize.min.css',
    'rel'   => 'stylesheet',
    'type'  => 'text/css',
    'media' => 'screen,projection'
],
[
    'href'  => 'assets/css/style.css',
    'rel'   => 'stylesheet',
    'type'  => 'text/css',
]
];
echo meta($meta);
echo '<title>{title}</title>';
echo '';
foreach ($link as $href) {
    echo link_tag($href);
}
