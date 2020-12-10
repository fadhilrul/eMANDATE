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

  <div class="bg-blue-800 p-2 shadow text-xl text-white flex justify-between items-center">
    <h3 class="font-bold pl-2">Laporan E-mandate</h3>
    <span class=" text-base pr-2 ">
      {{-- Negeri : {{ session()->get('authenticatedUser')['state_name'] }} --}}
              CAWANGAN : {{ session()->get('authenticatedUser')['branch_name'] }}
    </span>
</div>

  <div class="flex flex-wrap">
     
  </div>
       <BR>
            <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      <a href="{{ route('report.enrp') }}">
       
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path  
            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
            ></path>
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Laporan ENRP
          </p>
        </div> 
      </div> </a>
      
      <!-- Card -->
      <a href="{{ route('report.resfail') }}"><div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path  
            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
            ></path>
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Laporan Transaksi Gagal
          </p>
        </div>
      </div></a>
      <!-- Card -->
      
       <!-- Card -->
     <!-- <a href="">-->
      <a href="{{ route('report.respass') }}">
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div
            class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-500 dark:bg-green-100"
          >
            <svg class="w-5 h-5"  fill="currentColor" viewBox="0 0 20 20">
              <path  
              d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
              ></path>
            </svg>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Laporan Transaksi Lulus
            </p>
          
          </div>
        </div>
      </a>

      <!-- <a href="">-->
        <a href="{{ route('report.holdall') }}">
          <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div
              class="p-3 mr-4 text-yellow-500 bg-yellow-100 rounded-full dark:text-yellow-500 dark:bg-yellow-100"
            >
              <svg class="w-5 h-5"  fill="currentColor" viewBox="0 0 20 20">
                <path  
                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                ></path>
              </svg>
            </div>
            <div>
              <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Laporan Customer On Hold
              </p>
            
            </div>
          </div>
        </a>
     
      </div>
</div>
</div>

<!--***********************************************************************************************************************************************-->
@endsection