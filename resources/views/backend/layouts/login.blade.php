<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin Login</title>
  </head>
  <body>


    <div class="row pt-5 ">
        <div class="col-6 offset-3 py-4 bg-info">
            <section class="card">
                <header class="card-header bg-secondary text-center">
                    <span class="text-light font-weight-bold">Admin Login</span>

                     <!--Success or Error Msg -->
                @if(session('message'))
                    <div class="alert alert-{{ session('type') }}">
                         <p class="text-center text-bolder text-dark">{{ session('message') }}</p>
                    </div>
                 @endif
                </header>
                <div class="card-body pb-5">
                    <form  action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror " id="email" name="email" value="{{ old('email') }}"  placeholder="Enter email">
                            @error('email') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" >Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Password">
                            @error('password') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group text-right  ">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>

                </div>
            </section>

        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
