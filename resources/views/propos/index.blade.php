@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
        <!-- About us section start -->
        <section class="about" style="background-image: url('{{ asset('/img/props.jpg')}}');">
            <h2 class="headings">Qu'est-ce que la Fintic ?</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="content">
        <h1 class="heading-content fw-bold">à propos de fintic</h1>
        <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet excepturi odit blanditiis fugiat magnam veritatis quod necessitatibus, hic incidunt nesciunt sequi totam, error nostrum voluptatem, placeat consequuntur officiis tenetur animi.
        
        </p>
        <p class="paragraph" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, ea vero esse error ut molestiae a perferendis aspernatur labore cum impedit odit dolorem voluptatibus in repellat rem asperiores.
        
        </p>
        <a href="{{ route('message.index') }}" class="link-contact"> <span class="btn-hover">
        
        </span> Contact</a>
                        </div>
        
                    </div>
        <div class="col-lg-6 col-md-12">
            <div class="img-settings">
                <img src="{{ asset('/img/about.jpg') }}" class="img-fluid img-scnd" alt="img">
            </div>
        </div>
                </div>
        
            </div>
        
        
         </section>
        <!-- About us section end -->

        {{-- Qui sommes nous? --}}
        
  <section class="me">
    <h3 class="heading_me">Qui sommes <span>nous</span>?</h3>
     <div class="container_me container">
       <div class="container">

        <div class="row me_container">
            <div class="col-lg-6">
                <div class="me_img">
                      <div class="image_me"></div>
                </div>
            </div>
            
    <div class="col-lg-6">
        <div class="content_me">
            <h4 class="heading_me_content">
               Hi, my name is fatima
            </h4>
            <p class="para_content_me">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                <span>Quasi, totam? Soluta laborum molestias deserunt quae </span>
                    recusandae voluptatibus iure, quod non quos veritatis, 
                    distinctio reiciendis optio minus,
                      repudiandae officiis odio magnam?

            </p>
        </div>
    </div>
        </div>
       </div>
     </div>

  </section>

        {{-- Qui sommes nous? --}}
@endsection