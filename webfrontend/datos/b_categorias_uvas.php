<?php
include('a_categorias_tipos.php');

$categorias_uvas = array(
    '1' => array(
        'id' => 1,
        'nombre' => 'Malbec',
        'tipoVino' =>$categorias_tipos[3]['nombre'],  
        'descripcion' => 'Uva argentina originaria de Burdeos, está considerada la variedad insignia del país; es desde el año 2011 la más cultivada de Argentina. Destaca por su oscuro e intenso color y su explosión frutal, sus aromas tienen ecos de ciruelas, cerezas, pasas y pimienta negra, con reminiscencias de mermelada en algunos casos. Cuando se añeja en madera adquiere notas de chocolate, vainilla y café. En boca presenta mucho cuerpo por sus envolventes, sedosos y dulces taninos.',
        'activa' => TRUE
    ),
    '2' => array(
        'id' => 2,
        'nombre' => 'Bonarda',
        'tipoVino' =>$categorias_tipos[3]['nombre'],               
        'descripcion' => 'Es la segunda uva argentina tinta más cultivada tras la malbec. El vino que produce es de buen color y cuerpo, honesto y franco, con aroma de frambuesa y unas sutiles notas anisadas.',
        'activa' => TRUE
   
    ), 
    '3' => array(
        'id' => 3,
        'nombre' => 'Cabernet Sauvignon',
        'tipoVino' =>$categorias_tipos[3]['nombre'],
        'descripcion' => 'Originaria de Burdeos, presenta un color azul negruzco muy intenso. Se cultiva en todas las provincias vitivinícolas, aunque es en Mendoza donde alcanza su mayor nivel, produciendo vinos con sabores y aromas a frutas rojas, y con unos taninos dulces que proporcionan cuerpo al vino sin que llegue por ello a ser agresivo.',
        'activa' => TRUE
   
    ),
    '4' => array(
        'id' => 4,
        'nombre' => 'Merlot',
        'tipoVino' =>$categorias_tipos[3]['nombre'],
        'descripcion' => 'Uva argentina de gran potencial y reciente difusión. Sus aromas recuerdan a especias, grosellas, cedro y pimiento dulce. Sin grandes producciones, el vino resultante es delicado, de intenso paladar sin llegar a ser potente.',
        'activa' => TRUE
    ),
    '5' => array(
        'id' => 5,
        'nombre' => 'Syrah',
        'tipoVino' =>$categorias_tipos[3]['nombre'],
        'descripcion' => 'Uva de origen mediterráneo con la que se consiguen unos vinos de textura plana, color intenso y unos aromas que van desde los florales, en los jóvenes, hasta los animales y especiados en los añejos, tras su crianza en madera de roble y botella.',
        'activa' => TRUE
   
    ), 
    '6' => array(
        'id' => 6,
        'nombre' => 'Pinot Noir',
        'tipoVino' =>$categorias_tipos[3]['nombre'],
        'descripcion' => 'Uva famosa por su nobleza y antigüedad (ya era cultivada por los romanos), su color va desde el rubí hasta un rojo intenso, con unos aromas a frutas negras y rojas como la remolacha, la mora y la frambuesa. Los vinos pinot noir son ligeros, sin grandes complejidades, pero muy elegantes en boca.',
        'activa' => TRUE
    
    ),
    '7' => array(
        'id' => 7,
        'nombre' => 'Sangiovese',
        'tipoVino' =>$categorias_tipos[3]['nombre'],
        'descripcion' => 'Cepaje muy apreciado por su frescura y liviandad, los vinos sangioveses son afrutados con ciertas notas florales. Adquiere un buqué a pasas durante su envejecimiento en botella.',
        'activa' => TRUE
   
    ), 
    '8' => array(
        'id' => 8,
        'nombre' => 'Tempranillo',
        'tipoVino' =>$categorias_tipos[3]['nombre'],
        'descripcion' => 'Variedad proveniente de la región española de La Rioja, produce unos vinos intensos y sólidos, con un aroma de frutas rojas, especialmente de grosellas y ciruelas, y unas notas de frutos secos. Con el tiempo, el vino tempranillo evoluciona hacia un buqué envolvente y complejo con notas tostadas y de madera.',
        'activa' => TRUE
    
    ),
    '9' => array(
        'id' => 9,
        'nombre' => 'Sauvignon Blanc',
        'tipoVino' =>$categorias_tipos[1]['nombre'],
        'descripcion' => 'Variedad de creciente fama, herbácea, aromática, con un perfume levemente ahumado. Se vinifica en pequeños toneles de madera con unos resultados excelentes',
        'activa' => TRUE
   
    ), 
    '10' => array(
        'id' => 10,
        'nombre' => 'Semillón',
        'tipoVino' =>$categorias_tipos[1]['nombre'],
        'descripcion' => 'Variedad de uva que se desarrolla de una forma óptima en climas moderados y frescos, como los que se dan en el Alto Valle del Río Negro y en el Valle de Uco, en la provincia de Mendoza. Dependiendo de la zona, puede presentar diversos aromas, desde manzana y tierra hasta miel y frutas blancas. En boca presenta una gran personalidad y equilibrio.',
        'activa' => TRUE
    
    ),
    '11' => array(
        'id' => 11,
        'nombre' => 'Chardonnay',
        'tipoVino' =>$categorias_tipos[1]['nombre'],
        'descripcion' => 'Considerado por algunos expertos como el rey de los cepajes blancos, produce vinos complejos y aristocráticos, con unos aromas a bananas, piña y, en ocasiones, a manzanas.',
        'activa' => TRUE
   
    ), 
    '12' => array(
        'id' => 12,
        'nombre' => 'Torrontés',
        'tipoVino' =>$categorias_tipos[1]['nombre'],
        'descripcion' => 'Una de las uvas argentinas blancas más extendidas y que cuenta con un importante prestigio internacional. Son tres las variantes de esta uva: el sanjuanino y el mendocino, más adecuadas para los vinos frescos, y el riojano, con unas cualidades mejores para elaborar vinos finos, secos y afrutados a la vez. Su color es amarillo claro, aunque en ocasiones desarrolla matices verdes y dorados. De aroma floral (geranio, jazmín y rosa), su sabor muestra una acidez muy fresca.',
        'activa' => TRUE
    
    ),
    '13' => array(
        'id' => 13,
        'nombre' => 'Chenin',
        'tipoVino' =>$categorias_tipos[1]['nombre'],
        'descripcion' => 'Variedad fina y serena que produce unos vinos fáciles de beber y muy frescos. Su aroma se asemeja al de la cáscara del durazno blanco.',
        'activa' => TRUE
    
    ),
    '14' => array(
        'id' => 14,
        'nombre' => 'Riesling',
        'tipoVino' =>$categorias_tipos[1]['nombre'],
        'descripcion' => 'Cepa procedente de Alemania, no es muy abundante en Argentina. Únicamente prospera en zonas frías y altas. Sus aromas combinan notas herbáceas y cítricas con matices minerales.',
        'activa' => TRUE
   
    ), 
    '15' => array(
        'id' => 15,
        'nombre' => 'Viognier',
        'tipoVino' =>$categorias_tipos[1]['nombre'],
        'descripcion' => 'Variedad originaria de Francia que tampoco es muy abundante. Sus tonos son frutados, con unos aromas muy intensos a duraznos, melón y especias. Presenta una fuerte estructura y un final largo en boca.',
        'activa' => TRUE
    
    ), 
    '16' => array(
        'id' => 16,
        'nombre' => 'Blend',
        'tipoVino' =>$categorias_tipos[1]['nombre'],
        'descripcion' => 'Un vino de corte (o blend, o assamblage, o multivarietal) es aquel conformado por dos o más tipos de uvas, donde ninguna de ellas tiene una predominancia del 85% o más.',
        'activa' => TRUE
    
    )

);


/*fuente: https://www.vinetur.com/2020072961213/los-mejores-tipos-de-uva-argentina-para-hacer-vino.html*/

/*pruebas
echo $categorias_uvas[1]['tipoVino'];
echo $categorias_tipos[3]['nombre'];
*/

?>