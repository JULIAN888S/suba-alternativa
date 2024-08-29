<?php 

get_header();

?>

    <header class="header">
        <div class="header__top">
            <div class="header__brand">

                <h1 class="header__title">
                    <img src="<?php echo get_template_directory_uri();?> ./assets/logo_suba_alternativa.jpeg" alt="Suba Alternativa Logo" class="header__logo">
                </h1>
            </div>
        </div>
        
        
        
    </header>
    <label>
        <div class="toggle">
            <span class="top_line common"></span>
            <span class="middle_line common"></span>
            <span class="bottom_line common"></span>
        </div>
        <nav class="navbar">
          <ul class="navbar__list">
              <li class="navbar__item"><a href="#" class="navbar__link">Home</a></li>
              <li class="navbar__item"><a href="#" class="navbar__link">Noticias</a></li>
              <li class="navbar__item"><a href="#" class="navbar__link">Suba</a></li>
              <li class="navbar__item"><a href="#" class="navbar__link">Bogotá</a></li>
              <li class="navbar__item"><a href="#" class="navbar__link">Deportes</a></li>
              <li class="navbar__item"><a href="#" class="navbar__link">Acerca de</a></li>
          </ul>
      </nav>
      
    </label>

    <aside class="menu__aside">
        <div class="logo">
            <span class="menu__icon">
                <i class="fa-solid fa-bars"></i>
            </span>
        </div>
        <ul class="side__menu">
            <li class="nav-item active">
                <a href="#">
                    <span>Ultimas Noticias</span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Nacionales</a></li>
                    <li><a href="#">Bogotá</a></li>
                    <li><a href="#">Región Central</a></li>
                    <li><a href="#">Aliados</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <span>Deportes</span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Local</a></li>
                    <li><a href="#">Nacional</a></li>
                    <li><a href="#">Internacional</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <span>De interés</span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Agro Data</a></li>
                    <li><a href="#">Artistas</a></li>
                    <li><a href="#">Eventos</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <span>Conózcanos</span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Programación</a></li>
                    <li><a href="#">Portafolio</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <span>Bogotá</span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <span>Región Central</span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Cundinamarca</a></li>
                    <li><a href="#">Boyacá</a></li>
                    <li><a href="#">Tolima</a></li>
                    <li><a href="#">Huila</a></li>
                    <li><a href="#">Meta</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <span>Quienes Somos</span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Misión & Visión</a></li>
                    <li><a href="#">Principios y Valores</a></li>
                    <li><a href="#">Conciertos</a></li>
                </ul>
            </li>
        </ul>
    </aside>
    
    
    <main class="main-content">
      <section class="news-section">
        <h1 class="news-section__title">Últimas Noticias</h1>
        <div class="news-grid">
          <article class="news-item news-item--large">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/deportes.png" alt="Main News Image" class="news-item__image">
            <h2 class="news-item__title">Reforma al sistema de transporte en Bogotá: Cambios importantes</h2>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/estudiar.png" alt="News Image 2" class="news-item__image">
            <h3 class="news-item__title">Aumento en tarifas de transporte público: Lo que debes saber</h3>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/unal.png" alt="News Image 3" class="news-item__image">
            <h3 class="news-item__title">Nuevas medidas de seguridad en el centro de Bogotá</h3>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/temu.png" alt="News Image 3" class="news-item__image">
            <h3 class="news-item__title">Eventos culturales destacables en Bogotá para este mes</h3>
          </article>
        </div>
      </section>
      
      <section class="news-section">
        <h1 class="news-section__title">SUBA</h1>
        <div class="news-grid">
          <article class="news-item news-item--large">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/bogotalandscape.png" alt="Main News Image" class="news-item__image">
            <h2 class="news-item__title">Avances en el proyecto de renovación urbana en Suba</h2>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/estudiar.png" alt="News Image 2" class="news-item__image">
            <h3 class="news-item__title">Inauguración de nuevo centro de atención en Suba</h3>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/unal.png" alt="News Image 3" class="news-item__image">
            <h3 class="news-item__title">Actividades recreativas para niños en Suba</h3>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/temu.png" alt="News Image 3" class="news-item__image">
            <h3 class="news-item__title">Problemas de movilidad en Suba: Soluciones propuestas</h3>
          </article>
        </div>
      </section>
      
      <section class="news-section">
        <h1 class="news-section__title">REGIÓN CENTRAL</h1>
        <div class="news-grid">
          <article class="news-item news-item--large">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/deportes.png" alt="Main News Image" class="news-item__image">
            <h2 class="news-item__title">Mejoras en infraestructura vial en la Región Central</h2>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/estudiar.png" alt="News Image 2" class="news-item__image">
            <h3 class="news-item__title">Proyectos de desarrollo económico en la Región Central</h3>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/unal.png" alt="News Image 3" class="news-item__image">
            <h3 class="news-item__title">Apertura de nuevos parques y áreas recreativas</h3>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/temu.png" alt="News Image 3" class="news-item__image">
            <h3 class="news-item__title">Eventos comunitarios y ferias en la Región Central</h3>
          </article>
        </div>
      </section>
      
      <section class="news-section">
        <h1 class="news-section__title">DEPORTES</h1>
        <div class="news-grid">
          <article class="news-item news-item--large">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/deportes.png" alt="Main News Image" class="news-item__image">
            <h2 class="news-item__title">El nuevo estadio de Bogotá: Avances y perspectivas</h2>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/estudiar.png" alt="News Image 2" class="news-item__image">
            <h3 class="news-item__title">Resultados de la última jornada de la liga local</h3>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/unal.png" alt="News Image 3" class="news-item__image">
            <h3 class="news-item__title">Entrevista con el entrenador del equipo campeón</h3>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/temu.png" alt="News Image 3" class="news-item__image">
            <h3 class="news-item__title">Tendencias y futuros talentos en el deporte bogotano</h3>
          </article>
        </div>
      </section>
      
      <section class="news-section">
        <h1 class="news-section__title">MÁS NOTICIAS</h1>
        <div class="news-grid">
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/estudiar.png" alt="News Image 2" class="news-item__image">
            <h3 class="news-item__title">Actualización sobre el proyecto de vivienda en Bogotá</h3>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/unal.png" alt="News Image 3" class="news-item__image">
            <h3 class="news-item__title">Iniciativas para mejorar la calidad del aire en la ciudad</h3>
          </article>
          <article class="news-item">
            <img src="<?php echo get_template_directory_uri();?>./assets/img/temu.png" alt="News Image 3" class="news-item__image">
            <h3 class="news-item__title">Desarrollo de nuevas rutas turísticas en Bogotá</h3>
          </article>
        </div>
      </section>
      
    </main>
  


       
    <section class="audio-player collapsed">
      <div class="audio-player__container">
          <div class="audio-player__image">
              <img src="<?php echo get_template_directory_uri();?>./assets/img/locutora.png" alt="Locutora">
          </div>
          <div class="audio-player__controls">
              <audio id="audio">
                  Tu navegador no soporta audio HTML5.
              </audio>
              <div class="controls">
                  <button id="playPauseBtn">
                      <i class="fa-solid fa-play"></i>
                  </button>
                  <button id="rewindBtn">
                      <i class="fa-sharp fa-solid fa-arrow-rotate-left"></i>
                  </button>
                  <button id="forwardBtn">
                      <i class="fa-sharp fa-solid fa-arrow-rotate-right"></i>
                  </button>
                  <input type="range" id="volumeControl" min="0" max="1" step="0.1" value="1">
              </div>
              <div id="current-program-info">Información del programa actual</div>
              <div class="audio-player__schedule" id="schedule"></div>
              <button class="audio-chevron">&#9650;</button> <!-- Cambiado a &#9650; para el estado activo -->
          </div>
      </div>
  </section>
  
<?php 

get_footer();

?>