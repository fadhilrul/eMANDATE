@extends('pages.layout.app')
@section('content')

<style>
  @media (min-width: 1280px){
      .container {
          max-width: 100vw !important;
      }
  }
</style>


<div class=" grid px-6 mx-auto">

<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

  <div class="bg-blue-800 p-2 shadow text-xl text-white flex justify-between items-center">
    <h3 class="font-bold pl-2"> Maklumat Detail ENRP</h3>
    <span class=" text-base pr-2 ">
      {{-- Negeri : {{ session()->get('authenticatedUser')['state_name'] }} --}}
              CAWANGAN : {{ session()->get('authenticatedUser')['branch_name'] }}
    </span>
</div>

  <div class="flex flex-wrap">
    <table class="w-full whitespace-no-wrap table-auto">
                    <thead>
                     
                    </thead>
                    <tbody class="bg-white">
                      @foreach ($NERPS_details as $item)

                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                                <div>
                                    <div class="text-sm leading-5 text-gray-800">

                                     <b>Nama Fail</b>

                                    </div>
                                </div>
                            </div>
                        </td> 
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                              <div class = "flex-grow">

                                <div class="text-sm leading-5 text-gray-800">
                                  <input value = "{{ $item->filename }}" disabled = true
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                  />
                                </div>

                              </div>
                          </div>
                        </td> 
                      </tr>

                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                              <div class = "flex-grow">
                                    <div class="text-sm leading-5 text-gray-800">

                                     <b>No Akaun</b>

                                    </div>
                                </div>
                            </div>
                        </td> 
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                            <div class = "flex-grow">
                                <div class="text-sm leading-5 text-gray-800">

                                  <div class="text-sm leading-5 text-gray-800">
                                    <input value = "{{ $item->payrefnum }}" disabled = true
                                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    />
                                  </div>
                                  
                                </div>
                              </div>
                          </div>
                        </td> 
                      </tr>

                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                              <div class = "flex-grow">
                                    <div class="text-sm leading-5 text-gray-800">

                                     <b>Nama Usahawan</b>

                                    </div>
                                </div>
                            </div>
                        </td> 
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                            <div class = "flex-grow">
                                <div class="text-sm leading-5 text-gray-800">
                                  
                                  <div class="text-sm leading-5 text-gray-800">
                                    <input value = "{{ $item->buyername }}" disabled = true
                                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    />
                                  </div>
                                  
                                </div>
                              </div>
                          </div>
                        </td> 
                      </tr>

                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                              <div class = "flex-grow">
                                    <div class="text-sm leading-5 text-gray-800">

                                     <b>Bahagian</b>

                                    </div>
                                </div>
                            </div>
                        </td> 
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                            <div class = "flex-grow">
                                <div class="text-sm leading-5 text-gray-800">
                                  
                                  <div class="text-sm leading-5 text-gray-800">
                                    <input value = "{{ $item->section }}" disabled = true
                                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    />
                                  </div>
  
                                </div>
                              </div>
                          </div>
                        </td> 
                      </tr>

                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                              <div class = "flex-grow">
                                    <div class="text-sm leading-5 text-gray-800">

                                     <b>Kad Pengenalan</b>

                                    </div>
                                </div>
                            </div>
                        </td> 
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                            <div class = "flex-grow">
                                <div class="text-sm leading-5 text-gray-800">
                                  
                                  <div class="text-sm leading-5 text-gray-800">
                                    <input value = " {{ $item->idnum }}" disabled = true
                                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    />
                                  </div>
                                 
                                </div>
                              </div>
                          </div>
                        </td> 
                      </tr>

                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                              <div class = "flex-grow">
                                    <div class="text-sm leading-5 text-gray-800">

                                      <b>Jumlah Potongan</b>

                                    </div>
                                </div>
                            </div>
                        </td> 
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                            <div class = "flex-grow">
                                <div class="text-sm leading-5 text-gray-800">
                                  
                                  <div class="text-sm leading-5 text-gray-800">
                                    <input value = "{{ substr($item->debitamt,11,3) }}" disabled = true
                                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    />
                                  </div>
                                  

                                </div>
                              </div>
                          </div>
                        </td> 
                      </tr>

                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                              <div class = "flex-grow">
                                    <div class="text-sm leading-5 text-gray-800">

                                     <b>Skim</b>

                                    </div>
                                </div>
                            </div>
                        </td> 
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                            <div class = "flex-grow">
                                <div class="text-sm leading-5 text-gray-800">
                                  
                                  <div class="text-sm leading-5 text-gray-800">
                                    <input value = "{{ $item->purpose }}" disabled = true
                                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    />
                                  </div>
                                  
                                </div>
                              </div>
                          </div>
                        </td> 
                      </tr>

                      <tr>
                        {{-- <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                              <div class = "flex-grow">
                                    <div class="text-sm leading-5 text-gray-800">

                                     <b>Tarikh Lulus Pinjaman <b>

                                    </div>
                                </div>
                            </div>
                        </td>  --}}
                        {{-- <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                            <div class = "flex-grow">
                                <div class="text-sm leading-5 text-gray-800">
                                  
                                  <div class="text-sm leading-5 text-gray-800">
                                    <input value = "{{ substr($item->appdate,0,2).'-'.substr($item->appdate,2,2).'-'.substr($item->appdate,4,4) }}" disabled = true      
                                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    />
                                  </div>

                                </div>
                              </div>
                          </div>
                        </td>  --}}
                      </tr>

                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                              <div class = "flex-grow">
                                    <div class="text-sm leading-5 text-gray-800">

                                     <b>Tarikh Mula Arahan Potongan</b>

                                    </div>
                                </div>
                            </div>
                        </td> 
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                            <div class = "flex-grow">
                                <div class="text-sm leading-5 text-gray-800">
                                  
                                  <div class="text-sm leading-5 text-gray-800">
                                    <input value = "{{ substr($item->effdate,0,2).'-'.substr($item->effdate,2,2).'-'.substr($item->effdate,4,4) }}" disabled = true
                                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    />
                                  </div>
                                  
                                </div>
                              </div>
                          </div>
                        </td> 
                      </tr>

                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                              <div class = "flex-grow">
                                    <div class="text-sm leading-5 text-gray-800">

                                     <b>Tarikh Akhir Arahan Potongan</b>

                                    </div>
                                </div>
                            </div>
                        </td> 
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                            <div class = "flex-grow">
                                <div class="text-sm leading-5 text-gray-800">
                                  
                                  <div class="text-sm leading-5 text-gray-800">
                                    <input value = "{{ substr($item->expdate,0,2).'-'.substr($item->expdate,2,2).'-'.substr($item->expdate,4,4) }}" disabled = true
                                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    />
                                  </div>
                                  

                                </div>
                              </div>
                          </div>
                        </td> 
                      </tr>

                      <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="flex items-center">
                              <div class = "flex-grow">
                                    <div class="text-sm leading-5 text-gray-800">

                                     <b>Status</b>

                                    </div>
                                </div>
                            </div>
                        </td> 
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                          <div class="flex items-center">
                            <div class = "flex-grow">
                                <div class="text-sm leading-5 text-gray-800">
                                  
                                  <div class="text-sm leading-5 text-gray-800">
                                    <input value = "{{ $item->approval }}" disabled = true
                                      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    />
                                  </div>
                                  
                                </div>
                              </div>
                          </div>
                        </td> 
                      </tr>

                    @endforeach
                    </tbody>
                </table>
             <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
             </div>
      <!--  END TABLES -->
</div>
</div>

    <!-- With actions -->
   <!-- <button class="button button2" onclick="window.location='{{ url("emandate-list") }}'">Back</button> -->

    <a href= '{{ url("search_mainenrp") }}' >
			<div class="py-8 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span>Back</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current w-4 h-4 ml-2">
					<path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" class="heroicon-ui"></path>
				</svg>
			</div>
  	</a>
    

  </div>
  </div>

  <br>
  
</main>
@endsection




