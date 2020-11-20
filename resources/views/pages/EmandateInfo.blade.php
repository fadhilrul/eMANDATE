@extends('pages.layout.app')
@section('content')

<!-- link modal-->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">  
<!-- end link modal -->


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

<!-- new design -->
<div class="flex flex-wrap" id="tabs-id">
	<div class="w-full">
	  <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
		<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
		  <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-blue-600" onclick="changeAtiveTab(event,'tab-1')">
			<i class="fas fa-space-shuttle text-base mr-1"></i>  Maklumat Pendaftaran
		  </a>
		</li>
		<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
		  <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-600 bg-white" onclick="changeAtiveTab(event,'tab-2')">
			<i class="fas fa-cog text-base mr-1"></i>  Arahan Potongan
		  </a>
		</li>
		<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
		  <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-600 bg-white" onclick="changeAtiveTab(event,'tab-3')">
			<i class="fas fa-briefcase text-base mr-1"></i>  Status Arahan Potongan
		  </a>
		</li>
		<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
			<a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-600 bg-white" onclick="changeAtiveTab(event,'tab-4')">
			  <i class="fas fa-briefcase text-base mr-1"></i>  Status Sekatan Akaun
			</a>
		  </li>
		  <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
			<a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-600 bg-white" onclick="changeAtiveTab(event,'tab-5')">
			  <i class="fas fa-briefcase text-base mr-1"></i>  Rekod Transaksi
			</a>
		  </li>
		  <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
			<a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-blue-600 bg-white" onclick="changeAtiveTab(event,'tab-6')">
			  <i class="fas fa-briefcase text-base mr-1"></i>  Rekod Pendaftaran
			</a>
		  </li>
	  </ul>
	  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
		<div class="px-4 py-5 flex-auto">
		  <div class="tab-content tab-space">
			<div class="block" id="tab-1">
			  <!-- maklumat akaun -->

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
																  <input value = "RM{{ $item->instal_amt }}" disabled = true
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

			  <!-- end maklumat kaun -->
			</div>
			<div class="hidden" id="tab-2">
					<!-- arahan potongan -->
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
																	<input value = "RM{{ $item->instal_amt }}"  disabled = true
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
				<!-- end arahan potongan -->
			</div>
			<div class="hidden" id="tab-3">
				<!-- status arahan potongan -->  
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
				<!-- end status arahan potongan -->
			</div>
			<div class="hidden" id="tab-4">
				<!--sekatan akaun-->
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
												<td class="px-6 py-6 border border-indigo-dark font-semibold">Dikemaskini Oleh : {{ $item->blockedby }}
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
																		{{-- <button type="submit" class="btnnormal button2">SUBMIT</button> --}}
																		<!-- start modal -->
																		<div x-data="{ show: false }">
																			<div class="flex justify-center">
																				<button @click={show=true} type="button" class="leading-tight bg-blue-500 text-gray-200 rounded px-6 py-2 text-sm focus:outline-none focus:border-white">Tindakan</Button>
																			</div>
																			<div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
																				<div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px; margin-top:315px">
																					<div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
																						{{-- <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold"></button>  <!--&times;--> --}}
																						<div class="px-6 py-3 text-xl border-b font-bold">Ulasan/Keterangan</div>
																						<div class="p-6 flex-grow">
																							<!-- text area -->
																							<label class="block">
																								<textarea class="form-textarea mt-1 block w-full" rows="3" placeholder="Ulasan Tidak boleh melebihi 100 patah perkataan. @error('reasons') is-invalid @enderror" name="reasons" maxlength = "100" required>{{ old('reasons') }}</textarea>
																							</label>
																							<!-- end text area -->
																						</div>
																						<div class="px-6 py-3 border-t">
																							<div class="flex justify-end">
																								<button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Tutup</Button>
																								<button  @click={show=true} type="sumbit" class="bg-blue-600 text-gray-200 rounded px-4 py-2">Simpan</Button>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
																			</div>
																		<!-- end modal -->
																		</div>
																</form>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="px-2 py-2 border border-indigo-dark font-semibold">Ulasan/Keterangan:
												</td>
												<td colspan="3" class="px-6 py-6 border border-indigo-dark font-semibold">
													<textarea class="form-textarea mt-1 block w-full" rows="3" disabled>{{ $item->reasons }}</textarea>
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
			<!-- end sekatan akaun -->
			</div>
			<div class="hidden" id="tab-5">
			<!-- rekod transaksi -->
			@foreach ($INFOS as $item)
			<div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
			<table class="min-w-full">
				<thead>
					<tr>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Rujukan Fail Res</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Mod Bayaran</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Tarikh Potongan</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">BankID</th>
						{{-- <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Matawang</th> --}}
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Amaun</th>
						{{-- <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Bil Percubaan Bulanan</th> --}}
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Kod Status</th>
						<th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Status</th>
					</tr>
				</thead>
				<tbody class="bg-white">
				  @foreach ($filelist_res as $item)
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
									
									{{-- {{ substr($item->hdate,0,2).'/'.substr($item->hdate,2,2).'/'.substr($item->hdate,4,4) }} --}}
									{{ ($item->hdate) }}
	  
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

					{{-- <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
						<div class="flex items-center">
							<div>
								<div class="text-sm leading-5 text-gray-800">
		
								  {{ $item->trancurr }}
		
								</div>
							</div>
						</div>
					</td> --}}
	  
					<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
					  <div class="flex items-center">
						  <div>
							  <div class="text-sm leading-5 text-gray-800">
	  
								RM{{ $item->tranamt }}
	  
							  </div>
						  </div>
					  </div>
				  </td>
				  {{-- @foreach ($INFOS as $item)
				  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
					<div class="flex items-center">
						<div>
							<div class="text-sm leading-5 text-gray-800">
	
							  {{ $item->failed_count_mon }}
	
							</div>
						</div>
					</div>
				</td>
				@endforeach --}}
				<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
					<div class="flex items-center">
						<div>
							<div class="text-sm leading-5 text-gray-800">
	
							  R{{ $item->status }}
	
							</div>
						</div>
					</div>
				</td>
				<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
					<div class="flex items-center">
						<div>
							<div class="text-sm leading-5 text-gray-800">
	
							  {{ SUBSTR($item->status_desc,0,30) }}
	
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
			<!-- end rekod transaksi -->
			</div>
			<div class="hidden" id="tab-6">
				<!-- rekod pendaftaran -->
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
												<th class=" px-4 py-3 text-left text-grey-dark border-indigo-dark font-semibold">No Rekod</th>
												<th class=" px-4 py-3 text-left text-grey-dark border-indigo-dark font-semibold">Tarikh Berjaya Daftar</th>
												<th class=" px-4 py-3 text-left text-grey-dark border-indigo-dark font-semibold">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="px-4 py-4 border border-indigo-dark">{{ $item->recnum }}</td>
												<td class="px-4 py-4 border border-indigo-dark">{{ date('d-m-Y',strtotime($item->effdate)) }}</td>
												<td class="px-4 py-4 border border-indigo-dark">{{ $item->approved_desc }}</td>
												{{-- <td class="px-4 py-4 border border-indigo-dark">{{ $item->approval }}</td> --}}
											</tr>
										</tbody>
									</table>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				@endforeach
			<!-- end rekod pendaftaran -->
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <script type="text/javascript">
	function changeAtiveTab(event,tabID){
	  let element = event.target;
	  while(element.nodeName !== "A"){
		element = element.parentNode;
	  }
	  ulElement = element.parentNode.parentNode;
	  aElements = ulElement.querySelectorAll("li > a");
	  tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
	  for(let i = 0 ; i < aElements.length; i++){
		aElements[i].classList.remove("text-white");
		aElements[i].classList.remove("bg-blue-600");
		aElements[i].classList.add("text-blue-600");
		aElements[i].classList.add("bg-white");
		tabContents[i].classList.add("hidden");
		tabContents[i].classList.remove("block");
	  }
	  element.classList.remove("text-blue-600");
	  element.classList.remove("bg-white");
	  element.classList.add("text-white");
	  element.classList.add("bg-blue-600");
	  document.getElementById(tabID).classList.remove("hidden");
	  document.getElementById(tabID).classList.add("block");
	}
  </script>
<!-- new design end -->



@endsection