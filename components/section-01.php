<section id="section-01">

    <div id="box-title-s01">
        <h3 id="title-s01">
            My Work
        </h3>
    </div>

    <div id="work">
        <?php
        
        $works = array(
            array(
            'img' => 'fondo-madefroni.png',
            'title' => 'Madefroni Website',

            'description' => 'Users can browse products without logging in, and after registering, add items to the cart, adjust quantities, and complete purchases via cash or card. Upon checkout, an automatic WhatsApp message is sent to the sales manager. The admin panel allows dynamic catalog management, all connected to a MySQL database and running online 24/7.',

            'gh' => 'https://github.com/martinmehrwaldt/first-professional-practice', 'lk' => 'https://www.linkedin.com/in/martin-mehrwaldt-13548820b/',
            'url' => 'https://m-madefroni.wuaze.com')
        );

        for($i=0; $i<count($works); $i++) {

        ?>

        <article id="article-works">

            <div id="box-works">

                <div id="img-works">

                    <a href="<?php echo $works[$i]['url']; ?>" target="_blank">

                        <img src="img/<?php echo $works[$i]['img']; ?>" alt="madefroni website">

                    </a>

                </div>

                <div id="title-box">

                    <h3 id="title-works">

                        <?php echo $works[$i]['title']; ?>

                    </h3>

                </div>

                <div id="description-box">

                    <?php echo $works[$i]['description']; ?>

                </div>

                <div id="links-box">

                    <a href="<?php echo $works[$i]['gh']; ?>" target="_blank">
                        <i class="fa-brands fa-github"></i>
                    </a>

                    <a href="<?php echo $works[$i]['lk']; ?>" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>

                </div>

            </div>

        </article>

        <?php } ?>

    </div>

</section>