<!-- subscription start -->
    <section id="subscription" class="subscription solid-bg">      
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 text-center">
            <h2 class="wow swing">Request More Info</h2>
    				<form action="/requestinfo" method="post">

  					  <input type="text" name="name" placeholder="Name" class="form-control wow fadeInLeft">
              <input type="text" name="email" placeholder="Email" class="form-control wow fadeInLeft">
              <input type="text" name="district" placeholder="District" class="form-control wow fadeInLeft">
              <input type="text" name="school" placeholder="School" class="form-control wow fadeInLeft">
              <input type="text" name="position" placeholder="Position" class="form-control wow fadeInLeft">
              <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

              <span class="input-group-btn wow fadeInRight">
                <input type="submit" value="Submit" class="btn btn-sub">
              </span>                            
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- subscription end -->