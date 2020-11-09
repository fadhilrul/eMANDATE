
@extends('pages.layout.app')
@section('content')
		<!-- remarks -  Start program for part in the middle browser  -->
		
		
		<style>
			@media (min-width: 1280px){
			  .container {
			  max-width: 100vw !important;
			 }
			}
		  
		  </style>
		<main class="h-full overflow-y-auto">
		  
		  <div class="container px-6 mx-auto grid">
		  
		  <div class="main-content flex-1 bg-gray-50 mt-12 md:mt-2 pb-24 md:pb-5">
		  
			<div class="bg-blue-800 p-2 shadow text-xl text-white">
				<h3 class="font-bold pl-2">E-FMS DASHBOARD</h3>
			</div>
		  
			<!--CARD SUB SYSTEM -->

			<div class="container my-12 mx-auto px-4 md:px-12">
				<div class="flex flex-wrap -mx-1 lg:-mx-4">
			
					<!-- Column -->
					<div class="my-1 px-1 w-40 md:w-1/6 lg:my-2 lg:px-4 lg:w-1/6">
			
						<!-- Article -->
						<article class="overflow-hidden rounded-lg shadow-lg bg-blue-50">
			
							<a href="{{ route('emandate.dashboard') }}">
							<img alt="Placeholder" class="block h-auto w-full" src="{{ asset('assets/img/moneytime.png') }}">
							</a>
			
							<header class="flex items-center justify-between leading-tight p-2 md:p-4">
									<h1 class="text-lg">
										<a class="no-underline hover:underline text-black" href="{{ route('emandate.dashboard') }}">
											<B class= text-blue-500>E-Mandate<B>
										</a>
									</h1>
							</header>
						</article>
						<!-- END Article -->
			
					</div>
					<!-- END Column -->
			
					<!-- Column -->
					<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
			
					</div>
					<!-- END Column -->
				</div>
			</div>
			<!-- END CART SUB SYSTEM -->
			  
		  </div>
		  </div>
		</main>
<!--****************************************************************************************************************************************************************-->
@endsection
