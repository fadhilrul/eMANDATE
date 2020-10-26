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
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Report Dashboard
      
    </h2>
    
    <!-- Responsive cards -->
    <h4
      class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
    >
    </h4>

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
      <a href="{{ route('search.index') }}"><div
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
     <div
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
      <!-- Card -->
      <!-- Card -->
      <!-- Card -->
      {{-- <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        
        <div
          class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
          >
            Bilangan Usahawan bawah 15000
          </p>
          <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
          >
            0000
          </p>
        </div>
      </div> --}}
      </div>

    
     <!-- New Cards for module in emandate-->
    <h4
      class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
    >
    </h4> 
    
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            
          </svg>
        </div>
        <div>
            <div>
          <!--  <a class="button button2" href="{{route('Emandate_list.index')}}"> ENRP</a> -->
            <a class="button button2" href="{{route('searchenrp.index')}}"> ENRP</a>
            </div>
        </div>
      </div>
      
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            
          </svg>
        </div>
        <div>
          <div>
         <a class="button button2" href="{{route('searchcft.index')}}"> CFT</a>
        </div>
        </div>
      </div>


      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            
          </svg>
        </div>
        <div>
            <div>
          <!--  <a class="button button2" href="{{route('Emandate_list.index')}}"> ENRP</a> -->
            <a class="button button2" href="{{route('search.index')}}"> EMANDATE INFO</a>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection