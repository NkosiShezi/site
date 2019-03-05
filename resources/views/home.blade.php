<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Neo Dynamics</title>

  <style>
      header{
        background:url('img/tech1.jpg');
        background-size: cover;
        background-position: center;
        min-height: 400px;
      }
      .section {
            padding-top:4vw;
            padding-bottom:4vw;

      }

      .tabs .indicator {
            background-color:#3f51b5
      }

      .tabs .tab a:hover, .tabs .tab a.active {
            background-color: transparent;
      }

      @media screen and (max-width: 670px) {
          header{
              min-height:200px
          }
      }

        body{min-height:200vh;}
        .nav-wrapper{
        transition:500ms ease;
        background:transparent;
        }
        .nav-wrapper.scrolled{
        background:#19005F;
        }
  </style>


</head>
<body>


  <!-- navbar -->
    <header>
        <div class="navbar-fixed">
            <nav class="nav-wrapper" >
                <div class="container">
                    <a href="" class="brand-logo">Photo Ninja</a>
                    <a href="" class="sidenav-trigger" data-target="mobile-menu">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">Photos</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="sidenav grey lighten-2" id="mobile-menu">
                        <li><a href="#">Photos</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

  <!-- photo / grid -->
  <section class="container section" id="photos">
      <div class="row">
            <div class="col s12 l4">
                <img src="{{URL::asset('img/portrait.jpg')}}" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 l6 offset-l1">
                <h2 class="indigo-text text-darken-4">Portrait</h2>
                <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
            </div>
      </div>
      <div class="row">
            <div class="col s12 l4 push-l7 offset-l1">
                <img src="{{URL::asset('img/city.jpg')}}" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 l6 pull-l5 right-align offset-l1">
                <h2 class="indigo-text text-darken-4">City</h2>
                <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
            </div>
      </div>
      <div class="row">
            <div class="col s12 l4">
                <img src="{{URL::asset('img/nature.jpg')}}" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 l6 offset-l1">
                <h2 class="indigo-text text-darken-4">Nature</h2>
                <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
            </div>
      </div>
  </section>  



  <!-- parallax -->
    <div class="parallax-container">
      <div class="parallax">
        <img src="{{URL::asset('img/scroll1.png')}}" alt="" class="resposive-img">
      </div>
    </div>
    

  <!-- services / tabs -->

  <section class="container section" id="services">
      <div class="row">
            <div class="col s12 l4">
                <h2 class="indigo-text text-darken-4">What i do...</h2>
                <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
                <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
            </div>
            <div class="col s1 l5 offset-l2">
                <ul class="tabs">
                    <li class="tab col s6">
                        <a href="#photography" class="indigo-text text-darken-4">Photography</a>
                    </li>
                    <li class="tab col s6">
                        <a href="#editing" class="indigo-text text-darken-4">Editting</a>
                    </li>
                </ul>
                <div class="col s12" id="photography">
                    <p class="flow-text indigo-text text-darken-4">PHOTOGRAPHY</p>
                    <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
                    <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p> 
                </div>
                <div class="col s12" id="editing">
                    <p class="flow-text indigo-text text-darken-4">EDITING</p>
                    <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
                    <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p> 
                </div>
            </div>
      </div>
      
  </section>

  <!-- parallax -->

 <div class="parallax-container">
      <div class="parallax">
        <img src="{{URL::asset('img/citylights1.jpg')}}" alt="" class="resposive-img">
      </div>
    </div>
    
  <!-- contact form -->

  <div class="container">
      <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
      <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
      <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
      <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
      <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
      <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
      <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
      <p>Cras volutpat mattis iaculis. Mauris ullamcorper porttitor metus. Morbi pretium eget lacus id accumsan</p>
  </div>


  <!-- footer -->

  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
          $('.sidenav').sidenav();  
          $('.materialboxed').materialbox();  
          $('.parallax').parallax();
          $('.tabs').tabs();
          

          $(window).scroll(function(){
	            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
            });

    });
  </script>
</body>
</html>
