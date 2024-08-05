@extends('\home')

@section( 'content' )

<section class="container-fluid py-5 bg-body-secondary">
<div class="container">
  <div class="row">
    <div class="col-12 text-center">
      <h2 class="display-6"><b>Argentina President</b></h2>
      <p>The current president Alberto Fernández was sworn into office on 10 December 2019.</p>
      <img src="/assets/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/assets/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/assets/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/assets/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
      <img src="/assets/image/favourites.png" alt="star" width="30px" height="30px">
    </div>
  </div>
  
</div>
<div class="row py-5">
  <div class="col-12 text-center">
    <figure class="text-center">
      <blockquote class="blockquote">
        <img class="rounded-circle" src="/assets/image/Cuarentena total obligatoria en Argentina.jpg" alt="" width="70px" height="70px">
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

<section class="container-fluid py-4">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="display-6"><b>CONTACT US</b></h2>
        <p>The current president Alberto Fernández was sworn into office on 10 December 2019.</p>
        <img src="/assets/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/assets/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/assets/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/assets/image/favourites.png" alt="star" width="30px" height="30px">&nbsp;&nbsp;
        <img src="/assets/image/favourites.png" alt="star" width="30px" height="30px">
      </div>
    </div>
    <div class="row py-5 ">
      <div class="col-12 col-lg-5">
      <img class="img-fluid"  src="/assets/image/El presidente Fernández y el hambre en la Argentina (Published 2019).png" alt="" >
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

@stop