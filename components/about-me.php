<?php include('lang.php'); ?>

<div class="main-box-about-me">

    <div class="box-title-abme">
        <h2 class="title-abme">
            <?php echo $lang === 'en' ? "About Me" : "Sobre Mi"; ?>
        </h2>
    </div>

    <div class="box-about-me">

        <div class="options-abme">
            <ul id="about-tabs">
                <li>
                    <button data-tab="profile"><?php echo $lang === 'en' ? "Profile" : "Perfil"; ?></button>
                </li>
                <li>
                    <button data-tab="skills"><?php echo $lang === 'en' ? "Skills" : "Habilidades"; ?></button>
                </li>
                <li>
                    <button data-tab="experience"><?php echo $lang === 'en' ? "Experience" : "Experiencia"; ?></button>
                </li>
                <li>
                    <button data-tab="education"><?php echo $lang === 'en' ? "Education" : "Educación"; ?></button>
                </li>
                <li>
                    <button data-tab="resume"><?php echo $lang === 'en' ? "Resume and Socials" : "Curriculum y Sociales"; ?></button>
                </li>
            </ul>
        </div>

        <div class="desc-abme">

            <div class="tab-content" id="profile">
                <p>
                    <?php echo $lang === 'en' 
                        ? "I am Martín, a <span class='negrita-abme'>Full Stack Developer</span> passionate about modern web development. I enjoy building scalable and efficient applications, combining <span class='negrita-abme'>interactive front-end</span> and <span class='negrita-abme'>efficient back-end</span>." 
                        : "Soy Martín, <span class='negrita-abme'>desarrollador Full Stack</span> apasionado por el desarrollo web moderno. Me gusta crear aplicaciones escalables y eficientes, combinando <span class='negrita-abme'>front-end interactivo</span> y <span class='negrita-abme'>back-end eficiente</span>."; ?>
                </p>
                <p>
                    <?php echo $lang === 'en' 
                        ? "I work with tools and technologies like <span class='negrita-abme'>HTML, CSS, SCSS, JavaScript, PHP, and MySQL</span>, always applying <span class='negrita-abme'>best practices, clean code, and user-focused development</span>." 
                        : "Trabajo con herramientas y tecnologías como <span class='negrita-abme'>HTML, CSS, SCSS, JavaScript, PHP y MySQL</span>, siempre aplicando <span class='negrita-abme'>buenas prácticas, clean code y enfoque en el usuario</span>."; ?>
                </p>
                <p>
                    <?php echo $lang === 'en' 
                        ? "I am continuously expanding my knowledge, currently learning <span class='negrita-abme'>API REST, React, Node.js</span> and other modern web tools." 
                        : "Además, estoy en constante expansión de mis conocimientos, actualmente estudiando <span class='negrita-abme'>API REST, React, Node.js</span> y otras herramientas modernas de desarrollo web."; ?>
                </p>
                <p>
                    <?php echo $lang === 'en' 
                        ? "My goal is to contribute to projects that combine <span class='negrita-abme'>innovation, quality, and efficiency</span>, delivering solutions with real user impact." 
                        : "Mi objetivo es contribuir a proyectos que combinen <span class='negrita-abme'>innovación, calidad y eficiencia</span>, entregando soluciones con impacto real en los usuarios."; ?>
                </p>
            </div>

            <div class="tab-content" id="skills">
                <h3><?php echo $lang === 'en' ? "Programming Languages / Frameworks" : "Lenguajes de programación / Frameworks"; ?></h3>
                <i class="fa-brands fa-html5"></i>
                <i class="fa-brands fa-css3"></i>
                <i class="fa-brands fa-js"></i>
                <i class="fa-brands fa-php"></i>
                <i class="fa-solid fa-database"></i>

                <h3><?php echo $lang === 'en' ? "Tools and Technologies" : "Herramientas y Tecnologías"; ?></h3>
                <i class="fa-brands fa-github"></i>
                <i class="devicon-vscode-plain"></i>
                <i class="fa-brands fa-node"></i>

                <h3><?php echo $lang === 'en' ? "Currently Learning" : "Herramientas que estoy aprendiendo"; ?></h3>
                <i class="fa-brands fa-react"></i>
                <i class="devicon-laravel-original"></i>
            </div>

            <div class="tab-content" id="experience">
                <h3 class="title-experience"><?php echo $lang === 'en' ? "Full Stack Developer - Madefroni" : "Desarrollador Full Stack - Madefroni"; ?></h3>
                <span class="date-madefroni">Julio 2025</span>
                <p>
                    <?php echo $lang === 'en' 
                        ? "Comprehensive development of the Madefroni web platform, including front-end, back-end in PHP/MySQL, and external API integration." 
                        : "Desarrollo integral de la plataforma web de Madefroni, abarcando front-end, back-end en PHP/MySQL e integración de APIs externas."; ?>
                </p>
                <p>
                    <?php echo $lang === 'en' 
                        ? "I continue practicing and expanding my web development skills to stay current and grow professionally." 
                        : "Actualmente continúo practicando y ampliando mis habilidades en desarrollo web para mantenerme actualizado y crecer profesionalmente."; ?>
                </p>
            </div>

            <div class="tab-content" id="education">
                <h3><?php echo $lang === 'en' ? "Diplomatura in Full Stack Web Development" : "Diplomatura en Programación Web Full Stack"; ?></h3>
                <div class="spans-education">
                    <span>Universidad Tecnológica Nacional (UTN)</span>
                    <span class="date-madefroni">2025 - Actualidad</span>
                    <a href="https://drive.google.com/drive/folders/1KnYoxyjPOCdAG1lEx9h2P_C5-e9clWie?usp=sharing" target="_blank"">
                        <?php echo $lang === 'en'
                            ? "Certifications↗︎"
                            : "Certificados↗︎"
                        ?>
                    </a>
                </div>

                <h3><?php echo $lang === 'en' ? "Software Engineering" : "Ingeniería en Software"; ?></h3>
                <div class="spans-education">
                    <span>Universidad Siglo 21</span>
                    <span class="date-madefroni">2024</span>
                    <p class="education-siglo21">
                        <?php echo $lang === 'en' 
                            ? "I plan to resume and complete this degree once I start my professional career, combining work experience with studies." 
                            : "Actualmente planeo retomar y completar la carrera una vez que inicie mi desarrollo profesional, combinando la experiencia laboral con los estudios."; ?>
                    </p>
                </div>

                <h3><?php echo $lang === 'en' ? "Systems Engineering" : "Ingeniería en Sistemas"; ?></h3>
                <div class="spans-education">
                    <span>Universidad Tecnológica Nacional (UTN)</span>
                    <span class="date-madefroni">2021-2023</span>
                </div>
            </div>

            <div class="tab-content" id="resume">
                <div class="prueba-abme">
                    <span><?php echo $lang === 'en' ? "LinkedIn" : "LinkedIn"; ?></span>
                    <a href="https://www.linkedin.com/in/martin-mehrwaldt-13548820b/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                </div>

                <div class="prueba-abme">
                    <span><?php echo $lang === 'en' ? "GitHub" : "GitHub"; ?></span>
                    <a href="https://github.com/martinmehrwaldt" target="_blank"><i class="fa-brands fa-github"></i></a>
                </div>

                <div class="pruena-abme">
                    <span><?php echo $lang === 'en' ? "Curriculum Vitae" : "Curriculum Vitae"; ?></span>
                    <a href="https://drive.google.com/file/d/193ZelO1ebvgjGjSKNx6JrN7UvXVanoEr/view?usp=sharing" target="_blank"><i class="fa-solid fa-user-tie"></i></a>
                </div>

                <div class="prueba-abme">
                    <span><?php echo $lang === 'en' ? "Email" : "Correo"; ?></span>
                    <a href="mailto:mmehrwaldt@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                </div>

                <div class="prueba-abme">
                    <span><?php echo $lang === 'en' ? "WhatsApp" : "WhatsApp"; ?></span>
                    <a href="https://wa.me/5493518032679" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>

                <div class="prueba-abme">
                    <span><?php echo $lang === 'en' ? "Instagram" : "Instagram"; ?></span>
                    <a href="https://instagram.com/martinmehrwaldt" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
