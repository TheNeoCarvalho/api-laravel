@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <section>
           <span>Desenvolvimento Back-End</span> 
             <div class="row" style="margin:5px">
              <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/cursos/node.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">NodeJS</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p>Price: 19,00 </p>
                      <a href="#" class="btn btn-primary">Buy Now </a>
                    </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/cursos/expressjs.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ExpressJS</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p>Price: 19,00 </p>
                      <a href="#" class="btn btn-primary">Buy Now </a>
                    </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/cursos/api.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">API Rest</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p>Price: 19,00 </p>
                      <a href="#" class="btn btn-primary">Buy Now </a>
                    </div>
                  </div>
              </div>
            </div>
          </section>
        <section>
           <span>Desenvolvimento Front-End</span> 
           <div class="row" style="margin:5px">
              <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/cursos/vue.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">VueJS</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p>Price: 19,00 </p>
                      <a href="#" class="btn btn-primary">Buy Now </a>
                    </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/cursos/react.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ReactJS</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p>Price: 19,00 </p>
                      <a href="#" class="btn btn-primary">Buy Now </a>
                    </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/cursos/react.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ReactJS</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p>Price: 19,00 </p>
                      <a href="#" class="btn btn-primary">Buy Now </a>
                    </div>
                  </div>
              </div>
          </section>
        <section>
           <span>Desenvolvimento Mobile</span> 
           <div class="row" style="margin:5px">
              <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/cursos/react.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ReactJS</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p>Price: 19,00 </p>
                      <a href="#" class="btn btn-primary">Buy Now </a>
                    </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/cursos/react.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ReactJS</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p>Price: 19,00 </p>
                      <a href="#" class="btn btn-primary">Buy Now </a>
                    </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/cursos/react.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ReactJS</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p>Price: 19,00 </p>
                      <a href="#" class="btn btn-primary">Buy Now </a>
                    </div>
                  </div>
              </div>
          </section>
        </div>
    </div>
</div>
@endsection
