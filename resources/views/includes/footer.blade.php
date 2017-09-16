<!---Footer Section Start Here-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 widget animated fadeIn delay-01" data-animation="fadeIn" data-animation-delay="01">
          <h3>About Us</h3>
          <p>Lorem ipsum dolor sit amet, consect- <br>etur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali qua. Ut enim ad minim veniam, quis no strud exercitation ullamco. Ut enim ad minim.</p>
          <a href="#" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
          <ul class="social-network social-circle">
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoinstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          </ul>
      </div>
      <div class="col-md-3 col-sm-6 widget animated fadeIn delay-02" data-animation="fadeIn" data-animation-delay="02">
          <h3>Quick Link</h3>
          <ul class="our-services">
            <li><a href="#">Our Psychics</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">For Advisors</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
      </div>
      <div class="col-md-3 col-sm-6 widget animated fadeIn delay-03" data-animation="fadeIn" data-animation-delay="03">
        <h3>Flicker Feed</h3>
        <div class="footer-widget flickr-widget">
            <ul class="flickr-list">
              <li><a href="#"><img alt="" src="<?= asset('/images/flickr-01.jpg') ?>"></a></li>
              <li><a href="#"><img alt="" src="<?= asset('/images/flickr-02.jpg') ?>"></a></li>
              <li><a href="#"><img alt="" src="<?= asset('/images/flickr-03.jpg') ?>"></a></li>
              <li><a href="#"><img alt="" src="<?= asset('/images/flickr-04.jpg') ?>"></a></li>
              <li><a href="#"><img alt="" src="<?= asset('/images/flickr-05.jpg') ?>"></a></li>
              <li><a href="#"><img alt="" src="<?= asset('/images/flickr-06.jpg') ?>"></a></li>
              <!--<li><a href="#"><img alt="" src="<?= asset('/images/flickr-07.jpg') ?>"></a></li>
              <li><a href="#"><img alt="" src="<?= asset('/images/flickr-08.jpg') ?>"></a></li>
              <li><a href="#"><img alt="" src="<?= asset('/images/flickr-09.jpg') ?>"></a></li>-->
            </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 widget animated fadeIn delay-04" data-animation="fadeIn" data-animation-delay="04">
        <h3>Get in Touch</h3>
        <ul class="contact-info">
          <li><i class="fa fa-map-marker"></i> <span class="text">XYZ</span></li>
          <li><i class="fa fa-phone"></i> <span class="text">+ 91 9458624578</span></li>
          <li><i class="fa fa-envelope-o"></i> <span class="text">info@gmail.com</span></li>
          <li><i class="fa fa-globe"></i> <span class="text">http://www.xyz.com</span></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="downloads">
    <ul class="group">
    <li>
    <h3>Download it today:</h3>
    <a data-mobile-store="apple" href="#" target="_blank">
    <img alt="app-store" src="<?= asset('/images/app-store.png') ?>">
    </a>
    </li>
    <li>
    <h3>Download it today:</h3>
    <a data-mobile-store="google" href="#" target="_blank">
    <img alt="play-store" src="<?= asset('/images/google-play.png') ?>">
    </a>
    </li>
    </ul>
  </div>
</footer>
<div class="copyright-wrap">
  <div class="container">
    <div class="col-md-12">
      <p>Copyright © 2015. All rights reserved.By XYZ  </p>
    </div>
  </div>
</div>
<!---Footer Section End Here-->
<!---Login Modal Start Here-->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="Login-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="lineModalLabel">Sign In</h3>
      </div>
      <div class="modal-body inner">
      
        <!-- content goes here -->
		

{{--<div ng-controller="LoginController as vm">          --}}

                    <form action="/admin/login" method="POST">
                        {{--<p ng-bind="vm.error"></p>--}}
                    <!-- Email -->
                    <div class="form-group">
                        <div class="form-group">
						<label>Email</label>
                            <input class="form-control" placeholder="Email" name="email" type="text" autofocus>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <div class="form-group">
						<label>Password</label>
                            <input class="form-control" placeholder="Password" name="password" type="password">
                        </div>
                    </div>                    

                    <!-- Remember -->
                    <div class="remember">
                        <input type='checkbox' name='remember' value='1' ng-model="vm.user.remember">
                        Remember Me
                    </div>

                    <!-- Submit -->
                    <input type='submit' value="Login" class="btn btn-login" />

                    </form>            
        
{{--</div>--}}
      </div>
    </div>
  </div>
</div>
<!---Login Modal End Here-->
<!---Sign in Modal Start Here-->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="Login-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="lineModalLabel">Sign Up</h3>
      </div>
      <div class="modal-body inner">
        <!-- content goes here -->
        <form class="" role="form" method="POST"  name="registration" id="registration"  >
		{{ csrf_field() }}
            <div class="row">
                <div class="col-xs-6 col-md-12">
				<div class="form-group">
					<label>Sign Up as</label>
					<select class="form-control" required name="user_type" onchange="selectUserType()">
					<option value="client">Client</option>
					<option value="advisor">Advisor</option>
					</select>					
				</div>
				</div>
				</div>
				
			<div class="row">
				<div class="col-xs-6 col-md-12">				
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" placeholder="Name" type="text" required autofocus="">					
                  </div>
                </div>
                <!--<div class="col-xs-6 col-md-6">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input class="form-control" name="lastname" placeholder="Last Name" type="text" required value="{{ old('lastname') }}">
					@if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                  </div>
                </div>-->
            </div>
            <div class="form-group">
			 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label>Your Email</label>
              <input class="form-control" name="email" placeholder="Your Email" type="email" required="email" value="{{ old('email') }}">
			  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>
			</div>
            <div class="form-group">
			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label>Password</label>
              <input class="form-control" name="password" placeholder="Password" type="password" required="password">
			  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
			 </div>
			 
            <div class="form-group">
              <label for="">
                  Birth Date</label>
              <div class="row">
			  <div class="col-xs-4 col-md-4">
                      <select class="form-control" name="year" required>
                          <option selected value="">Year</option>
						  <?php 
						  for($y=1930;$y<=date('Y');$y++)
						  {
							 echo '<option value="'.$y.'">'.$y.'</option>';
						  }  
						  ?>
                      </select>
                  </div>
                  <div class="col-xs-4 col-md-4">
                      <select class="form-control" name="month" required>
                          <option selected value="">Month</option>
						  <option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option> 
                      </select>
                  </div>
                  <div class="col-xs-4 col-md-4">
                      <select class="form-control" name="day" required>                         
						  <option selected value="">Day</option>
						  <option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option> 
                      </select>
                  </div>
                  
              </div>
            </div>
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineCheckbox1" value="male" checked required>
                Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineCheckbox2" value="female" required>
                Female
            </label>  
			
			<div class="form-group">
              <label>Upload Profile Pic</label>
              <input type="file" accept='image/*' name="profile_pic" id="profile_pic" style="width:50%;">
			 </div>
			 <div class="form-group" id="sign-video">
              <label>Upload 5 Min Video</label>
              <input type="file" name="video" id="video" style="width:50%;">	
			 </div>	
			 
			<div class="form-group">
              <div class="checkbox">
                <label>
                <input type="checkbox" name="remember" id="remember" required>
                 I agree with the <a href="#">Terms and Conditions</a>. </label>
              </div>
            </div>
            <div class="form-group">
                <label id="sign_status" style="color:red" > </label>
            </div>
            <button class="btn btn-lg btn-sign btn-block" type="button" onclick="register()"> Sign up </button>
            </form>
      </div>
    </div>
  </div>
</div>
<!---Sign in Modal End Here-->
<!---Login Modal Start Here-->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <iframe width="100%" height="315px" src="https://www.youtube.com/embed/X8Cf5rUh9lw" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<!---Login Modal End Here-->
<script type="text/javascript">
$(document).ready(function () {
    /*----------------------------------------------------*/
  /*  Animation Progress Bars
  /*----------------------------------------------------*/

  $("[data-progress-animation]").each(function() {
    
    var $this = $(this);
    
    $this.appear(function() {
      
      var delay = ($this.attr("data-appear-animation-delay") ? $this.attr("data-appear-animation-delay") : 1);
      
      if(delay > 1) $this.css("animation-delay", delay + "ms");
      
      setTimeout(function() { $this.animate({width: $this.attr("data-progress-animation")}, 800);}, delay);

    }, {accX: 0, accY: -50});

  });
});
</script>
 <!---JS  -->
        <script type="text/javascript" src="<?= asset('/js/sign/register.js') ?>"></script>
        <script type="text/javascript" src="<?= asset('/js/home.js') ?>"></script>
		<script type="text/javascript" src="<?= asset('/js/contact.js') ?>"></script>
		<script type="text/javascript" src="<?= asset('/js/smoothscroll.js') ?>"></script>
		<script type="text/javascript" src="<?= asset('/js/script.js') ?>"></script>
		<script type="text/javascript" src="<?= asset('/js/owl.carousel.min.js') ?>"></script>
		<script src="<?= asset('/js/bootstrap.offcanvas.js') ?>"></script>
		
        <!-- AngularJS Application Scripts -->
        <!--<script src="<? //= asset('/app.js') ?>"></script>-->
        
		
    </body>
</html>