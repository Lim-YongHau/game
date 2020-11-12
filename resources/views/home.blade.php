<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Game Time</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        
    </head>
    <body>
    <main role="main">
      

    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-image: linear-gradient(90deg, rgba(255, 0, 0, 0.7) 24.3%, rgba(255, 0, 0, 0.7) 78.3% );">
            <div class="container">
            <a class="navbar-brand badge-info text-white h4 rounded-pill" href="{{ url('/home') }}">
                    {{ config('Game Time', 'Game Time') }}
                  
                </a>
            
                <a class="navbar p-3 mb-2  text-white h5" href="{{ url('/products') }}">
                    {{ config('Product', 'My Store') }}
                    <span> <img src="{{ asset('images//buildings.png')}}"  width="23" height="23" ></span>
                </a>
                <a class="navbar p-3 mb-2 text-white h5" href="{{ url('/myCart') }}">
                    {{ config('show Cart', 'show Cart') }}
                    <span> <img src="{{ asset('images//shopping-cart.png')}}"  width="23" height="23" ></span>
                </a>
                <a class="navbar p-3 mb-2  text-white h5" href="{{ url('/myorder') }}">
                    {{ config('My Order', 'My Order') }}
                    <span> <img src="{{ asset('images//order.png')}}"  width="23" height="23" ></span>
                </a>
                <a class="navbar p-3 mb-2 text-white h5" href="{{ url('/insertFeedback') }}">
                    {{ config('My Feedback', 'My Feedback') }}
                    <span> <img src="{{ asset('images//rating.png')}}"  width="23" height="23" ></span>
                </a>
                

                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                 -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                                            
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white h5" href="{{ route('login') }} ">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white h5" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    <span> <img src="{{ asset('images//plus.png')}}"  width="23" height="23" ></span>
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="/UserProfile">User Profile</a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="">
        @if (session('status'))
        <div class ="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
        @endif

      </div>

            
  
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/title (1).jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/title (2).jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/title (3).jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
<p></p>

<div class="w3-row w3-light">
  <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="{{ asset('images/equipment7.jpg')}}" style="width:100%">
          <span class="w3-tag w3-display-topleft w3-container w3-red">HOT</span>
          <div class="w3-display-middle w3-display-hover">
            <a href="/products">
            <button  class="w3-button w3-black" >Buy now <i class="fa fa-shopping-cart"></i></button>
            </a>
          </div>
        </div>
        <p>Small Box<br><b>RM 24</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="{{ asset('images/Surrounding2.jpg')}}" style="width:100%">
          <span class="w3-tag w3-display-topleft ">New</span>
          <div class="w3-display-middle w3-display-hover">
          <a href="/products">
            <button  class="w3-button w3-black" >Buy now <i class="fa fa-shopping-cart"></i></button>
            </a>
          </div>
        </div>
        <p>Men Hoodie<br><b>RM 50</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="{{ asset('images/game (12).jpg')}}" style="width:63%">
          <span class="w3-tag w3-display-topleft w3-container w3-red">HOT</span>
          <div class="w3-display-middle w3-display-hover">
          <a href="/products">
            <button  class="w3-button w3-black" >Buy now <i class="fa fa-shopping-cart"></i></button>
            </a>
          </div>
        </div>
        <p>Arms (Game)<br><b>RM 239</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="{{ asset('images/doll3.jpg')}}" style="width:100%">
          <span class="w3-tag w3-display-topleft w3-container w3-teal">Discount</span>
          <div class="w3-display-middle w3-display-hover">
          <a href="/products">
            <button  class="w3-button w3-black" >Buy now <i class="fa fa-shopping-cart"></i></button>
            </a>
          </div>
        </div>
        <p>Jenny Turtle (Doll)<br><b>Rm 40</b></p>
      </div>
    </div>

  </div>


  <br>
  
  <div class="w3-padding-64 w3-blue">
  <div class="w3-row-padding">
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b> Pokémon Sword & Pokémon Shield</b></h1>
      <h1 class="w3-xxxlarge w3-text-yellow"><b>Introduction</b></h1>
      <p> The official strategy guide from Pokémon for the Pokémon Sword and Pokémon Shield video games. Get the tips you need for each part of your journey with the step-by-step walkthrough and hints in Pokémon Sword & Pokémon Shield The Official Galar Region Strategy Guide. The Galar region is ready for you--are you ready for it? With the official strategy guide to Pokémon Sword and Pokémon Shield, prepare yourself to take on the Gym Challenge and battle your way to the Champion Cup for your chance to become the next Champion! Here's what you'll find inside:
Complete walkthrough of the new Pokémon adventure! Lists of moves, items, and more--including how to get them! Info on all of the new features, including Dynamaxing and Max Raid Battles! Information on the Gigantamax Pokémon you may encounter during your adventure! Guides to the Wild Area and all you can do there, on your own and with friends! Pullout map of the region!  <span class="w3-xlarge  w3-text-orange">Price:RM 100</span></p>
      
    </div>
    <div class="w3-col l4 m6">
    <iframe width="450" height="470" src="https://www.youtube.com/embed/-Nl_t9yeV0k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <!-- <img src="game1.jpg" class="w3-image w3-right w3-hide-small" width="600" height="500"> -->
      
    </div>
  </div>
</div>


<!-- Clarity Section -->
<div class="w3-padding-64 w3-red">
  <div class="w3-row-padding">
    <div class="w3-col l4 m6">
    <iframe width="450" height="470" src="https://www.youtube.com/embed/Dk56OpKuFts" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b>Fortnite</b></h1>
      <h1 class="w3-xxxlarge w3-text-yellow"><b>Introduction</b></h1>
      <p><span class="w3-xlarge">Price:RM 60</span> The Fortnite: Deep Freeze Bundle will include the Fortnite Battle Royale game, and premium content, including the Frostbite Outfit, Cold Front Glider, Chill-Axe Pickaxe, Freezing Point Back Bling, and 1, 000 V-Bucks, which can be used to purchase in-game items, such as outfits and the Premium Battle Pass. In Fortnite Battle Royale, players squad up and compete to be the last one standing in 100-player PvP, where they'll build cover, battle opponents, and survive the longest to earn their victory.</p>
    </div>
  </div>
</div>
     
    </div>


    </main>
        

            
        </div>
    </body>

    <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>Game Time</h3>
      <p></p>
    </div>
  
    <div class="w3-third">
      <h3>Context Us</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Bryan</span><br>
          <span>O16-7565998</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lim</span><br>
          <span>010-9999999</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Sports</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Waterproof</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">London</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Fashion</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">expensive</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">DIY</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Deserve</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Men</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Family</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">New</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Girl</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Shopping</span>
       
      </p>
    </div>

  </div>
  </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</html>
