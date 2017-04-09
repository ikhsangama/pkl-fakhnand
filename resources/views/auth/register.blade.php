@extends('layouts.app')

@section('content')
<body>

  <div class="account-pages"></div>
  <div class="clearfix"></div>
  <div class="wrapper-page">
      <div class="text-center">
          <a href="index.html" class="logo"><span>NEKANEKA</span></span></a>
          <h5 class="text-muted m-t-0 font-600">The Right Tour for The Right Traveller</h5>
      </div>
  	<div class="m-t-40 card-box">
          <div class="text-center">
              <h4 class="text-uppercase font-bold m-b-0">Register</h4>
          </div>
          <div class="panel-body">
              <form class="form-horizontal m-t-20" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="form-group ">
                  <div class="col-xs-12">
                    <input class="form-control" name="nama" type="text"  placeholder="Nama" required autofocus>
<!-- validation             -->
              @if ($errors->has('nama'))
              <!-- <div class="container red-text text accent-3"> -->
                {{ $errors->first('nama') }}
              <!-- </div> -->
              @endif
<!-- endvalidation             -->
                  </div>
                </div>

    						<div class="form-group ">
    							<div class="col-xs-12">
    								<input class="form-control" name="email" type="email"  placeholder="Email" required>
                    <!-- validation             -->
                                  @if ($errors->has('email'))
                                  <!-- <div class="container red-text text accent-3"> -->
                                    {{ $errors->first('email') }}
                                  <!-- </div> -->
                                  @endif
                    <!-- endvalidation             -->
    							</div>
    						</div>

    						<div class="form-group ">
    							<div class="col-xs-12">
    								<input class="form-control" name="password" type="password" required="" placeholder="Password">
                    <!-- validation             -->
                                  @if ($errors->has('password'))
                                  <!-- <div class="container red-text text accent-3"> -->
                                    {{ $errors->first('password') }}
                                  <!-- </div> -->
                                  @endif
                    <!-- endvalidation             -->
    							</div>
    						</div>

    						<!-- <div class="form-group"> -->
    							<!-- <div class="col-xs-12"> -->
    								<!-- <div class="checkbox checkbox-custom"> -->
    									<!-- <input id="checkbox-signup" type="checkbox" checked="checked"> -->
    									<!-- <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label> -->
    								<!-- </div> -->
    							<!-- </div> -->
    						<!-- </div> -->

    						<div class="form-group text-center m-t-40">
    							<div class="col-xs-12">
    								<button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
    									Register
    								</button>
    							</div>
    						</div>

		</form>

          </div>
      </div>
      <!-- end card-box -->

<div class="row">
	<div class="col-sm-12 text-center">
		<p class="text-muted">Already have account?<a href="page-login.html" class="text-primary m-l-5"><b>Sign In</b></a></p>
	</div>
</div>

  </div>
  <!-- end wrapper page -->




<script>
      var resizefunc = [];
  </script>

  <!-- jQuery  -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/detect.js"></script>
  <script src="assets/js/fastclick.js"></script>
  <script src="assets/js/jquery.slimscroll.js"></script>
  <script src="assets/js/jquery.blockUI.js"></script>
  <script src="assets/js/waves.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.nicescroll.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>

  <!-- App js -->
  <script src="assets/js/jquery.core.js"></script>
  <script src="assets/js/jquery.app.js"></script>


</body>
@endsection
