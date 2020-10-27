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
      <h3 class="font-bold pl-2">Laporan e-MANDATE</h3>
  </div>

  <div class="flex flex-wrap">
     
  </div>
       <BR>
            <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      <a href="{{ route('report.blockedpayment') }}"> 
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
          >
          Laporan Sekatan Pemotongan
          </p>
          <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
          >
          
          </p>
        </div> 
      </div> </a>
      
      <!-- Card -->
      <a href=""><div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path  
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
          >
         soon
          </p>
          <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
          >
          </p>
        </div>
      </div></a>
      <!-- Card -->
      
       <!-- Card -->
     <!-- <a href="">-->
      <a href=""><div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-red-500 dark:bg-red-100"
        >
          <svg class="w-5 h-5"  fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
          >
          soon
          </p>
          <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
          >
          </p>
        </div>
      </div></a>
     
      </div>
</div>
</div>

<!--***********************************************************************************************************************************************-->
@endsection