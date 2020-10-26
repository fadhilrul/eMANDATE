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
		  
		  <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
		  
			<div class="bg-blue-800 p-2 shadow text-xl text-white">
				<h3 class="font-bold pl-2">E-FMS DASHBOARD</h3>
			</div>
		  
			<!--CARD SUB SYSTEM -->

			<div class="container my-12 mx-auto px-4 md:px-12">
				<div class="flex flex-wrap -mx-1 lg:-mx-4">
			
					<!-- Column -->
					<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
			
						<!-- Article -->
						<article class="overflow-hidden rounded-lg shadow-lg">
			
							<a href="{{ route('emandate.dashboard') }}">
								<img alt="Placeholder" class="block h-auto w-full" src="https://blog.cashfree.com/wp-content/uploads/2019/06/cropped-Emandate_poster-2-1.png">
							</a>
			
							<header class="flex items-center justify-between leading-tight p-2 md:p-4">
								<h1 class="text-lg">
									<a class="no-underline hover:underline text-black" href="#">
										e-MANDATE
									</a>
								</h1>
								<p class="text-grey-darker text-sm">
									26 Oct 2020
								</p>
							</header>
			
							<footer class="flex items-center justify-between leading-none p-2 md:p-4">
								<a class="flex items-center no-underline hover:underline text-black" href="#">
									<img alt="Placeholder" class="block rounded-full" src="http://www.csc.net.my/img/csc.png">
									<p class="ml-2 text-sm">
										Creative System Consultant
									</p>
								</a>
								<a class="no-underline text-grey-darker hover:text-red-dark" href="#">
									<span class="hidden">Like</span>
									<i class="fa fa-heart"></i>
								</a>
							</footer>
			
						</article>
						<!-- END Article -->
			
					</div>
					<!-- END Column -->
			
					<!-- Column -->
					<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
			
						<!-- Article -->
						<article class="overflow-hidden rounded-lg shadow-lg">
			
							<a href="#">
								<img alt="Placeholder" class="block h-auto w-full" src="https://www.techfunnel.com/wp-content/uploads/2018/05/Importance-of-Modern-Financial-Management-Systems.jpg">
							</a>
			
							<header class="flex items-center justify-between leading-tight p-2 md:p-4">
								<h1 class="text-lg">
									<a class="no-underline hover:underline text-black" href="#">
										Sistem Pengurusan Kewangan
									</a>
								</h1>
								<p class="text-grey-darker text-sm">
									26 Oct 2020
								</p>
							</header>
			
							<footer class="flex items-center justify-between leading-none p-2 md:p-4">
								<a class="flex items-center no-underline hover:underline text-black" href="#">
									<img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
									<p class="ml-2 text-sm">
										Tekun Nasional
									</p>
								</a>
								<a class="no-underline text-grey-darker hover:text-red-dark" href="#">
									<span class="hidden">Like</span>
									<i class="fa fa-heart"></i>
								</a>
							</footer>
			
						</article>
						<!-- END Article -->
			
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
