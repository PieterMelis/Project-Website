@extends('layouts.app')

@section('content')



<div class="container">






   <div class="row x">


            <div class="col-md-6 art ">

                <a href="#">
                    <img class="img-responsive " src="{{ url('img/kot.jpg') }}" alt="">
                </a>
                <div class="text">
                  <h3>
                     test
                 </h3>
                   <p>test</p>
                   <i class="fa fa-plus" aria-hidden="true"></i><a href="#">  Lees meer</a>
                </div>
              </div>
              <div class="col-md-6 art ">
                <a href="#">
                    <img class="img-responsive " src="{{ url('img/Antwerp.jpg') }}" alt="">
                </a>
                <div class="text">
                  <h3>
                     test
                 </h3>
                   <p>test</p>
                   <i class="fa fa-plus" aria-hidden="true"></i><a href="#">  Lees meer</a>
                </div>
              </div>


            <div class="col-md-6 art ">
                <a href="#">
                    <img class="img-responsive " src="{{ url('img/Antwerp2.jpg') }}" alt="">
                </a>
                <div class="text">
                  <h3>
                     test
                 </h3>
                   <p>test</p>
                   <i class="fa fa-plus" aria-hidden="true"></i><a href="#">  Lees meer</a>
                </div>
              </div>
                <div class="col-md-6 art ">
                <a href="#">
                    <img class="img-responsive " src="{{ url('img/Antwerp.jpg') }}" alt="">
                </a>
                <div class="text">
                  <h3>
                     test
                 </h3>
                   <p>test</p>
                   <i class="fa fa-plus" aria-hidden="true"></i><a href="#">  Lees meer</a>
                </div>
              </div>
            </div>





          <div class="row ">
              <div class="col-lg-12">
                  <h1 class="page-header">Nieuwsartikels
                  </h1>
              </div>
          </div>
         <!-- Projects Row -->
         <div class="row x">

          @foreach ($textArticles as $article)

             <div class="col-md-6 art">
                 <a href="article/{{ $article->id }}">
                     <img class="img-responsive " src="../storage/app/{{$article->link1}}" alt="">
                 </a>
                 <div class="text">
                   <h3>
                      {{ $article->title}}
                  </h3>
                    <p>{{ $article->excerpt}}</p>
                    <i class="fa fa-plus" aria-hidden="true"></i><a href="article/{{ $article->id }}">  Lees meer</a>
                 </div>
               </div>


         @endforeach

         </div>
</div>




@endsection
