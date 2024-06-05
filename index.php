<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$titulo = "BPMagency"; //Esto establece el titulo de la pagina actual, esta en todas
$directorio = "inicio";         //Variable que establece el nombre del directorio
$fichero = basename(__FILE__);  //Esta funcion, te da el nombre y extension del fichero actual 
//Este if comprueba donde estamos situados, si es index.php llama al fichero de funciones
//desde una ruta, si es cualquier otro fichero, lo llama desde otra ruta
if ($fichero == "index.php") {
    include_once("php/funciones_plantillas.php");
} else {
    include_once("../php/funciones_plantillas.php");
}
crearHeader($directorio, $titulo); //LLama a la funcion que crea la plantilla del header en todas las paginas
crearMenu($directorio);     //LLama a la funcion que crea la plantilla del menu en todas las paginas
?>

<!--   Contenedor Principal    -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <?php
                crearSlider();  //LLama a la funcion que crea el slider
                ?>
                <div class="container-fluid">
                    <div class="row" id="articulos">
                        <div class="col-md-4">
                            <div class="panel-body introduccion">
                                <p><span class="titulo">Bienvenidos a BPMagency</span></p>

                                <p><span class="titulo1">SI QUIERES LLEVAR TU LOCAL DE OCIO AL SIGUIENTE NIVEL, ESTA ES TU PAGINA</span></p>
                            </div>
                            <div class="panel-body">
                                <p>En BPMagency nos especializamos en crear y gestionar páginas web y redes sociales para locales de ocio nocturno. Nuestro objetivo es ayudarte a destacar en el mundo digital, atrayendo más clientes y aumentando tu visibilidad online. Con nuestros servicios de diseño web, gestión de eventos y estrategias en redes sociales, llevamos tu negocio al siguiente nivel. Descubre cómo podemos transformar tu presencia digital y ofrecer una experiencia única a tus clientes.
                                y mucho mas...<br><br> <button type="button" class="boton btn btn-default btn-success" onclick="boton(this)">Leer más</button></p><br>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel-body introduccion">
                                <p><span class="titulo">Página Web a Medida</span></p>

                                <p><span class="titulo1">Diseño Personalizado, Funcionalidad Adaptada
, Optimización SEO, Responsive Design, Actualizaciones y Soporte</span></p>
                            </div>
                            <div class="panel-body"><img src="./img/mac.png" alt="mac" class="imageninicio img-responsive"><br>
                                <p>Creamos un diseño único que refleje la identidad y el estilo de tu local, asegurando una experiencia de usuario excepcional.
                                Integramos funciones específicas como gestión de reservados, entradas para eventos y listas personalizadas para satisfacer tus necesidades. 
                                Mejoramos tu visibilidad en los motores de búsqueda para atraer más visitantes a tu sitio web, impulsando tu negocio.
                                Aseguramos que tu web se vea y funcione perfectamente en todos los dispositivos, desde móviles hasta ordenadores de escritorio.
                                Te ofrecemos mantenimiento continuo y soporte técnico para que tu sitio web siempre esté al día y en perfecto funcionamiento. <br><br> <button type="button" class="boton btn btn-default btn-success" onclick="boton1(this)">Leer más</button></p><br>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel-body introduccion">
                                <p><span class="titulo">MAS INFORMACIÓN</span></p>
                            </div>
                            <div class="panel-body">
                                <p><img src="./img/canva.png" alt="Imagen canva" class="ranking img-responsive"><img src="./img/psd.png" alt="psd" class="ranking img-responsive"> <span class="titulo1">Diseño y Carteles para tus Eventos</span></p> 
                                <p>Diseño de Carteles Creamos carteles impactantes y profesionales para promocionar tus eventos y atraer a más clientes. Material Publicitario
                                            Diseñamos flyers, banners y otros materiales publicitarios personalizados para tu negocio.

                                            Gestión de Redes Sociales
                                            Publicamos y promovemos tus eventos en las redes sociales más populares, maximizando tu alcance e interacción con el público.

                                            Fotografía y Vídeo
                                            Ofrecemos servicios de fotografía y vídeo para capturar y promocionar tus eventos, creando contenido visual atractivo y de alta calidad.

                                            Campañas de Marketing
                                            Diseñamos y ejecutamos campañas de marketing específicas para tus eventos, asegurando una mayor participación e interés del público.

</p>

                                <hr id="linea">

                                <p><img src="./img/kit.png" alt="Imagen kit" class="ranking"> <span class="titulo1">Kit Digital - ¡Aprovecha tu Kit y Obtén tu Web Gratis!</span>
                                <p>Subvención del Kit Digital
Aprovecha las ayudas del Kit Digital para obtener una página web profesional sin coste para tu negocio.

Asesoramiento Personalizado
Te guiamos en el proceso de solicitud del Kit Digital y te asesoramos sobre las mejores opciones para tu negocio, optimizando los beneficios.

Diseño y Desarrollo Completo
Creamos tu web desde cero, incluyendo todas las funcionalidades necesarias para la gestión de tu local de ocio nocturno.

Sin Costes Ocultos
Obtén tu web gratis sin sorpresas ni gastos adicionales, con total transparencia.

Mejora de tu Presencia Online
Con una web profesional y bien diseñada, aumentarás tu visibilidad y atraerás a más clientes, potenciando el crecimiento de tu negocio.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
crearPie();  //LLama a la funcion que crea la plantilla del footer en todas las paginas
?>   
