@include('header')
<div class="row">
  <div class="col-lg-8 col-lg-offset-2 col-sm-12">
    <form class="form-horizontal" action="{{ route('register') }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
      <h2 class="form-heading">Register an account</h2>
      <div class="form-group">
        <label for="name" class="col-lg-3 control-label">Name</label>
        <div class="col-lg-9">
          <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required="" autofocus="" value="{{ old('name') }}">
          {!! $errors->first('name', "<span class='error'>:message</span>") !!}
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-lg-3 control-label">Email address</label>
        <div class="col-lg-9">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="" value="{{ old('email') }}">
          {!! $errors->first('email', "<span class='error'>:message</span>") !!}
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-lg-3 control-label">Password</label>
        <div class="col-lg-9">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
          {!! $errors->first('password', "<span class='error'>:message</span>") !!}
        </div>
      </div>
      <div class="form-group">
        <label for="password_confirmation" class="col-lg-3 control-label">Re-type Password</label>
        <div class="col-lg-9">
          <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password confirmation" required="">
          {!! $errors->first('password_confirmation', "<span class='error'>:message</span>") !!}
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-3 col-lg-offset-3">
          <button class="btn btn-primary" type="submit">Register</button>
        </div>
        <div class="col-lg-3 bottom-aligned">
          <span><a href="{{ route('login') }}">Already registered? Log in</a></span>
        </div>
      </div>
    </form>
  </div>
</div>
@include('footer')