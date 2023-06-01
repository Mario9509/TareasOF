<!-- Incluye el encabezado -->
@include('admin.header')

  <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5 margin_top_header">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 margin_top_text">
                    <h1 class="display-4 mb-3 animated slideInDown">Recupera tu tiempo libre, Deja tus tareas en nuestras manos profesionales</h1>
                    <p class="animated slideInDown">Cualquier tarea relacionada con la sistemas
                    y programacion te podemos ayudar, solo debes de comunicarte y nos pondremos en contacto y de acuerdo para llegar a una solucion</p>
                    <a href="" class="btn btn-primary py-3 px-4 animated slideInDown">Contactanos</a>
                </div>
                <div class="col-lg-6 animated fadeIn margin_top_text">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="{{ asset('img/logo.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp como_funciona_title" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Como Funciona?</h1>
                <p class="text-primary fs-5 mb-5">El proceso para contactarnos y solicitar tu tarea es simple y directo. Aquí tienes una descripción de cómo puedes comunicarte con nosotros y pedir ayuda con tus tareas:</p>
            </div>
            <div class="row g-5 align-items-center como_funciona">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/about.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 texto_card_funcion">1. Encuentra nuestros datos de contacto </h1>
                        <p class="text-primary fs-5 mb-4">
                            En nuestra página web, encontrarás nuestra información de contacto, como dirección de correo electrónico, número de teléfono y posiblemente un formulario de contacto. Puedes elegir el método que te resulte más conveniente para comunicarte con nosotros.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center como_funciona">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h1 class="display-6 texto_card_funcion">2. Envía tu consulta</h1>
                        <p class="text-primary fs-5 mb-4">Una vez que hayas encontrado nuestros datos de contacto, puedes enviarnos un correo electrónico, llamarnos o completar el formulario de contacto proporcionando los detalles de tu tarea. Incluye toda la información relevante, como el tema, nivel educativo, fecha de entrega y cualquier requisito específico que debamos tener en cuenta.  
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{ asset('img/about.png') }}" alt="">
                </div>
            </div>
            <div class="row g-5 align-items-center como_funciona">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/about.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 texto_card_funcion">3. Recibimos tu consulta </h1>
                        <p class="text-primary fs-5 mb-4">Una vez que hayamos recibido tu consulta, nuestro equipo revisará la información y evaluará tus necesidades. Si es necesario, nos pondremos en contacto contigo para obtener más detalles o aclaraciones sobre la tarea 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center como_funciona">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h1 class="display-6 texto_card_funcion">4. Cotización y confirmación</h1>
                        <p class="text-primary fs-5 mb-4">Una vez que hayamos evaluado tus necesidades, te proporcionaremos una cotización para el servicio y el tiempo estimado de entrega. Esta cotización incluirá los detalles sobre los costos y las condiciones de pago. Si estás de acuerdo, deberás confirmar tu solicitud y aceptar los términos y condiciones.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{ asset('img/about.png') }}" alt="">
                </div>
            </div>
            <div class="row g-5 align-items-center como_funciona">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/about.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 texto_card_funcion">5. Realiza el pago </h1>
                        <p class="text-primary fs-5 mb-4">Dspués de confirmar tu solicitud, se te proporcionarán las opciones de pago disponibles. Podrás realizar el pago utilizando los métodos de pago aceptados en nuestro sitio web. Una vez que se haya completado el pago, el proceso de trabajo comenzará.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center como_funciona">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h1 class="display-6">6. Comunicación y seguimiento</h1>
                        <p class="text-primary fs-5 mb-4">Durante todo el proceso, mantendremos una comunicación constante contigo. Si tenemos alguna pregunta adicional o necesitamos aclaraciones sobre la tarea, te contactaremos para asegurarnos de proporcionar un trabajo de calidad que cumpla con tus expectativas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{ asset('img/about.png') }}" alt="">
                </div>
            </div>
            <div class="row g-5 align-items-center como_funciona">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/about.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 texto_card_funcion">7. Entrega de la tarea finalizada </h1>
                        <p class="text-primary fs-5 mb-4">Una vez que hayamos completado la tarea solicitada, te enviaremos la entrega final en el formato acordado. Podrás revisar el trabajo y, si es necesario, solicitar revisiones o ajustes dentro de los límites establecidos en nuestras políticas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid mb-4" src="{{ asset('img/icon-9.png') }}"alt="">
                    <h1 class="display-4" data-toggle="counter-up">123456</h1>
                    <p class="fs-5 text-primary mb-0">Today Transactions</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid mb-4" src="{{ asset('img/icon-10.pn') }}" alt="">
                    <h1 class="display-4" data-toggle="counter-up">123456</h1>
                    <p class="fs-5 text-primary mb-0">Monthly Transactions</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid mb-4" src="{{ asset('img/icon-2.png') }}" alt="">
                    <h1 class="display-4" data-toggle="counter-up">123456</h1>
                    <p class="fs-5 text-primary mb-0">Total Transactions</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Porque nosotros?</h1>
                <p class="text-primary fs-5 mb-5">The Best In The crypto Industry</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{ asset('img/icon-7.png') }}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Facil de usar</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{ asset('img/icon-6.png') }}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Seguro y discreto</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{ asset('img/icon-5.png') }}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Nos adaptamos a tu presupuesto</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-4.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Secure Storage</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-3.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Protected By Insurance</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-8.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">24/7 Support</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
            -->
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Servicios</h1>
                <p class="text-primary fs-5 mb-5">Buy, Sell And Exchange Cryptocurrency</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{ asset('img/icon-7.png') }}" alt="">
                        <h5 class="mb-3">Currency Wallet</h5>
                        <p>No dejes que las tareas te impidan disfrutar de la vida estudiantil. Delega tus tareas a nuestro equipo y libera tiempo para otras actividades. Confía en nosotros para ofrecerte resultados de calidad mientras mantienes un equilibrio saludable</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{ asset('img/icon-3.png') }}" alt="">
                        <h5 class="mb-3">Currency Transaction</h5>
                        <p>¿Necesitas ayuda con proyectos escolares complejos? Ofrecemos asistencia integral en la planificación, investigación y desarrollo de proyectos. Trabajaremos contigo para garantizar que tus proyectos destaquen y cumplan con los requisitos académicos</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{ asset('img/icon-9.png') }}" alt="">
                        <h5 class="mb-3">Bitcoin Investment</h5>
                        <p>¿Te sientes abrumado por tus tareas escolares? Permítenos aliviar tu carga. Proporcionamos asistencia integral para completar tus proyectos, investigaciones y trabajos escritos, garantizando resultados de calidad y cumplimiento de plazos</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{ asset('img/icon-5.png') }}" alt="">
                        <h5 class="mb-3">Currency Exchange</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{ asset('img/icon-2.png') }}" alt="">
                        <h5 class="mb-3">Bitcoin Escrow</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{ asset('img/icon-8.png') }}" alt="">
                        <h5 class="mb-3">Token Sale</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Service Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Precios</h1>
                <p class="text-primary fs-5 mb-5">Buy, Sell And Exchange Cryptocurrency</p>
            </div>
            <div class="row g-4">
                <!--
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-7.png" alt="">
                        <h5 class="mb-3">Cards precios</h5>
                        <p>NAqui ira la card de precios</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-7.png" alt="">
                        <h5 class="mb-3">Cards precios</h5>
                        <p>NAqui ira la card de precios</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="img/icon-7.png" alt="">
                        <h5 class="mb-3">Cards precios</h5>
                        <p>NAqui ira la card de precios</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            -->

                <section class="pricing">
                    <div class="container">
                        <div class="row">
                            <!-- Free Tier -->
                            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body">
                                        <h5 class="card-title text-muted text-uppercase text-center">Facil</h5>
                                        <h6 class="card-price text-center">$100<span class="period">/pesos</span></h6>
                                        <hr>
                                        <ul class="fa-ul">
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Tareas sencillas</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Rapidas</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Menos de 30 min</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
                                        </ul>
                                        <div class="precio_mas">
                                            <a href="">Leer mas <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Plus Tier -->
                            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body">
                                        <h5 class="card-title text-muted text-uppercase text-center">Media</h5>
                                        <h6 class="card-price text-center">$200<span class="period">/pesos</span></h6>
                                        <hr>
                                        <ul class="fa-ul">
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                                            
                                        </ul>
                                        <div class="precio_mas">
                                            <a href="">Leer mas  <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pro Tier -->
                            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-muted text-uppercase text-center">Dificil</h5>
                                        <h6 class="card-price text-center">$500<span class="period">/pesos</span></h6>
                                        <hr>
                                        <ul class="fa-ul">
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong></li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                                            
                                        </ul>
                                        <div class="precio_mas">
                                            <a href="">Leer mas<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- FAQs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Preguntas frecuentes</h1>
                <p class="text-primary fs-5 mb-5">Frequently Asked Questions</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Cuál es el proceso para solicitar ayuda con una tarea?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    El proceso para solicitar ayuda con una tarea en nuestra página web es sencillo y fácil de seguir. Aquí está la descripción de cómo funciona:

                                    Completa el formulario de solicitud: En nuestro sitio web, encontrarás un formulario de solicitud en el que podrás proporcionar los detalles de la tarea que necesitas ayuda. Esto puede incluir información como el tema, nivel educativo, fecha de entrega, requisitos específicos y cualquier archivo adjunto relevante. Cuanta más información proporciones, mejor podremos entender tus necesidades.

                                    Obtén una cotización: Una vez que hayas enviado el formulario de solicitud, nuestro equipo revisará los detalles y te proporcionará una cotización basada en la complejidad de la tarea, la cantidad de trabajo requerido y la fecha de entrega. La cotización incluirá el costo del servicio.

                                    Confirma la solicitud: Si estás de acuerdo con la cotización y deseas proceder, deberás confirmar tu solicitud y aceptar los términos y condiciones. Es importante leer y comprender todos los términos antes de confirmar tu solicitud.

                                    Realiza el pago: Después de confirmar tu solicitud, se te proporcionarán las opciones de pago disponibles. Podrás realizar el pago utilizando los métodos de pago aceptados en nuestro sitio web. Una vez que se haya completado el pago, el proceso de trabajo comenzará.

                                    Comunicación y seguimiento: Durante todo el proceso, mantendremos una comunicación constante contigo. Si tenemos alguna pregunta adicional o necesitamos aclaraciones sobre la tarea, te contactaremos para asegurarnos de proporcionar un trabajo de calidad que cumpla con tus expectativas.

                                    Entrega de la tarea finalizada: Una vez que hayamos completado la tarea solicitada, te enviaremos la entrega final en el formato acordado. Podrás revisar el trabajo y, si es necesario, solicitar revisiones o ajustes dentro de los límites establecidos en nuestras políticas.

                                    Este es un resumen general del proceso para solicitar ayuda con una tarea en nuestra página web. Cada paso se realiza de manera clara y transparente para garantizar que recibas el apoyo necesario y obtengas resultados satisfactorios. Nuestro objetivo es brindarte un servicio de calidad y ayudarte a alcanzar tus metas académicas.
                                    </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Cuánto tiempo se tarda en completar una tarea?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    El tiempo requerido para completar una tarea puede variar según varios factores, como la complejidad de la tarea, el nivel educativo, la extensión del trabajo y los requisitos específicos. En nuestra página web, nos esforzamos por proporcionar un servicio eficiente y oportuno. A continuación, se describe nuestra respuesta típica a la pregunta sobre el tiempo de entrega:

                                    Evaluación inicial: Una vez que hayas enviado los detalles de tu tarea, nuestro equipo revisará la información proporcionada y evaluará la complejidad y los requisitos del trabajo. En esta etapa, también tomaremos en cuenta la fecha de entrega solicitada.

                                    Tiempo estimado de entrega: En función de nuestra evaluación inicial, te proporcionaremos un tiempo estimado de entrega. Este plazo puede variar según la carga de trabajo actual y la disponibilidad de nuestros profesionales. Nos esforzamos por cumplir con los plazos acordados y entregar el trabajo a tiempo.

                                    Confirmación final: Antes de proceder, confirmaremos el plazo de entrega final contigo. Es importante que revises y aceptes el plazo propuesto. Si tienes alguna restricción o necesidad especial en términos de tiempo, haremos todo lo posible para adaptarnos a tus requerimientos, siempre y cuando sea factible dentro de nuestras capacidades.

                                    Es importante tener en cuenta que cada tarea es única y puede requerir diferentes niveles de esfuerzo y tiempo de trabajo. Para proyectos más extensos o complejos, es posible que necesitemos un tiempo adicional para garantizar la calidad y la atención adecuada a los detalles. En cualquier caso, nos comprometemos a mantenerte informado sobre el progreso de tu tarea y a proporcionarte una fecha de entrega realista.

                                    Es recomendable enviar tu solicitud con la mayor antelación posible para permitir suficiente tiempo de trabajo y evitar posibles contratiempos de última hora. Sin embargo, comprendemos que a veces las tareas pueden surgir de manera imprevista, y haremos todo lo posible para adaptarnos a tus necesidades.

                                    Recuerda que la comunicación abierta y clara es fundamental. Si tienes una fecha límite específica o requisitos urgentes, te recomendamos que nos lo indiques desde el principio para que podamos evaluar la viabilidad y asegurarnos de cumplir con tus expectativas. Estamos aquí para brindarte un servicio de calidad en el tiempo acordado y ayudarte a lograr tus metas académicas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Qué materias o áreas académicas cubren sus servicios?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Nuestros servicios abarcan una amplia gama de materias y áreas académicas para ayudar a los estudiantes en diferentes campos de estudio. A continuación, se describe nuestra respuesta típica a la pregunta sobre las materias o áreas académicas cubiertas por nuestros servicios:

                                    Ciencias exactas y naturales: Esto incluye disciplinas como matemáticas, física, química, biología y estadística.

                                    Ciencias sociales y humanidades: Cubrimos áreas como historia, geografía, ciencias políticas, sociología, psicología, filosofía, literatura y lingüística.

                                    Ciencias de la salud: Ofrecemos asistencia en campos como medicina, enfermería, farmacia, biología molecular, anatomía y fisiología.

                                    Ciencias de la computación y tecnología: Esto abarca programación, bases de datos, redes, seguridad informática, inteligencia artificial y diseño web.

                                    Administración de empresas y economía: Proporcionamos ayuda en materias como contabilidad, finanzas, gestión, marketing, economía y emprendimiento.

                                    Ingeniería: Cubrimos diferentes ramas de la ingeniería, como ingeniería eléctrica, mecánica, civil, industrial, de software y de telecomunicaciones.

                                    Estos son solo ejemplos generales de las áreas académicas que cubrimos. Es importante tener en cuenta que nuestra lista de materias y áreas académicas no es exhaustiva y estamos abiertos a considerar solicitudes en otros campos. Si tienes una tarea en una materia específica que no se menciona aquí, te animamos a contactarnos para evaluar la posibilidad de brindarte apoyo.

                                    Nuestro equipo está compuesto por profesionales y expertos en diversas disciplinas académicas, lo que nos permite ofrecer un amplio espectro de servicios a estudiantes de diferentes áreas de estudio. Nos comprometemos a brindar ayuda de calidad en el campo de estudio correspondiente y a adaptarnos a tus necesidades académicas específicas.

                                    Si tienes alguna pregunta sobre una materia o área académica en particular, te invitamos a comunicarte con nosotros para obtener más información sobre cómo podemos ayudarte.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    ¿Cuál es su política de confidencialidad y privacidad en relación con las tareas y los datos de los estudiantes?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Nuestra política de confidencialidad y privacidad es de suma importancia para nosotros. Respetamos y protegemos la privacidad de nuestros clientes y sus datos personales. A continuación, se describe nuestra respuesta típica a la pregunta sobre nuestra política de confidencialidad y privacidad en relación con las tareas y los datos de los estudiantes:

                                    Confidencialidad de las tareas: Nos comprometemos a mantener la confidencialidad absoluta de las tareas que nos envían los estudiantes. Esto significa que cualquier trabajo realizado para un estudiante en particular se mantendrá privado y no se compartirá con terceros sin el consentimiento expreso del estudiante. Nosotros no revendemos ni redistribuimos las tareas completadas a otros clientes.

                                    Protección de datos personales: Recopilamos y almacenamos la información personal necesaria para brindar nuestros servicios de manera eficiente. Esta información se utiliza únicamente con el propósito de procesar y completar las tareas solicitadas. Nos comprometemos a proteger los datos personales de los estudiantes y a no divulgarlos a terceros sin su consentimiento, a menos que estemos legalmente obligados a hacerlo.

                                    Seguridad de la información: Implementamos medidas de seguridad adecuadas para proteger la información de los estudiantes. Esto incluye el uso de tecnologías y prácticas de seguridad estándar de la industria para prevenir el acceso no autorizado, la divulgación, la alteración o la destrucción de los datos personales.

                                    Uso limitado de la información: La información personal proporcionada por los estudiantes se utilizará únicamente con el propósito de brindarles los servicios solicitados. No compartiremos la información personal con terceros para fines de marketing u otros propósitos sin el consentimiento explícito del estudiante.

                                    Retención de datos: Mantenemos los datos personales de los estudiantes durante el tiempo necesario para cumplir con nuestros servicios y requisitos legales. Una vez completada la tarea y finalizada la relación con el estudiante, nos aseguramos de eliminar los datos personales de manera segura, a menos que existan requisitos legales o justificaciones legítimas para su retención.

                                    Es importante tener en cuenta que, si bien tomamos todas las precauciones razonables para proteger la privacidad y confidencialidad, no podemos garantizar la seguridad completa de la información transmitida a través de Internet. Sin embargo, nos esforzamos por aplicar las mejores prácticas y mantener nuestros sistemas y medidas de seguridad actualizados para proteger la información de los estudiantes de manera adecuada.

                                    Si tienes alguna pregunta adicional sobre nuestra política de confidencialidad y privacidad, te invitamos a revisar nuestra sección de políticas en nuestro sitio web o a comunicarte con nuestro equipo de soporte. Estamos aquí para brindarte tranquilidad y asegurarte que tu información personal y tus tareas se tratan de manera confidencial y segura.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    ¿Qué métodos de pago aceptan y cuál es el proceso de pago?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aceptamos varios métodos de pago para brindarte opciones convenientes y seguras. A continuación, se describe nuestra respuesta típica a la pregunta sobre los métodos de pago que aceptamos y el proceso de pago:

                                    Tarjetas de crédito y débito: Aceptamos las principales tarjetas de crédito y débito, como Visa, Mastercard, American Express, y otras tarjetas reconocidas a nivel internacional. Puedes utilizar tu tarjeta para realizar el pago de manera segura a través de nuestro sitio web.

                                    PayPal: También aceptamos pagos a través de PayPal, un servicio de pago en línea ampliamente utilizado y reconocido. Si tienes una cuenta de PayPal, podrás realizar el pago de manera rápida y segura utilizando tu saldo de PayPal o vinculando tu tarjeta o cuenta bancaria a tu cuenta de PayPal.

                                    Transferencia bancaria: Si prefieres realizar una transferencia bancaria directa, podemos proporcionarte los detalles bancarios necesarios para completar el pago. Ten en cuenta que los tiempos de procesamiento pueden variar según tu entidad bancaria y es posible que se apliquen tarifas adicionales.

                                    Otros métodos de pago: Dependiendo de tu ubicación y disponibilidad, es posible que también aceptemos otros métodos de pago locales. Te recomendamos que consultes con nuestro equipo de soporte para verificar si se pueden utilizar otros métodos de pago en tu país o región.

                                    El proceso de pago es sencillo y seguro. Una vez que hayas recibido la cotización y confirmado tu solicitud, se te proporcionará una factura detallada con el monto a pagar. A continuación, deberás seguir los siguientes pasos:

                                    Selecciona el método de pago: Elige el método de pago que prefieras de entre los aceptados, ya sea tarjeta de crédito/débito, PayPal u otro método acordado.

                                    Proporciona la información requerida: Si optas por pagar con tarjeta de crédito o débito, deberás ingresar los detalles correspondientes, como el número de tarjeta, fecha de vencimiento y código de seguridad. Si eliges PayPal, serás redirigido a la página de inicio de sesión de PayPal para completar el pago.

                                    Confirma el pago: Revisa todos los detalles del pago y confirma la transacción. Asegúrate de verificar la precisión de la información antes de confirmar el pago.

                                    Recibo de pago: Una vez completado el proceso de pago, recibirás un recibo o confirmación de pago que servirá como comprobante de la transacción. Te recomendamos guardar este recibo para futuras referencias.

                                    Es importante destacar que todos los pagos se realizan a través de conexiones seguras y encriptadas para proteger la confidencialidad de tus datos financieros.

                                    Si tienes alguna pregunta adicional sobre los métodos de pago o el proceso de pago, no dudes en comunicarte con nuestro equipo de soporte. Estaremos encantados de brindarte la asistencia necesaria para facilitar tu experiencia de pago.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    ¿Cómo puedo ponerme en contacto con el equipo de soporte en caso de preguntas o problemas adicionales?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Estamos aquí para brindarte el mejor servicio posible, por lo que ofrecemos varias formas de ponerse en contacto con nuestro equipo de soporte en caso de preguntas o problemas adicionales. A continuación, se describe nuestra respuesta típica a la pregunta sobre cómo ponerse en contacto con nuestro equipo de soporte:

                                    1. Soporte por correo electrónico: Puedes enviarnos un correo electrónico a nuestra dirección de soporte indicada en nuestro sitio web. Este método es conveniente si prefieres comunicarte por escrito y proporcionarnos detalles específicos sobre tu consulta o problema. Nuestro equipo de soporte revisará tu correo electrónico y te responderá en el menor tiempo posible.

                                    2. Chat en vivo: Si deseas una respuesta más inmediata, te recomendamos utilizar nuestro servicio de chat en vivo, que está disponible en nuestro sitio web durante los horarios de atención al cliente. Podrás chatear directamente con uno de nuestros representantes de soporte, quienes estarán encantados de ayudarte y responder a tus preguntas en tiempo real.

                                    3. Número de teléfono: Dependiendo de la disponibilidad y las opciones locales, también podemos proporcionarte un número de teléfono de contacto para que puedas comunicarte con nuestro equipo de soporte directamente. Este método es especialmente útil si prefieres una comunicación verbal y necesitas una respuesta rápida.

                                    Independientemente del método de contacto que elijas, te recomendamos proporcionar la mayor cantidad de detalles posible sobre tu consulta o problema para que podamos ayudarte de manera más efectiva. Esto incluye información relevante, como tu nombre, dirección de correo electrónico asociada a la cuenta y cualquier otra información relacionada con tu solicitud o problema.

                                    Nuestro equipo de soporte está altamente capacitado y comprometido en brindarte la mejor atención al cliente posible. Nos esforzamos por responder a tus consultas de manera oportuna y resolver cualquier problema que puedas tener. Tu satisfacción es nuestra prioridad y estaremos encantados de asistirte en cualquier consulta adicional que puedas tener.

                                    No dudes en comunicarte con nuestro equipo de soporte a través del canal de tu elección, y estaremos encantados de brindarte la ayuda que necesitas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Will you maintain my site for me?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Aquí tienes algunas preguntas frecuentes que podrías incluir en la sección de preguntas frecuentes (FAQ) de tu página web relacionadas con los servicios que ofreces:

                                    ¿Qué tipo de servicios ofrecen para ayudar a los estudiantes con sus tareas?
                                    ¿Cuál es el proceso para solicitar ayuda con una tarea?
                                    ¿Cuánto tiempo se tarda en completar una tarea?
                                    ¿Cómo se determina el costo de los servicios?
                                    ¿Qué materias o áreas académicas cubren sus servicios?
                                    ¿Quiénes son los profesionales o tutores que brindan la ayuda con las tareas?
                                    ¿Qué garantías ofrecen en cuanto a la calidad y originalidad de las tareas realizadas?
                                    ¿Cómo se aseguran de que no haya plagio en las tareas entregadas?
                                    ¿Cuál es su política de confidencialidad y privacidad en relación con las tareas y los datos de los estudiantes?
                                    ¿Qué métodos de pago aceptan y cuál es el proceso de pago?
                                    ¿Ofrecen algún tipo de reembolso o revisión si el estudiante no está satisfecho con la tarea realizada?
                                    ¿Cuál es su política en caso de incumplimiento de plazos o problemas técnicos?
                                    ¿Cómo puedo ponerme en contacto con el equipo de soporte en caso de preguntas o problemas adicionales?

                                    Estas preguntas frecuentes ayudarán a los usuarios a comprender mejor los servicios que ofreces, el proceso de trabajo y las políticas relacionadas. Recuerda personalizar las respuestas de acuerdo con los detalles específicos de tu página web y los servicios que brindas. Además, revisa periódicamente tus preguntas frecuentes para mantenerlas actualizadas y agregar nuevas preguntas que surjan de las consultas de los usuarios.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->

    <!-- Incluye el encabezado -->
@include('admin.footer')