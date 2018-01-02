<!-- Area do footer juntamento com contato -->

  <section id="contact">
   <!--  <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div> -->
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Fale Conosco</h2>
            <p>Temos uma equipe treinada para melhor atende-lo. 
               Entre em contato conosco para tirar dúvidas, reclamações, 
               esclarecimentos, opiniões, orçamentos ou qualquer que seja o motivo. 
               Estaremos aguardando ansiosamente seu contato. 
               Iremos responder o mais rápido possível. </p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form  method="POST" action="../../controller/send-email-at.php">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="atName" class="form-control" placeholder="Digite seu Nome" required="required" style="border-color:white !important;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="atEmail" class="form-control" placeholder="Digite seu Email " required="required" style="border-color:white !important;">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="atAssunto" class="form-control" placeholder="Digite a Mensagem" required="required" style="border-color:white !important;">
                </div>
                <div class="form-group">
                  <textarea name="atMensagem" id="atMensagem" class="form-control" rows="4" placeholder="Digite sua Mensagem" required="required" style="border-color:white !important;"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">Enviar</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p><strong>Moby Telecom</strong></p>
                <ul class="address">
                   <li><i class="fa fa-phone"></i> <span> Telefone:</span> (31) 2512-6331 </li>
                   <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="atendimento@mobytel.com.br"> atendimento@mobytel.com.br</a></li>
                 </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="../../index.html"><img class="img-responsive" src="../../images/logo_rodape.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
             <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-instagram"></i></a></li> 
             <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
	
	
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2016 - Desenvolvido por: Moby Telecomunicações.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Todos os direitos reservados.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="../../js/wow.min.js"></script>
  <script type="text/javascript" src="../../js/mousescroll.js"></script>
  <script type="text/javascript" src="../../js/smoothscroll.js"></script>
  <script type="text/javascript" src="../../js/jquery.countTo.js"></script>
  <script type="text/javascript" src="../../js/lightbox.min.js"></script>
  <script type="text/javascript" src="../../js/main.js"></script>

