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

			<!-- tab component  -->

				<div 
				x-data="{
				  openTab: 1,
				  activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
				  inactiveClasses: 'text-blue-500 hover:text-blue-800'
				}" 
				class="p-6"
				>
				<ul class="flex border-b">
				  <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
					<a :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#"><b>Maklumat Akaun</b></a>
				  </li>
				  <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
					<a :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#"><b>Arahan Potongan</b></a>
				  </li>
				  <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
					<a :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#"><b>Status Arahan Potongan</b></a>
				  </li>
				  <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
					<a :class="openTab === 4 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#"><b>Status Sekatan Akaun</b></a>
				  </li>
				  <li @click="openTab = 5" :class="{ '-mb-px': openTab === 5 }" class="mr-1">
					<a :class="openTab === 5 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#"><b>Rekod Transaksi</b></a>
				  </li>
				  <li @click="openTab = 6" :class="{ '-mb-px': openTab === 6 }" class="mr-1">
					<a :class="openTab === 6 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#"><b>Rekod Pendaftaran</b></a>
				  </li>
				</ul>
				<div class="w-full pt-4">
				  <div x-show="openTab === 1">
					@foreach ($INFOS as $item)
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
					@endforeach
				  </div>
				  <div x-show="openTab === 2">
					@foreach ($INFOS as $item)
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
					@endforeach
				  </div>
				  <div x-show="openTab === 3">
					@foreach ($INFOS as $item)
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
					@endforeach
				  </div>
				  <div x-show="openTab === 4">
					@foreach ($INFOS as $item)
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
					@endforeach
				  </div>
				  <div x-show="openTab === 5">
					@foreach ($INFOS as $item)
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
					</div>
					@endforeach
					{{ $filelist_CFT->links() }}
				  </div>
				</div>
				<div x-show="openTab === 6">
					@foreach ($INFOS as $item)

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

					@endforeach
				</div>
				</div>
				

				<!-- Alpine.js -->
				<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

			<!-- end tab component -->
<!-- END CFT SECTION -->
@endsection