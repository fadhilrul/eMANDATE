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
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->fms_acct_no }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">No Telefon</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->telno }}</td>
									</tr>
									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Status</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->status }}</td>
									</tr>

									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Jumlah Pinjaman</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->approved_limit }}</td>
									</tr>

									<tr>
										<td class="px-4 py-4 border border-indigo-dark">Jumlah Potongan Bulanan</td>
										<td class="px-4 py-4 border border-indigo-dark">{{ $item->instal_amt }}</td>
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
									
								</tbody>
							</table>
						</div>
					</div>
					
					<br>
				</div>
				
				<!-- Section for Maklumat Pembayaran -->
				
				<div class="bg-indigo-darker rounded shadow w-5/6 md:w-1/2 z-0 mx-auto -mt-1 md:-mt-0 md:-ml-1">
					<div class="py-8 text-center text-indigo-lightest font-semibold uppercase">Maklumat Potongan</div>
					<hr class="mb-8 my-0 border border-indigo-dark opacity-25">
					<div class="py-8">
						<table class="w-3/4 mx-auto text-indigo-lightest text-center" style="border-collapse: collapse;">
							<tbody>
								
								<tr>
									<td class="px-4 py-4 border border-indigo-dark">Tarikh Terakhir Arahan Potongan</td>
									<td class="px-4 py-4 border border-indigo-dark">{{ $item->lastcycle_date }}</td>
								</tr>
								<tr>
									<td class="px-4 py-4 border border-indigo-dark">Tarikh Berikutnya Arahan Potongan</td>
									<td class="px-4 py-4 border border-indigo-dark">{{ $item->nextcycle_date }}</td>
								</tr>
								<tr>
									<td class="px-4 py-4 border border-indigo-dark">Jumlah Gagal Potongan Bulanan</td>
									<td class="px-4 py-4 border border-indigo-dark">{{ $item->blockpayment_flag }}</td>
								</tr>
								
							</tbody>
						</table>

						<br><br>
						<div class="py-8 text-center text-indigo-lightest font-semibold uppercase">Maklumat Block Potongan</div>
						@if(session()->has('activestatus'))
							<x-general.alert.base class="bg-green-200 border-2 border-green-300 rounded-md p-2 text-sm my-2">
								<x-slot name="message">{{ session()->get('activestatus') }}</x-slot>
							</x-general.alert.base>
						@endif
						<table class="w-3/4 mx-auto text-indigo-lightest text-center" style="border-collapse: collapse;">
							<tbody>
							<br>
								<tr>
									<td class="px-4 py-4 border border-indigo-dark">Block Potongan</td>

									<td class="px-4 py-4 border border-indigo-dark">
										<div class="form-group">
											<label for="action"></label>
											<form method="post" action="{{ route('EmandateInfo.activestatus') }}">
												@csrf
												<input type="hidden" name="itemid" value="{{ $item->idnum }}">
												<select id="action" name="action">
													<option value="active">RE-ACTIVE</option>
													<option value="hold">ON HOLD</option>
												</select>
											</form>
										</div>
									</td> 
									
								</tr>
							</tbody>
						</table>


					</div>
				</div>


			</div>

			<div class="w-full p-3">
                    <!--Table Card-->
                    <div class="bg-gray border border-grey-darkest rounded shadow">

                        <div class="border-b border-grey-darkest p-3">
                            <h5 class="uppercase text-grey-dark">Rekod Pendaftaran</h5>
                        </div>
                        <div class="p-5">
                            <table class="w-full p-5 text-grey-darker">
                                <thead>
                                    <tr>
                                        <th class="text-left text-grey-dark">Nama Fail</th>
                                        <th class="text-left text-grey-dark">Tarikh</th>
                                        <th class="text-left text-grey-dark">Status</th>
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <tr>
                                        <td>{{ $item->filename }}</td>
                                    
                                        <td>{{ $item->effdate }}</td>
                                    
                                        <td>{{ $item->status }}</td>
                                    </tr>                                   
                                </tbody>
                            </table>


                        </div>
                    </div>
                    <!--/table Card-->
            </div>

		<br>

		</div>
	</div>
	
	@endforeach
	
	<a href= '{{ url("search-box") }}' >
			<div class="py-8 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span>Back</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current w-4 h-4 ml-2">
					<path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" class="heroicon-ui"></path>
				</svg>
			</div>
	</a>

<br>
<br>

</section>


@endsection