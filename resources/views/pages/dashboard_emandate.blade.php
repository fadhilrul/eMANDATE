@extends('pages.layout.app')
@section('content')


<style>
    @media (min-width: 1280px){
      .container {
      max-width: 100vw !important;
     }
    }
  
  </style>


<div class="container px-6 mx-auto grid">

    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

      <div class="bg-blue-800 p-2 shadow text-xl text-white">
          <h3 class="font-bold pl-2">E-Mandate Dashboard</h3>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="bg-blue-100 border-b-4 border-blue-600 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                          <div class="rounded-full p-5 bg-blue-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Daftar</h5>
                          <h3 class="font-bold text-3xl"> {{($daftarCount->count())}} <span class="text-blue-500"><i class="fas fa-caret-up"></i></span></h3>
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
                          <div class="rounded-full p-5 bg-green-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Lulus</h5>
                          <h3 class="font-bold text-3xl">{{($lulusCount->count())}} <span class="text-green-500"><i class="fas fa-exchange-alt"></i></span></h3>
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
                          <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Dalam Proses</h5>
                          <h3 class="font-bold text-3xl"> {{($gagalCount->count())}} <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
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
                          <div class="rounded-full p-5 bg-red-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
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
                          <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
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
                          <div class="rounded-full p-5 bg-orange-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
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

@endsection