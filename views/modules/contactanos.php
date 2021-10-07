    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="views/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      
      <!-- API Google Map-->
      <div id="map" style="width:100%;height:500px">
      </div>
      <script>
        function iniciarMap(){
          var coord = {lat:-16.8294672 ,lng: -65.5166069};
          var map = new google.maps.Map(document.getElementById('map'),{
            zoom: 16,
            center: coord,
          });
          var marker = new google.maps.Marker({
            position: coord,
            map: map
          });
      }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPFwEjKWy_QI55aStIuCmRoVrv6ZO3YYA&callback=iniciarMap"></script>
      <div style="width=100%;">
        <iframe width=100% height="600" frameborder="0" scroolling="no" marginheight="0" marginwight="0" src="https://www.google.com/maps/place/Instituto+Tecnol%C3%B3gico+Eterazama+-+CEFTE/@-16.8294672,-65.5166069,16z/data=!4m14!1m8!3m7!1s0x0:0x0!2zMTbCsDU4JzIzLjgiUyA2NcKwMjUnMTIuNCJX!3b1!7e2!8m2!3d-16.973274!4d-65.4201139!3m4!1s0x93e415415d0d1eff:0xec9483ece524f3a9!8m2!3d-16.8293843!4d-65.5167515">
        </iframe>
      </div>
      <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Les%20Rambles,%201%20Barcelona,%20Spain+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.mapsdirections.info/marcar-radio-circulo-mapa/">Dibujar radio en el mapa</a></div>
      <!-- Contact information-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="tel:#">+591 67404120</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link" ><a class="link-location" href="https://www.google.com/maps/place/Instituto+Tecnol%C3%B3gico+Eterazama+-+CEFTE/@-16.8294672,-65.5166069,16z/data=!4m14!1m8!3m7!1s0x0:0x0!2zMTbCsDU4JzIzLjgiUyA2NcKwMjUnMTIuNCJX!3b1!7e2!8m2!3d-16.973274!4d-65.4201139!3m4!1s0x93e415415d0d1eff:0xec9483ece524f3a9!8m2!3d-16.8293843!4d-65.5167515" target="_blank">Instituto Tecnologico Eterazama - CEFTE, Eterazama, Villa Tunari, CHAPARE</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:tecnologicocefte@hotmail.com"
                                    target="_blank">tecnologicocefte@hotmail.com</a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Ponerse en contacto</h3>
            </div>
            <div class="title-classic-text">
              <p>Si tienes alguna duda, rellena el formulario de contacto y te responderemos a la brevedad posible.</p>
            </div>
          </article>
          <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Nombre</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email-2">Correo</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="tel" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone-2">Teléfono</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Mensaje</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <button class="button button-primary button-pipaluk" type="submit">Enviar Mensaje</button>
          </form>
        </div>
      </section>    
    </div>
