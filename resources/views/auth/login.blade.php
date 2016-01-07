@include('header')
<div class="row">
  <div class="col-lg-8 col-lg-offset-2 col-sm-12">
    <form class="form-horizontal" action="{{ route('login') }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
      <h2 class="form-heading">Log in</h2>
      <div class="form-group">
        <label for="email" class="col-lg-3 control-label">Email address</label>
        <div class="col-lg-9">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-lg-3 control-label">Password</label>
        <div class="col-lg-9">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-3 col-lg-offset-3">
          <button class="btn btn-primary form-control" type="submit">Sign in</button>
        </div>
        <div class="col-lg-6 bottom-aligned">
            <span><a href="{{ route('register') }}">Don't have an account? Register</a></span>
          </div>
      </div>
    </form>
  </div>
</div>
@include('footer')