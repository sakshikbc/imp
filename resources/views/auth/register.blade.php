@extends('layouts.master')

@section('content')

      <div class="mainOverLay">
          <div class="center-otp-box text-center">
              <img width="80" src="{{asset('images/smartphone-otp.svg')}}" alt="">
              <input class="otp-input" type="tel" maxlength="4" name="verifyOtp" autofocus>
              <div class="otpFailedMessage text-danger" style="display: none"> Otp Failed </div>
              <div class="otpSuccessMessage text-success" style="display: none"> Otp Matched </div>
              <div class="loadingImage" style="display: none;"> 
                  <img src="{{asset('images/preloader.svg')}}" alt="">
              </div>
              <br>
              <a href="" onclick="window.location.reload();" class="close-otp"> <i class="aqil-icon-close"></i> </a>
              <p>Didn't get Otp? <a class="registerCheck resendOtp">resend</a></p>
              <div class="otpInfoMessage text-capitalize"></div>
          </div>
      </div>
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" id="signupform" method="post" 
                    data-redirect="{{ url('/') }}" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                            @if ($errors->has('phone'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" id="bt_submit" class="btn btn-primary registerCheck" data-toggle="modal" data-target="#send">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</section>
<script type="text/javascript">
 $(document).ready(function () {
    $("#send").click(function(){
      $('#verify').modal('show');
  });
});
 $('#bt_submit').attr("disabled", true);
 var token = $('input[name="_token"]').val();
  $(".registerCheck").click(function(){
    var phone = $('input[name="phone"]').val();
      if(!$("#signupform").valid()){
        return false;
      }
      $('.mainOverLay').show();
      $('.otpInfoMessage').text('otp has been sent to your mobile no ' + phone );
        $.ajax({
           type: 'POST',
           url: '/requestOtp',
           data: { '_token': token, 'phone': phone },
           success: function(data){
              if(data['status'] == 'failed'){
                $('.mainOverLay').hide();
              }
           }
        });
  });
  $('input[name="verifyOtp"]').keyup(function() {
      var check = false;
      var verifyOtp = $('input[name="verifyOtp"]').val();
      $('.otpFailedMessage').hide();
      $('input[name="verifyOtp"]').each(function() {
          if ($(this).val().length == 4) {
              check = true;
          }
      });
      if (check) {
        $('input[name="verifyOtp"]').prop('readonly', true);
        $('input[name="verifyOtp"]').prop('disabled', true);
        $.ajax({ 
           type: 'POST',
           url: '/verifyOtp',
           data: {'_token': token, 'verifyOtp': verifyOtp },
           success: function(data) {
              if (data['status'] == 'success') {
                $('input[name="verifyOtp"]').attr('readonly', true);
                $('.otpSuccessMessage').show();
                $('.loadingImage').show();
                $('#signupform').submit();
                $('input"]').attr('disabled', true);
              } else {
                $('input[name="verifyOtp"]').attr('readonly', false);
                $('input[name="verifyOtp"]').prop('disabled', false);
                $('.otpFailedMessage').show();
              }
           }
        });
      }
  });

</script>
@endsection
