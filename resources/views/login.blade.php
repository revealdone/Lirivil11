@extends('layouts.app')

@section('content')

        <div class="wrapper">
            <span class="icon-close">
            <ion-icon name="close"></ion-icon>
            </span>
          <div class="form-box login">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" id="email" name="email" required>
                <label>Email</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" id="password" name="password" required>
                <label>Password</label>
              </div>
              <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password?</a>
              </div>
              
              <button type="submit" class="btnLogin-po">Login</button>
              <div class="login-register">
                <p>Dont't have an account? <a href="#" class="register-link">
                  Register
                </a></p>
              </div>
            </form>
          </div>

          <div class="form-box register">
            <h2>Registration</h2>
            <form action="#">
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" required>
                <label>Username</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required>
                <label>Email</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" required>
                <label>Password</label>
              </div>
              <div class="remember-forgot">
                <label><input type="checkbox">I agree to the
            terms & conditions
            </label>
                
              </div>
              
              <button type="submit" class="btnLogin-po">Register</button>
              <div class="login-register">
                <p>Already have an account? <a href="#" class="login-link">
                  Login
                </a></p>
              </div>
            </form>
          </div>

        </div>
        {{-- <footer class="custom-footer">
          <p>Copyright © <span id="currentYear"></span> Muhamad Wahid Romdoni.</p>
         
      </footer> --}}
        <!-- localhost url -->
        <!-- /?= base_url('pages/about'); ?> -->
        <!--  -->
      
      
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        
        <script src="{{ asset('js/asd.js') }}"></script>
        <script src="{{ asset('js/asd1.js') }}"></script>
        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
          </body>
        </html>
        @endsection
