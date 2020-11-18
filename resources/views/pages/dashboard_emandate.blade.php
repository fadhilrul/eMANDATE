@extends('pages.layout.app')
@section('content')


<style>
    @media (min-width: 1280px){
      .container {
      max-width: 100vw !important;
     }
    }

    /*DROPDOWN CSS*/
    .dropdown:hover .dropdown-menu {
    display: block;
    }

  
  </style>


<div class="container px-6 mx-auto grid">

    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

      <div class="bg-blue-800 p-2 shadow text-xl text-white">
          <h3 class="font-bold pl-2">E-Mandate Dashboard</h3>
      </div>

      <!-- DROPDOWN PILIHAN NEGERI -->
      <div class="p-10">

        <div class="dropdown inline-block relative">
          <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150" id="options-menu" aria-haspopup="true" aria-expanded="true">
            <span class="mr-1">Pilihan Negeri</span>
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
          </button>
          <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
            <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">One</a></li>
            <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Two</a></li>
            <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li>
          </ul>
        </div>
      </div>
      <!-- END DROP DOWN PILIHAN NEGERI -->

      <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="bg-blue-100 border-b-4 border-blue-600 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                        <!--  <div class="rounded-full p-5 bg-blue-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div> -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Daftar</h5>
                          <h3 class="font-bold text-3xl"> {{($daftarCount->count())}} 
                          <span class="text-blue-500"><i class="fas fa-caret-up"></i></span></h3>
                      </div>
                  </div>
              </div>
              <!--/Metric Card-->
          </div>
        

          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="bg-green-100 border-b-4 border-green-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                          <!--<div class="rounded-full p-5 bg-green-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>-->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Lulus</h5>
                          <h3 class="font-bold text-3xl">{{($lulusCount->count())}} 
                          <span class="text-green-500"><i class="fas fa-exchange-alt"></i></span></h3>
                      </div>
                  </div>
              </div>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="bg-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                         <!-- <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div> -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Dalam Proses</h5>
                          <h3 class="font-bold text-3xl"> {{($gagalCount->count())}} 
                          <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                      </div>
                  </div>
              </div>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <a href="{{route('searchenrp.index')}}">
              <!--Metric Card-->
              <div class="bg-red-100 border-b-4 border-red-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                         <!-- <div class="rounded-full p-5 bg-red-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>  -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600"> Senarai </h5>
                          <h3 class="font-bold text-3xl"> ENRP</h3>
                      </div>
                  </div>
              </div>
             </a>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
            <a href="{{route('searchcft.index')}}">
              <div class="bg-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                        <!--  <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>  -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600"> Senarai </h5>
                          <h3 class="font-bold text-3xl"> CFT </h3>
                      </div>
                  </div>
              </div>
            </a>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
            <a href="{{route('search.index')}}">
              <div class="bg-orange-100 border-b-4 border-orange-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                        <!--  <div class="rounded-full p-5 bg-orange-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>  -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600">INFO</h5>
                          <h3 class="font-bold text-3xl"> e-Mandate <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                      </div>
                  </div>
              </div>
            </a>
              <!--/Metric Card-->
          </div>
      </div>
  </div>
</div>


<!-- testing propcess -->

{{-- <div class="flex flex-wrap mt-10 justify-center">
    <h2><b> Running Process For UAT <b></h2>
</div> --}}
<!--<div class="flex flex-wrap mt-10 justify-center">
    {{-- <div class="m-3">
      <a href="http://localhost/enrp/newenrp/enrp.php"
         class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-600 hover:border-blue-600 hover:bg-blue-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
        <span class="mx-auto">INSERT ENRP</span>
      </a>
    </div> --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/cft2.php" title="Quicktoolz On Facebook"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-orange-500 hover:border-orange-500 hover:bg-orange-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">GENERATE CFT</span> 
        </a>
      </div> --}}
      

    {{-- 1res --}}
    {{-- <div class="m-3">
      <a href="http://localhost/enrp/newenrp/1res.php" title="Quicktoolz On Pinterest"
         class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
        <span class="mx-auto">1 RES</span>
      </a>
    </div> --}}
    {{-- 2res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/2res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">2 RES</span>
        </a>
      </div> --}}
      {{-- 3res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/3res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">3 RES</span>
        </a>
      </div> --}}
      {{-- 4res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/4res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">4 RES</span>
        </a>
      </div> --}}
       {{-- 5res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/5res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">5 RES</span>
        </a>
      </div> --}}
       {{-- 6res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/6res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">6 RES</span>
        </a>
      </div> --}}
      {{-- 7res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/7res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">7 RES</span>
        </a>
      </div> --}}
      {{-- 8res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/8res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">8 RES</span>
        </a>
    </div> --}}
    {{-- <div class="m-9">
        <a href="http://localhost/enrp/newenrp/9res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">9 RES</span>
        </a>
    </div> --}}
</div>  -->

<!-- testing propcess -->

@endsection