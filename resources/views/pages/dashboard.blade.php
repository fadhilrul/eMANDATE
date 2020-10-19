@extends('pages.layout.app')
@section('content')	
		<!-- remarks -  Start program for part in the middle browser  -->
		
		
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Dashboard
            </h2>
            
			<h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              Modules
			  
            </h4>
			
			
			<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
          
			  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
					<div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
					  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"></svg>
					</div>
					<div>
						 <a class="button button2" href="{{ route('emandate.dashboard') }}"> e-MANDATE</a>
					</div>
			   </div>
			  
			<!--  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
					<div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
					  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"></svg>
					</div>
					<div>
						 <a class="button button3" href="#">soon</a>
					</div>
			   </div> -->
			  
			  
			</div>
			
			

   
          </div>
        </main>
@endsection
