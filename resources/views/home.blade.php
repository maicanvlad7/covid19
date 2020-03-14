@extends('layout')
@section('content')
<div class="site-blocks-cover" style="overflow: hidden;">
    <div class="container">
      <div class="row align-items-center justify-content-center">

        <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">
          
          <img src="images/doctors.svg" alt="Image" class="img-fluid img-absolute">

          <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-6 mr-auto">
              <h1>Fii la curent cu informatiile despre Coronavirus</h1>
              <p class="mb-5">Acest site foloseste mai multe api-uri ca sa afiseze in timp real situatia curenta din Romania si din alte tari cu privire la Covid19</p>
              <div>
                <button type="button" class="btn btn-danger">
                    <span>Cazuri Totale</span>
                    <span class="badge badge-primary">{{$nrTotalCazuriRO}}</span>
                  </button>
              </div>
            </div>
            
            
          </div>

        </div>
      </div>
    </div>
  </div>  

{{-- STATISTICA ROMANIA --}}
  <div class="site-section" id="features-section">
    <div class="container">
      <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
        <div class="col-12 text-center">
            <h2>Cazuri din Romania<h2>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Cazuri Depistate</h5>
                    <span class="h2 font-weight-bold mb-0">{{$nrTotalCazuriRO}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-yellow text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>+{{$increase}}%</span>
                  <span class="text-nowrap">fata de ieri</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Cazurie Vindecate</h5>
                    <span class="h2 font-weight-bold mb-0">{{$nrVindecati}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>Antidot</span>
                  <span class="text-nowrap"> inca nedescoperit</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Decese</h5>
                  <span class="h2 font-weight-bold mb-0">{{$nrDecese}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-danger mr-2"><i class="fa fa-arrow-up"></i> 0 ani</span>
                  <span class="text-nowrap">media de varsta</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
              <p>Sursa informatii: <a href="https://www.who.int/">World Health Organization</a></p>
          </div>
          
      </div>
    </div>
  </div>
  {{-- END OF STATISTICA ROMANIA --}}

{{-- LA NIVEL GLOBAL --}}
<div class="site-section global" id="global">
    <div class="container">
      <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
        <div class="col-12 text-center">
            <h2>Cazuri la nivel global<h2>
            <p>Ultimul update : <span class="font-weight-bold text-info">{{$lastUpdate}}</span></p>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Cazuri Depistate</h5>
                    <span class="h2 font-weight-bold mb-0">{{$globalTotal}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>{{$globalNew}}</span>
                  <span class="text-nowrap">cazuri noi azi</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Cazurie Vindecate</h5>
                    <span class="h2 font-weight-bold mb-0">{{$globalRecovered}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>Antidot</span>
                  <span class="text-nowrap"> inca se lucreaza la unul</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Decese</h5>
                  <span class="h2 font-weight-bold mb-0">{{$globalDeaths}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-danger mr-2"><i class="fa fa-arrow-up"></i> {{$globalNewDeaths}}</span>
                  <span class="text-nowrap">deceses doar azi</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
              <p>Sursa informatii: <a href="https://www.who.int/">World Health Organization</a></p>
          </div>
          
      </div>
    </div>
  </div>
{{-- END OF LA NIVEL GLOBAL --}}
  
  <div class="feature-big" id="report">
    <div class="container">
      <div class="mt-5 row mb-5 site-section ">
        <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
          <img src="images/security.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
          <h2 class="text-black">Asculta sfaturile emise de autoritati.</h2>
          <p class="mb-4">In aceste momente tot ce putem sa facem este sa ne protejam pe noi si pe cei din jur. Ascultati sfaturile autoritatilor si raportati orice persoana despre care stiti ca s-a intors recent din strainatate.</p>
          
          

          <button class="btn btn-info">Raporteaza o persoana</button>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section" id="simptome" data-aos="fade-up">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="section-title mb-3">Simptome</h2>
        </div>
      </div>

      <div class="row justify-content-center symptoms" data-aos="fade-left">
        <div class="col-9">
            <h3 class="text-black">Perioada de incubație durează 6-12 zile. Dacă infecția s-a produs de la o persoană la alta, perioada de incubație nu depășește cinci zile. Perioade mai lungi de incubație pot fi tipice pentru transmiterea de la animale.</h3>
            <h4 class="text-danger">Simptomele Coronavirus 2019-nCoV sunt similare cu cele ale pneumoniei sau ale sindromului respirator acut sever:</h2>

        </div>
        <div class="col-7">
            <p><img src="/images/caution24.png" alt="caution">
                Pierderea conștiinței (datorită distrugerii progresive a țesutului pulmonar)</p>
            <p><img src="/images/caution24.png" alt="caution">Tuse uscată, neproductivă</p>
            <p><img src="/images/caution24.png" alt="caution">Febra și creșterea temperaturii (38 ° C sau mai mare, răceală)</p>
            <p><img src="/images/caution24.png" alt="caution">
                Dificultate în respirație</p>
            <p><img src="/images/caution24.png" alt="caution">Dureri în piept</p>
            <p><img src="/images/caution24.png" alt="caution">Durere de cap</p>
            <p><img src="/images/caution24.png" alt="caution">Dureri musculare</p>
            <p><img src="/images/caution24.png" alt="caution">Stare generala de slabiciune</p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section" id="preventie" data-aos="fade-up">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="section-title mb-3">Preventie</h2>
        </div>
      </div>

      <div class="row justify-content-center symptoms" data-aos="fade-left">
        <div class="col-7">
            <p><img src="/images/check24.png" alt="caution">       
            Spălați-vă des pe mâini cu săpun timp de cel puțin 20 de secunde</p>
            <p><img src="/images/check24.png" alt="caution">Nu atinge ochii, gura și organele mucoase cu mâinile murdare</p>
            <p><img src="/images/check24.png" alt="caution">Evitați contactul strâns cu persoanele infectate</p>
            <p><img src="/images/check24.png" alt="caution">
                Faceți deseori curățarea umedă cu dezinfectanți</p>
            <p><img src="/images/check24.png" alt="caution">Precizați situația epidemiologică atunci când vă planificați călătoria</p>
            <p><img src="/images/check24.png" alt="caution">Folosiți măști de respirație pentru a proteja sistemul respirator</p>
            <p><img src="/images/check24.png" alt="caution">La primele semne de boală, solicitați ajutor medical de la instituțiile medicale</p>
        
        </div>
      </div>
    </div>
  </div>
@endsection


