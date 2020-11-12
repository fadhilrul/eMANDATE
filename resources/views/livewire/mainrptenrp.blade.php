<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="bg-blue-800 p-2 shadow text-xl text-white">
                <h3 class="font-bold pl-2">Senarai Laporan Fail ENRP</h3>
            </div>
            
        <!-- search section -->
        <!--	<div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">  -->
                  <div class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
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
                                placeholder="Carian Tarikh Daftar"
                                aria-label="Search"
                                wire:model="findmainrptenrp"
                                />
                              </div>
                          </div>
                      </div>
                  </div>
      
                <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Tarikh Daftar</th>
                                <th lass="px-6 py-4 whitespace-no-wrap text-left  text-sm leading-5">
                                   <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">
                                    <a href = "#"> Papar Semua </a> </button>
                                </th>  
                            </tr>
                         </thead>
                    
                         @foreach ($rpt_enrp as $item)
                        <tbody class="bg-white">  
                         
                            <tr>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-800">
    
                                               {{ substr($item->hcrdate,0,2).'-'.substr($item->hcrdate,2,2).'-'.substr($item->hcrdate,4,4) }} 
    
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                    <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">
                                        <a href = "{{ url('linkrptenrp/'.$item->hcrdate.'')}}">  
                                            <svg class="w-10 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                                        </a> 
                                    </button>

                                    <button class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none">
                                        <a href = "{{ route('export-ENRP',['id' => $item->hcrdate]) }}">  
                                        
                                            <svg class="w-10 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" class="heroicon-ui"></path></svg>
                                         </a>
                                    </button>       
                                </td>
                              
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                    <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
                   </div>
                </div>
                <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
                </div>		
            <!--</div> -->
        </div>
    </div>
    </main>
    
    
    