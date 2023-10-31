<style>
/* sign in page css start */
section.admin_account {
  padding: 50px 0px;
}

section.admin_account {
  padding: 50px 0px 100px 0;
}

.login_account {
  padding: 50px 25px;
  background-color: #f7f7f7;
  width: 50%;
  margin: 0 auto;
}

.login_account form {
  text-align: center;
  width: 100%;
}

.login_account form input {
  display: block;
  margin: 0;
  margin-bottom: 30px;
  width: 100%;
  padding: 15px 25px 15px 25px;
  border-radius: 0px;
  border: 1px solid #e4e4e4;
}

.sign_in_btn a {
  color: black;
  padding: 10px 40px;
  font-family: 'Roboto';
  font-size: 17px;
  transition: all .6s ease;
  border: 1px solid black;
}

.sign_in_btn a:hover {
  background-color: #000;
  color: #fff;
}

.sign_in_btn {
  padding: 20px 0px;
  position: relative;
}

.sign_in_btn::before {
  content: "";
  position: absolute;
  background: #e4e4e4;
  height: 2px;
  bottom: -20px;
  width: 100%;
}

.create_account {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 40px 0px 0px 0px;
}

.create_account a {
  font-size: 15px;
  color: #2a2a2c;
  transition: all 0.3s linear;
}

.create_account a:hover {
  color: #888480;
}

section.banner_img {
  position: relative;
}

.inner-bantxt {
  position: absolute;
  top: 50%;
  transform: translate(140px, -50%);
}

.inner-bantxt h2 {
  color: white;
  font-size: 65px;
  font-family: 'Crawling Personal Used';
}

.inner-bantxt ul {
  display: flex;
  gap: 30px;
  padding: 16px 0 0px 0;
}

.inner-bantxt ul li:nth-child(2):before {
  position: absolute;
  content: "";
  width: 2px;
  left: -17px;
  top: 2px;
  height: 20px;
  background: white;
  transform: rotate(24deg);
}

.inner-bantxt ul li {
  position: relative;
}

.inner-bantxt ul li a {
  font-size: 18px;
  font-family: 'Roboto';
  color: #ffffff9c;
}

.inner-bantxt ul li:nth-child(2) a {
  color: white;
}

.innerban-img {
  position: relative;
  width: 100%;
}

.innerban-img:before {
  width: 100%;
  height: 100%;
  background: black;
  position: absolute;
  content: "";
  opacity: 0.6;
}

h2.title {
  font-size: 63px;
  text-align: center;
  position: relative;
  padding: 0 0 50px 0;
  text-transform: capitalize;
  font-family: 'Crawling Personal Used';
}

h2.title::before {
  position: absolute;
  content: "";
  width: 193px;
  height: 3px;
  background: #666666;
  bottom: 50px;
  left: 50%;
  transform: translate(-50%);
}

.card-body .text-md-end {
    display: flex;
    font-size: 20px;
    font-family: math;
}

button.btn.btn-primary{
	color: white;
    padding: 10px 40px;
    font-family: monospace;
    font-size: 17px;
    transition: all .6s ease;
    border: 1px solid black;
	background:black;
	cursor: pointer;
	display: flex;

}


  button.btn.btn-primary:hover {
    background: transparent;
    color: black;
}
/* sign in page css end */
</style>



<section class="admin_account">
      <div class="container">
        <h2 class="title">Register</h2>
        <div class="row">
          <div class="col-lg-12">
            <div class="login_account">
			<div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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