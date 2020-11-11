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
				class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
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
														</td>
													</tr>			
												</tbody>
											</table>
										</div>
										<div class="pl-4">
											<table class="md:table-auto lg:table-fixed table-auto w-full">
												<tbody>
													<tr>
														<td class="px-4 py-4 border border-indigo-dark font-semibold">Amaun Debit</td>
															<td class="px-4 py-4 border border-indigo-dark">
																<div class = "flex-grow">
																	<div class="text-sm leading-5 text-gray-800">
																		<input value = "{{number_format($item->debitamt,2) }}" disabled = true
															  				class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
																		/>
																	</div>
																</div>
															</td>
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
					<!-- start maklumat arahan pemotongan-->

					<div class="pt-5">
						<div class="bg-blue-800 p-2 shadow text-xl text-white">
							<h3 class="font-bold pl-2">Maklumat Arahan Pemotongan</h3>
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
																<td class="px-4 py-4 border border-indigo-dark font-semibold">Tarikh Berjaya Daftar</td>
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

															<tr>
																<td class="px-4 py-4 border border-indigo-dark font-semibold">Rujukan RHB-DDA Form</td>
																	<td class="px-4 py-4 border border-indigo-dark">
																		<div class = "flex-grow">
																			<div class="text-sm leading-5 text-gray-800">
																				<input value = "{{ $item->recnum }}" disabled = true
																	  				class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
																				/>
																			</div>
																		</div>
																	</td>
																</td>
															</tr>

															<tr>
																<td class="px-4 py-4 border border-indigo-dark font-semibold">Tarikh Mula Arahan Potongan </td>
																	<td class="px-4 py-4 border border-indigo-dark">
																		<div class = "flex-grow">
																			<div class="text-sm leading-5 text-gray-800">
																				<input value = "{{ date('d-m-Y',strtotime($item->effdate)) }} "  disabled = true
																	  				class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
																				/>
																			</div>
																		</div>
													
																	</td>
																</td>	
															</tr>

															<tr>
																<td class="px-4 py-4 border border-indigo-dark font-semibold">Tarikh Akhir Arahan Potongan </td>
																	<td class="px-4 py-4 border border-indigo-dark">
																		<div class = "flex-grow">
																			<div class="text-sm leading-5 text-gray-800">
																				<input value = "{{ date('d-m-Y',strtotime($item->expdate)) }} "  disabled = true
																	  				class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
																				/>
																			</div>
																		</div>
													
																	</td>
																</td>	
															</tr>

															<tr>
																<td class="px-4 py-4 border border-indigo-dark font-semibold">Amaun Potongan Bulanan </td>
																	<td class="px-4 py-4 border border-indigo-dark">
																		<div class = "flex-grow">
																			<div class="text-sm leading-5 text-gray-800">
																				<input value = "{{ $item->instal_amt }}"  disabled = true
																	  				class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
																				/>
																			</div>
																		</div>
													
																	</td>
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

					<!-- end maklumat arahan pemotongan -->

					<div class="pt-5">
						<div class="bg-blue-800 p-2 shadow text-xl text-white">
							<h3 class="font-bold pl-2">Status Arahan Potongan</h3>
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
																</td>
															</tr>

															<tr>
																<td class="px-4 py-4 border border-indigo-dark font-semibold">Bilangan Gagal Potongan </td>
																	<td class="px-4 py-4 border border-indigo-dark">
																		<div class = "flex-grow">
																			<div class="text-sm leading-5 text-gray-800">
																				<input value = "{{ $item->blockpayment_flag }} Bulan"  disabled = true
																	  				class="block w-70 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
																				/>
																			</div>
																		</div>
													
																	</td>
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
														@endif

														<tbody>
															<tr>
																<td class="px-2 py-2 border border-indigo-dark font-semibold">Kod : {{ $item->blocked_paymnt_status }}
																</td>
																<td class="px-6 py-6 border border-indigo-dark font-semibold">Status : {{ $item->status_desc }}
																</td>
																<td class="px-1 py-1 border border-indigo-dark">
																	<div class="flex">
																		<div class="pt-2">
																			<label for="action">

																			</label>
																				<form method="post" action="{{ route('EmandateInfo.activestatus') }}">
																					@csrf
																					<input type="hidden" name="itemid" value="{{ $item->idnum }}">
																						<select id="action" name="action">
																							<option selected>PLEASE CHOOSE</option>
																							<option value="0" {{$item->blocked_paymnt_status == 0 ? 'selected':''}}>RE-ACTIVE</option>
																							<option value="1" {{$item->blocked_paymnt_status == 1 ? 'selected':''}}>ON-HOLD</option>
																						</select>
																					<div class="pl-2">
																						<button type="submit" class="btnnormal button2">SUBMIT</button>
																					</div>
																				</form>
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
			</div>
		</div>
	</div>
	@endforeach
</div>
</div>

<!-- CFT SECTION -->

<div>

	<!--CFT LIST OF TRANSACTION -->
	<div class="bg-blue-800 p-2 shadow text-xl text-white">
		<h3 class="font-bold pl-2"> Rekod Transaksi Terkini</h3>
	</div>

	 <!--start tables-->
	 <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
	<!--	<div class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
			<div class="flex justify-between">
				<div class="inline-flex border rounded w-7/12 px-2 lg:px-6 h-12 bg-transparent">
					<div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
						<div class="flex">
							<span class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
								<svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</span>
						</div>
						<input type="text" class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin"
						 type="text"
						 placeholder="Carian No Akaun / No Kad Pengenalan"
						 aria-label="Search"
						 wire:model="listcft"
						 />
  
					</div>
				</div>
			</div>
		</div>  -->
		<div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
			<table class="min-w-full">
				<thead>
					<tr>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Rujukan Fail CFT</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Mod Bayaran</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Tarikh Transaksi</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">BankID</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Matawang</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Amaun</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Bil Percubaan Bulanan</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Status</th>
					</tr>
				</thead>
				<tbody class="bg-white">
				  @foreach ($filelist_CFT as $item)
				  <tr>
							<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
								<div class="flex items-center">
									<div>
										<div class="text-sm leading-5 text-gray-800">
	  
										  {{ $item->filename }}
	  
										</div>
									</div>
								</div>
							</td>
	  
							<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
							  <div class="flex items-center">
								  <div>
									  <div class="text-sm leading-5 text-gray-800">
	  
										{{ $item->hmode }}
	  
									  </div>
								  </div>
							  </div>
						  </td>
	  
						  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
							<div class="flex items-center">
								<div>
									<div class="text-sm leading-5 text-gray-800">
									
									{{ substr($item->hdate,0,2).'/'.substr($item->hdate,2,2).'/'.substr($item->hdate,4,4) }}
	  
									</div>
								</div>
							</div>
						</td>
	  
						<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
						  <div class="flex items-center">
							  <div>
								  <div class="text-sm leading-5 text-gray-800">
	  
									{{ $item->bankid }}
	  
								  </div>
							  </div>
						  </div>
					  </td>

					<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
						<div class="flex items-center">
							<div>
								<div class="text-sm leading-5 text-gray-800">
		
								  {{ $item->trancurr }}
		
								</div>
							</div>
						</div>
					</td>
	  
					<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
					  <div class="flex items-center">
						  <div>
							  <div class="text-sm leading-5 text-gray-800">
	  
								{{ $item->tranamt }}
	  
							  </div>
						  </div>
					  </div>
				  </td>
				  @foreach ($INFOS as $item)
				  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
					<div class="flex items-center">
						<div>
							<div class="text-sm leading-5 text-gray-800">
	
							  {{ $item->failed_count_mon }}
	
							</div>
						</div>
					</div>
				</td>
				@endforeach
				<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
					<div class="flex items-center">
						<div>
							<div class="text-sm leading-5 text-gray-800">
	
							  {{ $item->status_desc }}
	
							</div>
						</div>
					</div>
				</td>
				  </tr>
				  @endforeach
				</tbody>
			</table>
		  {{ $filelist_CFT->links() }}
		</div>
	</div>
	<!-- end tables -->
</div>
<!-- END CFT SECTION -->
@endsection