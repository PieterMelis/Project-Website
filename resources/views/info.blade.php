
@extends('layouts.app')

@section('content')
  <div class="banner">
    <h1>Studeren in Antwerpen</h1>
    <img src="{{ asset('img/banner.jpg') }}" alt="banner">

  </div>



          <div class="container">

        <div class="row">
          <div class="col-lg-12 title">
              <h1 class="page-header">Studeren
              </h1>
          </div>

            <div class="col-lg-3  col-xs-6 thumb">
              <h3 class="text-center ">Wegwijs</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/wegwijs" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/wegwijs.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3  col-xs-6 thumb">
                <h3 class="text-center ">Financiering</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/financiering" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/financiering.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3  col-xs-6 thumb">
              <h3 class="text-center ">Ondersteuning</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/ondersteuning" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/ondersteuning.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3  col-xs-6 thumb">
              <h3 class="text-center ">Buitenland</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/buitenland" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/buitenland.jpg') }}" alt="">
                </a>
            </div>
            <br>
            <div class="col-lg-12 title">
                <h1 class="page-header">Vrije tijd
                </h1>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Cultuur</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/cultuur" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/cultuur.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Sport</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/sport" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/sport.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3  col-xs-6 thumb">
              <h3 class="text-center ">Events</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/events" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/events.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Zelf organiseren</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/zelf-organiseren" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/zelf-organiseren.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3  col-xs-6 thumb">
              <h3 class="text-center ">Studentenclubs</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/studentenclubs" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/studentenclubs.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3  col-xs-6 thumb">
              <h3 class="text-center ">Student media</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/student-media" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/student-media.jpg') }}" alt="">
                </a>
            </div>
            <br>
            <div class="col-lg-12 title">
                <h1 class="page-header">Werken
                </h1>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Studentenjob</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/studentenjob" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/studentenjob.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Stage</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/stage" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/stage.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Eerste job</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/eeste-job" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/eerste-job.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Ondernemen</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/ondernemen" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/ondernemen.jpg') }}" alt="">
                </a>
            </div>
            <br>
            <div class="col-lg-12 title">
                <h1 class="page-header">Wonen
                </h1>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Kot</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/kot" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/kot.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Op weg</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/op-weg" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/op-weg.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Samenleven</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/samenleven" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/samenleven.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">In nood</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/in-nood" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/in-nood.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-xs-6 thumb">
              <h3 class="text-center ">Na je studie</h3>
                <a class="" target="blank" href="https://www.gate15.be/nl/content/na-je-studie" rel=canonical>
                    <img class="img-responsive" src="{{ asset('img/na-je-studie.jpg') }}" alt="">
                </a>
            </div>
        </div>



@endsection
