@extends('pages.layout.app')
@section('content')

<style>
	@media (min-width: 1280px){
	  .container {
	  max-width: 100vw !important;
	 }
	}
  </style>

<div class="container grid px-6 mx-auto">
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

	<div class="bg-blue-800 p-2 shadow text-xl text-white">
		<h3 class="font-bold pl-2"> Info e-Mandate</h3>
	</div>

	<div class="flex flex-wrap">
		@foreach ($INFOS as $item)
	<div class="container grid px-6 mx-auto">
	<h2
	class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
	>
	</h2>
	
	<div class="bg-blue-800 p-2 shadow text-xl text-white">
		<h3 class="font-bold pl-2">Maklumat Akaun</h3>
	</div>
	<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
		<div class="w-full overflow-x-auto">
			<table class="w-full whitespace-no-wrap">
				<tbody
					class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
					>
					<tr class="text-gray-700 dark:text-gray-400">
						<td class="border px-4 py-2">
							<div class="flex">
								<div>
									<table class="md:table-auto lg:table-fixed w-full ">
										<tbody>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Nama</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ $item->buyername }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">IC No</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ $item->idnum }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">No Akaun</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ $item->fms_acct_no }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">No Telefon</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ $item->telno }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Status</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ $item->status }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Jumlah Pinjaman</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ $item->approved_limit }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Jumlah Potongan Bulanan</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ $item->instal_amt }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>
			
										</tbody>
									</table>
								</div>
								<div class="pl-4">
									<table class="md:table-auto lg:table-fixed table-auto w-full">
										<tbody>
											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Amount Debit</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{number_format($item->debitamt,2) }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>
											
											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Kekerapan</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ number_format($item->freqnum) }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Mod Kekerapan</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ $item->freqmode }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Skim</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ $item->purpose }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Tarikh Mula</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ date('d-m-Y',strtotime($item->effdate)) }}" disabled = true  
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Tarikh Tamat</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ date('d-m-Y',strtotime($item->expdate)) }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="px-4 py-4 border border-indigo-dark font-semibold">Tarikh Lulus</td>
												<td class="px-4 py-4 border border-indigo-dark">
													<div class = "flex-grow">
														<div class="text-sm leading-5 text-gray-800">
															<input value = "{{ date('d-m-Y',strtotime($item->appdate)) }}" disabled = true
															  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
															/>
														</div>
													</div>
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="pt-5">
				<div class="bg-blue-800 p-2 shadow text-xl text-white">
					<h3 class="font-bold pl-2">Maklumat Potongan</h3>
				</div>
				<div class="w-full  overflow-hidden rounded-lg shadow-xs">
					<div class="w-full overflow-x-auto">
						<table class="w-full whitespace-no-wrap">
							<tbody
								class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
								>
								<tr class="text-gray-700 dark:text-gray-400">
									<td class="border px-4 py-2">
										<div>
											<table class="table-auto w-full">
												<tbody>
													<tr>
														<td class="px-4 py-4 border border-indigo-dark font-semibold">Tarikh Terakhir Arahan Potongan</td>
														<td class="px-4 py-4 border border-indigo-dark">
															<div class = "flex-grow">
																<div class="text-sm leading-5 text-gray-800">
																	<input value = "{{ $item->lastcycle_date }}" disabled = true
																	  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
																	/>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td class="px-4 py-4 border border-indigo-dark font-semibold">Tarikh Berikutnya Arahan Potongan</td>
														<td class="px-4 py-4 border border-indigo-dark">
															<div class = "flex-grow">
																<div class="text-sm leading-5 text-gray-800">
																	<input value = "{{ $item->nextcycle_date }}" disabled = true
																	  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
																	/>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td class="px-4 py-4 border border-indigo-dark font-semibold">Jumlah Gagal Potongan Bulanan</td>
														<td class="px-4 py-4 border border-indigo-dark">
															<div class = "flex-grow">
																<div class="text-sm leading-5 text-gray-800">
																	<input value = "{{ $item->blockpayment_flag }}" disabled = true
																	  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
																	/>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="pt-5">
				<div class="bg-blue-800 p-2 shadow text-xl text-white">
					<h3 class="font-bold pl-2">Status Sekatan Akaun</h3>
				</div>
				<div class="w-full  overflow-hidden rounded-lg shadow-xs">
					<div class="w-full overflow-x-auto">
						<table class="w-full whitespace-no-wrap">
							<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
								<tr class="text-gray-700 dark:text-gray-400">
									<td class="border px-4 py-2">
										<div>
											<table class="table-auto w-full">
												@if(session()->has('activestatus'))
												<div class="p-4">
													
													<x-general.alert.base class="bg-green-200 border-2 border-green-300 rounded-md p-2 text-sm my-2">
													<x-slot name="message">{{ session()->get('activestatus') }}</x-slot>
													</x-general.alert.base>
													
												</div>
												@endif
												<tbody>
													<tr>
														<td class="px-2 py-2 border border-indigo-dark font-semibold">Kod : {{ $item->blocked_paymnt_status }}</td>
														<td class="px-6 py-6 border border-indigo-dark font-semibold">Status : {{ $item->status_desc }}</td>
														<td class="px-1 py-1 border border-indigo-dark">
															<div class="flex">
																<div class="pt-2">
																	<label for="action"></label>
																	<form method="post" action="{{ route('EmandateInfo.activestatus') }}">
																		@csrf
																		<input type="hidden" name="itemid" value="{{ $item->idnum }}">
																		<select id="action" name="action">
																			<option value="0">RE-ACTIVE</option>
																			<option value="1">ON HOLD</option>
																		</select>
																	</div>
																	<div class="pl-2">
																		<button type="submit" class="btnnormal button2">SUBMIT</button>
																	</div>
																</form>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="pt-5">
				<div class="bg-blue-800 p-2 shadow text-xl text-white">
					<h3 class="font-bold pl-2">Rekod Pendaftaran</h3>
				</div>
				<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
					<div class="w-full overflow-x-auto">
						<table class="w-full whitespace-no-wrap">
							<tbody
								class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
								>
								<tr class="text-gray-700 dark:text-gray-400">
									<td class="border px-4 py-2">
										<div>
											<table class="table-auto w-full border">
												<thead>
													<tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 p-5">
														<th class=" px-4 py-3 text-left text-grey-dark border-indigo-dark font-semibold"><b>No Rekod</b></th>
														<th class=" px-4 py-3 text-left text-grey-dark border-indigo-dark font-semibold"><b>Tarikh</b></th>
														<th class=" px-4 py-3 text-left text-grey-dark border-indigo-dark font-semibold"><b>Status</b></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="px-4 py-4 border border-indigo-dark">{{ $item->recnum }}</td>
														<td class="px-4 py-4 border border-indigo-dark">{{ date('d-m-Y',strtotime($item->effdate)) }}</td>
														<td class="px-4 py-4 border border-indigo-dark">{{ $item->approval }}</td>
													</tr>
												</tbody>
											</table>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<a href= '{{ url("search-box") }}' >
				<div class="py-8 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span>Back</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current w-4 h-4 ml-2">
				<path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" class="heroicon-ui"></path>
			</svg>
		</div>
	</a>
</div>
</div>
@endforeach
	</div>
 </div>
</div>

<!--*****************************************************************************************************************************************-->
@endsection