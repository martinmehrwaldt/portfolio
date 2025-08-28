<?php include('lang.php'); ?>

<header>

    <form action="" method="POST" class="language">
        <label for="lang">
            <select name="lang" id="lang">
                <option value="en" <?php if($lang=='en') echo 'selected'; ?>>English</option>
                <option value="es" <?php if($lang=='es') echo 'selected'; ?>>Español</option>
            </select>
            <button type="submit"><?php echo $buttonText; ?></button>
        </label>
    </form>

    <div id="cabecera">

        <h1 id="mainTitle">
            Martín Mehrwaldt
        </h1>

        <span>
            <?php echo $lang === 'en' ? "Let's work together" : "Trabajemos juntos"; ?>
        </span>

        <div id="socials-header">
            <a href="https://github.com/martinmehrwaldt" target="_blank">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/martin-mehrwaldt-13548820b/" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mmehrwaldt@gmail.com" target="_blank">
                <i class="fa-solid fa-envelope"></i>
            </a>
            <a href="https://wa.me/5493518032679" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>

    </div>

    <div class="firstIndexBox">
        <div class="textBoxIndexBox">

            <h3 id="logan">
                <?php 
                    echo $lang === 'en' ? '"If you can imagine it, you can build it"' 
                                        : '"Si lo puedes imaginar, lo puedes construir"'; 
                ?>
            </h3>

            <p class="firstDescription">
                <?php 
                    echo $lang === 'en' ? "Hello, I'm Martín Mehrwaldt, a junior web developer from Argentina."
                                        : "Hola, soy Martín Mehrwaldt, un desarrollador web junior de Argentina.";
                ?>
            </p>

            <p class="firstDescription">
                <?php 
                    echo $lang === 'en' 
                        ? "I have experience developing full-stack web applications, including front-end and back-end, using PHP, MySQL, HTML, CSS, SCSS, and JavaScript."
                        : "Tengo experiencia desarrollando aplicaciones web full-stack, tanto front-end como back-end, usando PHP, MySQL, HTML, CSS, SCSS y JavaScript.";
                ?>
            </p>

            <p class="firstDescription">
                <?php 
                    echo $lang === 'en' 
                        ? "I have built production projects, such as a web application for a well-known company, featuring a catalog, shopping cart, and administration panel."
                        : "He construido proyectos en producción, como una aplicación web para una empresa reconocida, con catálogo, carrito de compras y panel de administración.";
                ?>
            </p>

        </div>

        <div class="imageIndexBox">
            <img src="img/firstImg.png" alt="codingImage">
        </div>

    </div>

</header>
