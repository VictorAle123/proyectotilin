
   <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 <!-- Fonts -->
 <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
 

<style>
    
    body{

     
  /* background-image: linear-gradient(to bottom, #336699, #66ccff); */
 
        background-image: url(./image/slider3.png);
        background-position:center; */

        

    }
    

        </style>


    </head>
    <body class="font-sans text-gray-900 antialiased">

   



          

    
    <!-- Session Status -->
    
   
    <x-auth-session-status class="mb-4" :status="session('status')" />


            


     <div id="contenedor-padre" style="height: 600px; display: grid; place-items:center;   ">

            

     <div class="row">

  <div id="hijo1" style="  width: 400px; ">
  <img class=" card-img" src="{{ asset('image/login.png') }}" alt="Imagen 1">


</div>


  <div id="hijo2" style="background-color: #c1c5c7; display: grid;  width: 400px; margin-left: 0px;">

  <div>


  <center> <p style="font-size: 30px; margin-top: 20px;  ">Inicio se sesion</p> </center>
        </div>
  
  <!-- Email Address -->
  <div>

  <form method="POST" action="{{ route('login') }}">
        
  @csrf

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
<div>
<x-text-input id="email" class="block mt-1 w-full" style="width: 300px; margin-left: 40px; " type="email" placeholder="Correo electronico" name="email" :value="old('email')" required autofocus autocomplete="username" />


</div>
        </div>

        <!-- Password -->
        <div class="mt-4" >
            
            


            <div> 
            <x-text-input id="password"  class="block mt-1 " style="width: 300px; margin-left: 40px;"
                            type="password"
                            placeholder="Contraseña"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            </div>

        </div>

        

        <div class="place-items:center ">
            @if (Route::has('password.request'))
                
            @endif

          <center>  <button id="button" class="btn btn-primary btn-lg"> {{ __('inicio de sesion') }} </button>  <center> 
            
        </div>
    </form>
 
</div>
</div>


</div>
    
    </body>
</html>
