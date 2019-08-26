<!-- contact start -->
    <section id="contact" class="contact white tab-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs text-center" role="tablist">
              <li class="wow rollIn animated" data-wow-duration="1s"><a href="#contact-info" role="tab" data-toggle="tab"><i class="fa fa-paper-plane"></i>
                </a></li>
              <li class="active wow rollIn animated" data-wow-duration="2s"><a href="#contact-form" role="tab" data-toggle="tab"><i class="fa fa-envelope"></i></a></li>
              <li class="wow rollIn animated" data-wow-duration="3s"><a href="#contact-map" class="contact-map" role="tab" data-toggle="tab"><i class="fa fa-map-marker"></i></a></li>
            </ul>            
          </div>
        </div>
      </div>
       <!-- Tab panes -->            
      <div class="tab-content">
        <div class="tab-pane contact-info" id="contact-info">
          <div class="container">
            <div class="row">
            <div class="col-sm-12 text-center">            
              <span class="sub-head">we are here</span>
              <div class="title">
                <h2>get in touch</h2>
              </div>
            </div>
          </div>
            <div class="row text-center">
              <div class="col-sm-4">
                <div class="info-holder">
                  <i class="fa fa-taxi"></i>
                   <br>
                   <p>
                     McAllen, TX
                   </p>
                </div>                
              </div>
              <div class="col-sm-4">
                <div class="info-holder">
                  <i class="fa fa-mobile"></i>
                  <br>
                  
                  </p>
                </div>                
              </div>
              <div class="col-sm-4">
                <div class="info-holder">
                  <i class="fa fa-reply"></i>
                  <br>
                  <p>
                    <a href="mailto:questions@operationbot.com">questions@operationbot.com</a>
                  </p>
                </div>                
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane active contact-info" id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">            
                <span class="sub-head">we are here</span>
                <div class="title">
                  <h2>get in touch</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">




                <form action="/contact" method="post" class="form-horizontal">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="span-form">
                        <input class="form-control" type="text" name="firstname" placeholder="First name" required="required">
                      </div>
                      <div class="span-form">
                        <input type="text" class="form-control" name="lastname" placeholder="Last name" required="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email address" required="required">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <textarea name="message" class="form-control btn-block" rows="3"></textarea>
                    </div>
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="form-group">
                      <input type="submit" class="btn btn-block" value="send message">
                    </div>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane contact-info" id="contact-map">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">            
                <span class="sub-head">we are here</span>
                <div class="title">
                  <h2>get in touch</h2>
                </div>
              </div>
            </div>
          </div>
          <div id="map">
            
          </div>
        </div>
      </div>  
    </section>
    <!-- contact end -->