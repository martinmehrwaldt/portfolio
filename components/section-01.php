<?php include('lang.php') ?>

<section id="section-01">

    <div id="box-title-s01">

        <h3 id="title-s01">

            <?php echo $lang === 'en' ?  "My work" : "Mi trabajo"; ?>

        </h3>
        
    </div>

    <div id="work">
        <?php
        $works = [

        [
            'img' => 'fondo-madefroni.png',
            'title' => ['en' => 'Madefroni Website', 'es' => 'Sitio web Madefroni'],

            'description' => [
                'en' => 'Users can browse products without logging in, and after registering, add items to the cart, adjust quantities, and complete purchases via cash or card. Upon checkout, an automatic WhatsApp message is sent to the sales manager. The admin panel allows dynamic catalog management, all connected to a MySQL database and running online 24/7.',
                'es' => 'Los usuarios pueden navegar por los productos sin iniciar sesión y, después de registrarse, agregar artículos al carrito, ajustar cantidades y completar compras en efectivo o con tarjeta. Al finalizar, se envía un mensaje automático por WhatsApp al encargado de ventas. El panel de administración permite gestionar el catálogo dinámicamente, todo conectado a una base de datos MySQL y disponible online 24/7.'
            ],
            
            'gh' => 'https://github.com/martinmehrwaldt/first-professional-practice',
            'lk' => 'https://www.linkedin.com/in/martin-mehrwaldt-13548820b/',
            'url' => 'https://m-madefroni.wuaze.com',

            'tech' => '<i class="fa-brands fa-html5"></i>
            <i class="fa-brands fa-css3"></i>
            <i class="fa-brands fa-js"></i>
            <i class="fa-brands fa-php"></i>
            <i class="fa-solid fa-database"></i>'
        ],

        [
            'img' => 'coming-soon.jpg',
            'title' => ['en' => 'What is next?', 'es' => '¿Qué sigue?'],

            'description' => [
                'en' => 'Im working on new projects with PHP, MySQL, HTML, CSS, and JS (blogs, landing pages, and APIs), along with learning modern frameworks to expand my developer toolkit.',
                'es' => 'Estoy trabajando en nuevos proyectos con PHP, MySQL, HTML, CSS y JS (blogs, landing pages y APIs), además de aprender frameworks modernos para ampliar mi kit de herramientas como desarrollador.'
            ],

            'gh' => 'https://github.com/martinmehrwaldt',
            'lk' => 'https://www.linkedin.com/in/martin-mehrwaldt-13548820b/',
            'url' => 'https://www.martinmehrwaldt.com',
        ]
        ];

?>

        <?php foreach($works as $work): ?>

        <article id="article-works">

            <div id="box-works">

                <div id="img-works">
                    <a href="<?php echo $work['url']; ?>" target="_blank">
                        <img src="img/<?php echo $work['img']; ?>" alt="<?php echo $work['title'][$lang]; ?>">
                    </a>
                </div>

                <div id="title-box">
                    <h3 id="title-works"><?php echo $work['title'][$lang]; ?></h3>
                </div>

                <div id="description-box">
                    <?php echo $work['description'][$lang]; ?>
                </div>

                <?php if (!empty($work['tech'])): ?>
                    <div id="techs-box">

                        <span><?php echo $lang === 'es' ? 'Construido con' : 'Built with'; ?>
                        </span>

                        <div id="techs"><?php echo $work['tech']; ?></div>
                    </div>
                <?php endif; ?>

                <div id="links-box">
                    <span>Links</span>

                    <div id="links">

                        <a href="<?php echo $work['gh']; ?>" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>

                        <a href="<?php echo $work['lk']; ?>" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>

                    </div>
                </div>
            </div>
        </article>

        <?php endforeach; ?>

    </div>

</section>