<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ROCit</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <header class="p-3 bg-info">
            <div>
                @if (Route::has('login'))
                    <div class="d-flex justify-content-between">
                        @auth
                        @if (Auth::user()->role_id === 1)
                            <p>U bent ingelogd als beheerder.</p>
                            <a class="text-dark font-weight-bold" href="{{ route('dashboard') }}">Beheerder dashboard</a>
                        @elseif (Auth::user()->role_id === 2)
                            <p>U bent ingelogd als dealer.</p>
                            <a class="text-dark font-weight-bold" href="{{ route('dashboard') }}">Dealer dashboard</a>
                        @endif
                        @else
                            <a class="text-dark font-weight-bold" href="{{ route('login') }}">Inloggen</a>
                        {{-- @if (Route::has('register'))
                            <a class="text-dark font-weight-bold" href="{{ route('register') }}">Registreren</a>
                        @endif --}}
                        @endauth
                    </div>
                @endif
            </div>
        </header>

        <main>
            <div>
                <h1 class="d-flex justify-content-center pt-4 pb-3">Welkom op ROCit!!</h1>
                <img src="img/148868-car-brands.jpg" alt="car_brands" class="img-responsive center-block d-block mx-auto pb-5">
                <p class="d-flex justify-content-center">Op deze website kan u als dealers een auto dealen als u ingelogd bent. U kan niet zelf account aanmaken.</p> 
                <p class="d-flex justify-content-center">Als u een account wilt, dan kun u contact met ons opnemen met de nummer die onderaan de pagina zit.</p>
                <p class="d-flex justify-content-center">Dan kan de beheerder van de website een account voor u maken, zodat u een auto kan dealen.</p>
            </div>
        </main>

        <footer class="mt-4 p-3 bg-primary">
            <div class="d-flex justify-content-between pt-4">
                <h5>ROCit</h5>
                <p>Adres: Terheijdenseweg 350, 4826 AA Breda</p>
                <p>Telefoon: 076 573 3444</p>
                <p>Copyright ©2021 ROCit</p>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

    </body>
</html>
