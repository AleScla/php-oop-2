<?php
require_once __DIR__.'/classes.php';
$cane = new Razza('Cane');
$gatto = new Razza ('Gatto');
// prodotti per cani
$GiocoCane = new Gioco (9.99, 'https://www.piccolozooshop.com/1387-home_default/imac-osso-small-large-foam-gioco-per-cane-.jpg', 'Gioco per cane', $cane, 'Plastica', 'no', 'si');
$CiboCane = new Cibo (15.50, 'https://www.nutrixpiu.it/wp-content/uploads/2018/09/CANI-DA-SEGUITA_15KG-731x1024.png','Cibo per cane', $cane, 'Carne di pollo, verdure miste' , 'grossa', 15);
$CucciaCane = new Cuccia (19.99, 'https://static.zoomalia.com/prod_img/112/xl_4529431c87f273e507e6040fcb07dcb45091548319881.jpg', 'Cuccia per cane', $cane, 'Stoffa', 'Grande', 'Cuccia con tettuccio');
// prodotti per gatti
$GiocoGatto = new Gioco (9.99, 'https://m.media-amazon.com/images/I/61uripFAESL.jpg', 'Gioco per gatto', $gatto, 'Plastica', 'si', 'si');
$CiboGatto = new Cibo (15.50, 'https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1700340160/products/pim/5900951283734_B1_ITA/whiskas-croccantini-per-gatti-adulti-con-tonno','Cibo per gatto', $gatto, 'Tonno' , 'piccola', 300);
$CucciaGatto = new Cuccia (19.99, 'https://m.media-amazon.com/images/I/71hK+WBbldL._AC_UF894,1000_QL80_.jpg', 'Cuccia per gatto', $gatto, 'Stoffa', 'Grande', 'Cuccia senza tettuccio');

$Products = [
    $GiocoCane,
    $CiboCane,
    $CucciaCane,
    $GiocoGatto,
    $CiboGatto,
    $CucciaGatto
];