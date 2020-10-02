@extends('pages.layout.app')
@section('content')


<section>

	<div class="container mx-auto">
		<div class="py-8 w-full mx-auto">

        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            E-Mandate Information
        </h2>

			<!-- Section for Maklumat Akaun -->

			<div class="my-8 flex flex-wrap md:items-center w-full">
				<div class="bg-white shadow rounded w-full md:w-1/2 z-10">
					<div class="py-8 text-center text-green font-semibold uppercase">Maklumat Akaun</div>
					<hr class="py-0 my-0 border border-grey-lighter">
					<div class="py-8">
						<br>

						@foreach ($INFOS as $item)

                        <div class="py-8">
							<table class="w-2/4 mx-auto text-blue-lightest text-left" style="border-collapse: collapse; ">
							
								<tbody>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Nama</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->buyername }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">IC No</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->idnum }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">No Akaun</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->payrefnum }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">No Telefon</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->telno }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Nama Fail</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->filename }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Amount Debit</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->debitamt }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Kekerapan</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->freqnum }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Mod Kekerapan</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->freqmode }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Tujuan</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->purpose }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Tarikh Mula</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->effdate }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Tarikh Tamat</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->expdate }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Tarikh Lulus</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->appdate }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Tarikh Process</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->processdt }}</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
					
					<br>
				</div>
				
				<!-- Section for Maklumat Pembayaran -->
				
				<div class="bg-indigo-darker rounded shadow w-5/6 md:w-1/2 z-0 mx-auto -mt-1 md:-mt-0 md:-ml-1">
					<div class="py-8 text-center text-indigo-lightest font-semibold uppercase">Maklumat Pembayaran</div>
					<hr class="mb-8 my-0 border border-indigo-dark opacity-25">
					<div class="py-8">
						<table class="w-3/4 mx-auto text-indigo-lightest text-center" style="border-collapse: collapse;">
							<tbody>
								<tr>
									<td class="px-4 py-4 border border-indigo-dark">Last Cycle Date</td>
									<td class="px-4 py-4 border border-indigo-dark">{{ $item->last_cycle_date }}</td>
								</tr>
								<tr>
									<td class="px-4 py-4 border border-indigo-dark">Next Cycle Date</td>
									<td class="px-4 py-4 border border-indigo-dark">{{ $item->next_cycle_date }}</td>
								</tr>
								<tr>
									<td class="px-4 py-4 border border-indigo-dark">Frequecy Unsuccessful Payment</td>
									<td class="px-4 py-4 border border-indigo-dark">{{ $item->block_payment_flag }}</td>
								</tr>
								
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	@endforeach
	
	<a href="#">
			<div class="py-8 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span>Back</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current w-4 h-4 ml-2">
					<path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" class="heroicon-ui"></path>
				</svg>
			</div>
	</a>

<br>

</section>





@endsection