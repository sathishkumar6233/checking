<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>website</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/image/Argentina - Asociación del Fútbol Argentino - 3 Títulos.png" alt=""class="rounded-pill" width="40px" height="40px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link px-3 active" aria-current="page" href="/">home</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link px-3" href="/About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="/contact">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="/service">service</a>
          </li> -->
         
          <li class="nav-item">
            <a class="nav-link px-3" href="/blogs">Blogs</a>
          </li>
        
        <!-- <li class="nav-item">
            <a class="nav-link px-3" href="/login">login</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link px-3" href="/Register">Register</a>
          </li> -->
        </ul>
        <div class="d-flex">
          <a href="#"><img src="/image/facebook (2).png" alt=""width="40px" height="40px"></a>&nbsp;&nbsp;
          <a href="#"><img src="/image/skype.png" alt=""width="40px" height="40px"></a>&nbsp;&nbsp;
          <a href="#"><img src="/image/youtube (2).png" alt=""width="40px" height="40px"></a>
        </div>
      </div>
    </div>
  </nav>
 
    <div id="our_slider" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#our_slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#our_slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#our_slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/image/When is Argentina vs France - World Cup final 2022_ TV channel, live stream.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="/image/download (18).jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="/image/download (19).jpg" class="d-block w-100" alt="">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#our_slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#our_slider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    @yield('content')

<section class="container-fluid py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-12">
<img class="w-100" src="/image/🔷SELECCIÓN DE ARGENTINA ➽ SELECCIÓN DE FRANCIA 📅18_12_2022 🏆Mundial de Catar 2022 Final.png" alt=" about Us">
      </div>
<div class="col-lg-7 col-12">
  <h2>About Us</h2>
  <p>
    LIONEL MESSI and Argentina have returned home to Buenos Aires with the World Cup trophy to wild celebrations. The
  thrilling final went down to pure shoot-out drama with both Kylian Mbappe and Messi…LIONEL MESSI and Argentina have
  returned home to Buenos Aires with the World Cup trophy to wild celebrations.
  </p>
  <p>
    LIONEL MESSI and Argentina have returned home to Buenos Aires with the World Cup trophy to wild celebrations. The
  thrilling final went down to pure shoot-out drama with both Kylian Mbappe and Messi…LIONEL MESSI and Argentina have
  returned home to Buenos Aires with the World Cup trophy to wild celebrations.
  </p>
  <h2 class="display-6">Follow Us</h2>
    <a href="#"><img src="/image/facebook (2).png" alt=""width="40px" height="40px"></a>&nbsp;&nbsp;
    <a href="#"><img src="/image/skype.png" alt=""width="40px" height="40px"></a>&nbsp;&nbsp;
    <a href="#"><img src="/image/youtube (2).png" alt=""width="40px" height="40px"></a>&nbsp;&nbsp;
    <a href="#"><img src="/image/linkedin.png" alt=""width="45px" height="45px"></a>
</div>
    </div>
  </div>
</section>
<section class="container-fluid py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="display-6"><b>Our Team</b></h2>
        <p>Argentina has appeared in a World Cup final six times; a record equalled by Italy and surpassed only by Brazil and
        Germany.</p>
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">
      </div>
    </div>
<div class="row pt-5">
  <div class="col-12 col-lg-3 mb-4">
<div class="border p-3 text-center shadow-lg">
  <img class="img-fluid" src="/image/Messi selección Argentina ⭐⭐⭐.jpg" width="150px" height="150px">
  <h5 class="py-2">LIONEL MESSI</h5>
  <p>Lionel Messi, (born June 24, 1987, Rosario, Arg.), Argentine-born football (soccer) player.</p>
  <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-dark">Get a Quote</button>
</div>
  </div>
  <div class="col-12 col-lg-3 mb-4">
    <div class="border p-3 text-center shadow-lg">
      <img class="img-fluid" src="/image/Silueta de Emiliano Martínez selección Argentina AFA ⭐⭐⭐🇦🇷.png" width="92px" height="150px">
      <h5 class="py-2">EMILIANO MARTINEZ</h5>
      <p>Damián Emiliano Martínez (born 2 September 1992) is a goalkeeper Argentina national team.</p>
      <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-dark">Get a Quote</button>
    </div>
      </div>
      <div class="col-12 col-lg-3 mb-4">
        <div class="border p-3 text-center shadow-lg">
          <img class="img-fluid" src="/image/download (20).jpg" width="125px" height="150px">
          <h5 class="py-2">DI MARIA</h5>
          <p> Argentine professional footballer who plays as a right winger or attacking midfielder.</p>
          <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-dark">Get a Quote</button>
        </div>
          </div>
          <div class="col-12 col-lg-3 mb-4">
            <div class="border p-3 text-center shadow-lg">
              <img class="img-fluid" src="/image/Lautaro Martínez diseño.jpg" width="95px" height="120px">
              <h5 class="py-2">LAUTRO MARTINEZ</h5>
              <p>Argentine professional footballer who plays as a striker or second-striker player.</p>
              <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-dark">Get a Quote</button>
            </div>
              </div>
              <div class="col-12 col-lg-3 mb-4">
                <div class="border p-3 text-center shadow-lg">
                  <img class="img-fluid" src="/image/Messi y Julian Álvarez selección Argentina AFA silueta.jpg" width="112px" height="150px">
                  <h5 class="py-2">JULIAN ALVARE</h5>
                  <p>He was a key member of the Argentina team that won the 2022 FIFA World Cup.</p>
                  <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-dark">Get a Quote</button>
                </div>
                  </div>
                  <div class="col-12 col-lg-3 mb-4">
                    <div class="border p-3 text-center shadow-lg">
                      <img class="img-fluid" src="/image/Sticker Portrait Ronaldinho.png" width="155px" height="150px">
                      <h5 class="py-2">LEANDRO PAREDES</h5>
                      <p>Argentine professional footballer who plays as a defensive midfielder player soccer.</p>
                      <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-dark">Get a Quote</button>
                    </div>
                      </div>
                      <div class="col-12 col-lg-3 mb-4">
                        <div class="border p-3 text-center shadow-lg">
                          <img class="img-fluid" src="/image/Paulo Dybala art silueta.jpg" width="155px" height="150px">
                          <h5 class="py-2">DYBALA</h5>
                          <p>Paulo Exequiel Dybala (born 15 November 1993) is an Argentine professional footballer .</p>
                          <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-dark">Get a Quote</button>
                        </div>
                          </div>
                          <div class="col-12 col-lg-3">
                            <div class="border p-3 text-center shadow-lg">
                              <img class="img-fluid" src="/image/ESPN __ Great Controversies.jpg" width="135px" height="150px">
                              <h5 class="py-2">DE PAUL</h5>
                              <p>Rodrigo De Paul. Rodrigo Javier De Paul Spanish pronunciation born 24 May 1994.</p>
                              <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-dark">Get a Quote</button>
                            </div>
                              </div>
</div>
  </div>
</section>
<section class="container-fluid py-5">
<div class="container">
  <div class="row">
    <div class="col-12 text-center">
      <h2 class="display-6"><b> Meet Our Team</b></h2>
      <p>It's a wonderfull opporunities to meet a star player. Don't miss the chance.</p>
      <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/image/favourites.png" alt="star" width="30px" height="30px">
    </div>
  </div>
<div class="row pt-5">
  <div class="col-12 col-lg-10 offset-lg-1">
   <div class="row">
    <div class="col-12 col-lg-4">
      <div class="card shadow-lg">
        <img src="/image/Messi (2).jpg" class="card-img-top" alt="...">
        <div class="card-body text-center py-3">
          <h4><B>LIONEL MESSI</B></h4>
          <h5 class="mb-3"> Right wing</h5>
          <a href="#"><img src="/image/facebook (2).png" alt=""width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#"><img src="/image/skype.png" alt=""width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#"><img src="/image/youtube (2).png" alt=""width="30px" height="30px"></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="card shadow-lg">
        <img src="/image/download (23).jpg" class="card-img-top" alt="...">
        <div class="card-body text-center py-3">
          <h4><B>DE PAUL</B></h4>
          <h5 class="mb-3"> Defence</h5>
          <a href="#"><img src="/image/facebook (2).png" alt=""width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#"><img src="/image/skype.png" alt=""width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#"><img src="/image/youtube (2).png" alt=""width="30px" height="30px"></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="card shadow-lg">
        <img src="/image/download (25).jpg" class="card-img-top" alt="...">
        <div class="card-body text-center py-3">
          <h4><B>EMILIANO MARTINEZ</B></h4>
          <h5 class="mb-3">Goal keeper</h5>
          <a href="#"><img src="/image/facebook (2).png" alt=""width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#"><img src="/image/skype.png" alt=""width="30px" height="30px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#"><img src="/image/youtube (2).png" alt=""width="30px" height="30px"></a>
        </div>
      </div>
    </div>
   </div>
  </div>
</div>
</div>
</section>
<section class="container-fluid py-5 bg-body-secondary">
<div class="container">
  <div class="row">
    <div class="col-12 text-center">
      <h2 class="display-6"><b>Argentina President</b></h2>
      <p>The current president Alberto Fernández was sworn into office on 10 December 2019.</p>
      <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/image/favourites.png" alt="star" width="30px" height="30px">
    </div>
  </div>
</div>
<div class="row py-5">
  <div class="col-12 text-center">
    <figure class="text-center">
      <blockquote class="blockquote">
        <img class="rounded-circle" src="/image/Cuarentena total obligatoria en Argentina.jpg" alt="" width="70px" height="70px">
        <p class="py-4">Under the national constitution, the president is also the chief executive of the federal government,</p>
      </blockquote>
      <figcaption class="blockquote-footer">
      <cite title="Source Title"> Alberto Fernández</cite>
      </figcaption>
    </figure>
  </div>
  </div>
</div>
</section>
<section class="container-fluid py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="display-6"><b>Frequently Asked Qestions</b></h2>
        <p>The current president Alberto Fernández was sworn into office on 10 December 2019.</p>
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">
      </div>
    </div>
    <div class="row py-5 ">
      <div class="col-12 col-lg-6">
        <div class="accordion" id="accordion_1">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading_1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                LIONEL MESSI
              </button>
            </h2>
            <div id="collapse_1" class="accordion-collapse collapse show" data-bs-parent="#accordion_1" aria-labelledby="heading_1">
              <div class="accordion-body">
                <strong>This is the first time lionel Messi.</strong> Rosario, Argentina, Argentine-born football (soccer) player
                who received a record-setting seven Ballon d’Or awards as the world’s top male player (2009–12, 2015, 2019, and 2021).
                In 2022 he helped Argentina win  Fédération Internationale de Football Association (FIFA)’s World Cup.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading_2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                EMILIANO MARTINEZ
              </button>
            </h2>
            <div id="collapse_2" class="accordion-collapse collapse" data-bs-parent="#accordion_1" aria-labelledby="heading_2">
              <div class="accordion-body">
                <strong>This is the second EMILIANO MARTINEZ.</strong> ulian Alvarez idolises Leo Messi. A picture from a decade ago
                shows pre-teen Alvarez smiling from ear to ear as he posed with his idol. On the night of December 13, he scored in the
                semi-final of the World Cup from a magical Messi assist, one of two goals he netted against Croatia.it's the fact.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading_3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
                DE PAUL
              </button>
            </h2>
            <div id="collapse_3" class="accordion-collapse collapse" data-bs-parent="#accordion_1" aria-labelledby="heading_3">
              <div class="accordion-body">
                <strong>This is the third DE PAUL.</strong> ulian Alvarez idolises Leo Messi. A picture from a decade ago
                shows pre-teen Alvarez smiling from ear to ear as he posed with his idol. On the night of December 13, he scored in the
                semi-final of the World Cup from a magical Messi assist, one of two goals he netted against Croatia.it's the fact.
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="col-12 col-lg-6">
        <div class="accordion" id="accordion_2">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading_4">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                JULIAN ALVARE
              </button>
            </h2>
            <div id="collapse_4" class="accordion-collapse collapse show" data-bs-parent="#accordion_2" aria-labelledby="heading_4">
              <div class="accordion-body">
                <strong>This is the second time ulian Alvarez.</strong> ulian Alvarez idolises Leo Messi. A picture from a decade ago
                shows pre-teen Alvarez smiling from ear to ear as he posed with his idol. On the night of December 13, he scored in the
                semi-final of the World Cup from a magical Messi assist, one of two goals he netted against Croatia.it's the fact.
                </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading_5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="false" aria-controls="collapse_3">
                DYBALA
              </button>
            </h2>
            <div id="collapse_5" class="accordion-collapse collapse" data-bs-parent="#accordion_2" aria-labelledby="heading_5">
              <div class="accordion-body">
                <strong>This is the second  DYBALA.</strong> ulian Alvarez idolises Leo Messi. A picture from a decade ago
                shows pre-teen Alvarez smiling from ear to ear as he posed with his idol. On the night of December 13, he scored in the
                semi-final of the World Cup from a magical Messi assist, one of two goals he netted against Croatia.it's the fact of the player.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading_6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_6" aria-expanded="false" aria-controls="collapse_6">
                LEANDRO PAREDES
              </button>
            </h2>
            <div id="collapse_6" class="accordion-collapse collapse" data-bs-parent="#accordion_2" aria-labelledby="heading_6">
              <div class="accordion-body">
                <strong>This is the third LEANDRO PAREDES.</strong> ulian Alvarez idolises Leo Messi. A picture from a decade ago
                shows pre-teen Alvarez smiling from ear to ear as he posed with his idol. On the night of December 13, he scored in the
                semi-final of the World Cup from a magical Messi assist, one of two goals he netted against Croatia.it's the fact.               
              </div>
            </div>
          </div>
  </div>
</section>
<section class="container-fluid py-4">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="display-6"><b>CONTACT US</b></h2>
        <p>The current president Alberto Fernández was sworn into office on 10 December 2019.</p>
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/image/favourites.png" alt="star" width="30px" height="30px">
      </div>
    </div>
    <div class="row py-5 ">
      <div class="col-12 col-lg-5">
      <img class="img-fluid"  src="/image/El presidente Fernández y el hambre en la Argentina (Published 2019).png" alt="" >
      </div>
      <div class="col-12 col-lg-7 ">
      <form action="">
        <div class="form-floating">
          <input required type="text" class="form-control mb-3"  id="floatingName" placeholder="Your Name">
          <label for="floatingName">Your Name</label>
        </div>

        <div class="form-floating mb-3">
          <input required  type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div>
          <textarea required  cols="30" rows="5" class="form-control" placeholder="Details"></textarea>
        </div>
        <button class="btn btn-primary form-control mt-4">Send</button>
      </form>
      </div>
    </div>
    </div>
</section>
<!-- <footer class="container-fluid bg-dark py-5">
  <div class="row">
    <div class="col-12 text-center">
      <a href="#top"><img src="/image/top.png" alt="top" width="40px" height="40px"></a>
    </div>
<div class="col-12 col-lg-4 offset-lg-4 mt-3">
  <form action="">
    <div class="input-group mb-3">
      <input required type="text" class="form-control" placeholder="Your Email" aria-label="Your Email" aria-describedby="button-addon2">
      <button class="btn btn-primary" type="button" id="button-addon2">Subscribe</button>
    </div>
  </form>
</div>
<div class="col-12 text-center pt-4">
  <a href="#"><img src="/image/facebook (2).png" alt=""width="40px" height="40px"></a>&nbsp;&nbsp;
  <a href="#"><img src="/image/skype.png" alt=""width="40px" height="40px"></a>&nbsp;&nbsp;
  <a href="#"><img src="/image/youtube (2).png" alt=""width="40px" height="40px"></a>&nbsp;&nbsp;
  <a href="#"><img src="/image/linkedin.png" alt=""width="45px" height="45px"></a>
</div>
<div class="col-12 text-center mt-4">
  <p class="text-secondary">CopyRight &copy; sathish kumar</p>
</div>
  </div>
</footer> -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Get a Quote</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
          <div class="form-floating">
            <input required type="text" class="form-control mb-3" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Your Name</label>
          </div>

          <div class="form-floating mb-3">
            <input required  type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input required  type="text" class="form-control" id="floatingphone" placeholder="+637 9858232">
            <label for="floatingphone">phone</label>
          </div>
          <!-- <select required  class="form-select" multiple aria-label="Multiple select example">
            <option value="0">select the goat</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select> -->
          <div>
            <textarea required  cols="30" rows="5" class="form-control" placeholder="details"></textarea>
          </div>
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </form>


    </div>
  </div>
</div>


    <script src=".//bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>