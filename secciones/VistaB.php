<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Productividad en Investigación</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styles1.css">
    <link rel="stylesheet" href="../css/style-registro.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php session_start();?>
    
</head>
<body>

    <header class="encabezado1">
        <div class="contenido_encabezado1">
            <img src="../imagenes/logo-gob.svg" alt="Logo" class="small-svg">
            <nav class="listaE1">
                <ul>
                    <li><a href="https://www.gob.mx/gobierno" target="_blank">Gobierno</a></li>
                    <li><a href="https://www.participa.gob.mx/" target="_blank">Participa</a></li>
                    <li><a href="https://datos.gob.mx/" target="_blank">Datos</a></li>
                </ul>
            </nav>
            <a href="https://www.gob.mx/busqueda" target="_blank" class="search-icon">
                <span class="mdi mdi-magnify"></span>
            </a>
        </div>
    </header>

    <header class="encabezado2">
        <div class="contenido_encabezado2">
            <img src="../imagenes/logo-gob-mx.png" alt="Logo" class="logoPNG">
            <img src="../imagenes/linea-vertical-separador-logos.svg" alt="Logo">
            <img src="../imagenes/logo-educacion.svg" alt="Logo" class="logoPNG2">
            <img src="../imagenes/linea-vertical-separador-logos.svg" alt="Logo">
            <img src="../imagenes/logo-tecnm.svg" alt="Logo" class="logoPNG3">
            <img src="../imagenes/linea-vertical-separador-logos.svg" alt="Logo">
            <img src="../imagenes/itver-logo.png" alt="Logo" class="logoPNG4">
        </div>
    </header>

    <header class="encabezado3">
        <div class="contenido_encabezado3">
            <ul class="nav">
				<li><a href="../secciones/VistaA.php">Inicio</a></li>
				<li><a href="">Consultas</a>
					<ul>
                        <li><a href="../secciones/VistaC.php">Personal</a></li>
						<li><a href="../secciones/VistaD.php">Alumnado</a></li>
						<li><a href="">Investigaciones</a></li>
                        <li><a href="../secciones/VistaF.php">Infraestructura</a></li>
                        <li><a href="../secciones/VistaG.php">Programa</a></li>
					</ul>
				</li>
				<li><a href="">Enlaces</a>
					<ul>
						<li><a href="https://www.tecnm.mx/">TECNM</a></li>
						<li><a href="https://www.veracruz.tecnm.mx/">ITVER</a></li>
						<li><a href="https://sii.veracruz.tecnm.mx/">SII</a></li>
						<li><a href="https://elearning.veracruz.tecnm.mx/">Moodle</a></li>
                        <li><a href="https://www.veracruz.tecnm.mx/index.php/mapa-del-tecnm-veracruz">Mapa virtual 3D del ITVER</a></li>
                        <li><a href="https://elibro.net/es/lc/itver/inactivo">Biblioteca elibro</a></li>
                        <li><a href="https://www.veracruz.tecnm.mx/index.php/normateca/documentos-operativos/manuales">Manuales del ITVER</a></li>
                        <li><a href="https://veracruztecnm-my.sharepoint.com/personal/disc_veracruz_tecnm_mx/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fdisc%5Fveracruz%5Ftecnm%5Fmx%2FDocuments%2FIngenier%C3%ADa%20en%20Sistemas%20Computacionales%2FReglamento%5Fde%5FEstudiantes%5Fdel%5FTecNM%2Epdf&parent=%2Fpersonal%2Fdisc%5Fveracruz%5Ftecnm%5Fmx%2FDocuments%2FIngenier%C3%ADa%20en%20Sistemas%20Computacionales&ga=1">Reglamento de estudiantes del TecNM</a></li>
					</ul>
				</li>
                <li><a href=""><span class="mdi mdi-account-box usuario"></span><?php echo isset($_SESSION['nombre_usuario']) ? htmlspecialchars($_SESSION['nombre_usuario']) : 'Invitado'; ?></a>
                    <ul>
                        <li><a href="../index.html">Cerrar Sesión</a></li>
                    </ul>
                </li>
			</ul>
        </div>
    </header>

    <!--<div class="header">
        <img src="../imagenes/itver.jpg"Encabezado">
        <div class="overlay">
            <h1>Investigación</h1>
            <h2>Ingeniería en Sistemas Computacionales</h2>
            <div class="divider"></div>
        </div>
    </div>-->
    <div class="container">
        <div class="report-box">
            <h2>Reporte de Productividad en Investigación</h2>
            <div class="filter-bar" id="casillas-periodo">
                <label> </strong> Fecha inicio: </label>
                <input type="date" id="inFechaInicio" value="2024-02-01">
                <label> </strong> Fecha fin: </label>
                <input type="date" id="inFechaFin" value="2024-06-07">
                <button type="button" class="boton-confirmar" id="btnConfirmar">Confirmar <i class="arrow"></i></button>
            </div>
            <div class="chart-container" id="chartC">
                <div class="chart-box">
                    <h3>SNI</h3>
                    <canvas id="chart1"></canvas>
                    
                </div>
                <div class="chart-box">
                    <h3>Patentes</h3>
                    <canvas id="chart2"></canvas>
                    
                </div>
                <div class="chart-box">
                    <h3>Cuerpo Académico</h3>
                    <canvas id="chart3"></canvas>
                    
                </div>
                <div class="chart-box">
                    <h3>Línea de Investigación</h3>
                    <canvas id="chart4"></canvas>
                    
                </div>
                <div class="chart-box">
                    <h3>Beca Académica</h3>
                    <canvas id="chart5"></canvas>
                    
                </div>
                <div class="chart-box">
                    <h3>Perfil Deseable</h3>
                    <canvas id="chart6"></canvas>
                </div>
            </div>
        </div>
    </div>
    <footer class="pie-de-pagina">
        <div class="footer-section section-uno">
            <div class="section">
                <div class="section1">
                    <p>Dirección:</p>
                    <p>Tecnológico Nacional de México Veracruz <br> Calz. Miguel Angel de Quevedo 2779 <br> Col. Formando Hogar, Veracruz, Ver. MEXICO CP 91897 <br> Contacto: <br> (229) 934 15 00 <br> web_veracruz@tecnm.mx</p>
                    <p>Tecnológico Nacional de México Campus Veracruz <br> <a href="https://www.veracruz.tecnm.mx/index.php" class="linksa">www.veracruz.tecnm.mx</a> </p>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15071.537488956355!2d-96.159607!3d19.200252!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c34419964cc761%3A0xa6d7c54363cf608e!2sTecNM%20-%20Campus%20Instituto%20Tecnol%C3%B3gico%20de%20Veracruz!5e0!3m2!1ses-419!2smx!4v1716952412070!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="footer-section section-dos">
            <div class="section">
                <img src="../images/logo-gob.svg" alt="Logo" class="gob">
                <div class="section1">
                    <p>Enlaces</p>
                    <nav class="listaE2">
                        <ul>
                            <li><a href="https://participa.gob.mx" target="_blank">Participa</a></li>
                            <li><a href="https://www.gob.mx/publicaciones" target="_blank">Publicaciones Oficiales</a></li>
                            <li><a href="http://www.ordenjuridico.gob.mx" target="_blank">Marco Jurídico</a></li>
                            <li><a href="https://consultapublicamx.plataformadetransparencia.org.mx/vut-web/" target="_blank">Plataforma Nacional de Transparencia</a></li>
                            <li><a href="https://alertadores.funcionpublica.gob.mx" target="_blank">Alerta</a></li>
                            <li><a href="https://sidec.funcionpublica.gob.mx" target="_blank">Denuncia</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="section1">
                    <p>¿Qué es gob.mx?</p>
                    <p>Es el portal único de trámites, información <br> y participación ciudadana. <br> <a href="https://www.gob.mx/que-es-gobmx" class="linksa">Leer más</a> </p>
                    <nav class="listaE2">
                        <ul>
                            <li><a href="https://datos.gob.mx" target="_blank">Portal de datos abiertos</a></li>
                            <li><a href="https://www.gob.mx/accesibilidad" target="_blank">Declaración de accesibilidad</a></li>
                            <li><a href="https://www.gob.mx/aviso_de_privacidad" target="_blank">Aviso de privacidad integral</a></li>
                            <li><a href="https://www.gob.mx/privacidadsimplificado" target="_blank">Aviso de privacidad simplificado</a></li>
                            <li><a href="https://www.gob.mx/terminos" target="_blank">Terminos y Condiciones</a></li>
                            <li><a href="https://www.gob.mx/terminos#medidas-seguridad-informacion" target="_blank">Política de seguridad</a></li>
                            <li><a href="https://www.gob.mx/sitemap" target="_blank">Mapa de sitio</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="section1">
                    <a href="https://www.gob.mx/tramites/ficha/presentacion-de-quejas-y-denuncias-en-la-sfp/SFP54" class="links">Denuncia contra servidores <br> públicos</a>
                    <p>Síguenos en</p>
                    <div class="cont4">
                        <a href="https://www.facebook.com/gobmexico" target="_blank">
                            <span class="mdi mdi-facebook icon-white"></span>
                        </a>
                        <a href="https://x.com/GobiernoMX" target="_blank">
                            <span class="mdi mdi-twitter icon-white"></span>
                        </a>
                    </div>
                </div>

            </div>
            <img src="images/pleca-gob.svg" alt="Imagen">
        </div>
    </footer>
    <script id="script">
        const data = [
            { id: 'chart1', label: 'SNI', yes: 0, no: 0 },
            { id: 'chart2', label: 'Patentes', yes: 0, no: 0 },
            { id: 'chart3', label: 'Cuerpo Académico', yes: 0, no: 0 },
            { id: 'chart4', label: 'Línea de Investigación', yes: 0, no: 0 },
            { id: 'chart5', label: 'Beca Académica', yes: 0, no: 0 },
            { id: 'chart6', label: 'Perfil Deseable', yes: 0, no: 0 }
        ];

        data.forEach(chartData => {
            const ctx = document.getElementById(chartData.id).getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Sí', 'No'],
                    datasets: [{
                        label: chartData.label,
                        data: [chartData.yes, chartData.no],
                        backgroundColor: ['#006400', '#8FBC8F'],
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: false
                        }
                    }
                }
            });
        });
    </script>

    <script src="../js/productGen.js"></script>
</body>
</html>
