
  <div class="container px-6 mx-auto grid">

    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

      <div class="bg-blue-800 p-2 shadow text-xl text-white flex justify-between items-center">
          <h3 class="font-bold pl-2">E-Mandate Dashboard</h3>
          <span class=" text-base pr-2 ">
            {{-- Negeri : {{ session()->get('authenticatedUser')['state_name'] }} --}}
				    CAWANGAN : {{ session()->get('authenticatedUser')['branch_name'] }}
          </span>
      </div>

    {{--   {{ session()->get('authenticatedUser')['branch_type'] }} --}}
        
      @if ( session()->get('authenticatedUser')['branch_type'] == 'HQ' )
      
    <!-- for dropdown filter -->
    <table class="md:table-auto lg:table-fixed w-full ">
        <tr class="bg-blue-100">
            <td class="px-2 py-2 border border-indigo-dark font-semibold">
                <div class = "form-group">
                    <div class = "flex-grow">
                    <div class="text-sm leading-5 text-gray-800">
                        <label>NEGERI</label>  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="country" class="form-control" wire:model="country">
                            <option selected >Pilih Negeri</option> 
                                @foreach ($countries as $country)
                                    <option value={{ $country->code }}>{{ $country->description }}</option>
                                @endforeach      
                        </select>
                        
                    </div>
                </div>
                </div> 
            </td>
        </tr> 
        <tr class="bg-blue-100">
            <td class="px-2 py-2 border border-indigo-dark font-semibold">
                <div class = "form-group">
                    <div class = "flex-grow">
                    <div class="text-sm leading-5 text-gray-800">
                        <label>CAWANGAN</label> &nbsp;&nbsp;
                        <select name="city" class="form-control" wire:model="city">
                            <option selected >Pilih Cawangan</option> 
                            <option value='All'>SEMUA</option> 
                                @foreach ($cities as $city)
                                    <option value={{ $city->branch_code }}>{{ $city->branch_name }}</option>
                                @endforeach 
                        </select>
                    </div>
                    </div>
                </div> 
            </td>
        </tr> 
       
    </table> 
 
 <br>
  <div class="flex flex-wrap">  
    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <div class="bg-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-lg p-5">
            <div class="flex flex-row items-center">
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan</h5>
                    <h3 class="font-bold text-3xl">{{ ($posts->count()) }} 
                    <span class="text-indigo-500"><i class="fas fa-exchange-alt"></i></span></h3>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <div class="bg-green-100 border-b-4 border-green-500 rounded-lg shadow-lg p-5">
            <div class="flex flex-row items-center">
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Lulus</h5>
                    <h3 class="font-bold text-3xl">{{ ($postspass->count()) }} 
                    <span class="text-green-500"><i class="fas fa-exchange-alt"></i></span></h3>
                </div>
            </div>
        </div>
      </a>
    </div>

    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <div class="bg-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-lg p-5">
            <div class="flex flex-row items-center">
                <div class="flex-1 text-right md:text-center">
                    <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Dalam Proses</h5>
                    <h3 class="font-bold text-3xl"> {{ ($postsfail->count()) }} 
                    <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                </div>
            </div>
        </div>
      </a>
    </div> 
  </div>

<br><br>
<h5 class="font-bold uppercase text-gray-600">Maklumat Data</h5><br>
  <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">             
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Tarikh Permohonan</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Cawangan</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">No Akaun</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Kad Pengenalan</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Nama</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Mula E-mandate</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Tamat E-mandate</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Status</th>
                
        </thead>
        <tbody class="bg-white">
          @foreach ($posts as $item)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">

                            {{ ($item->hcrdate) }}

                            </div>
                        </div>
                    </div>
                </td> 

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">

                                {{ ($item->branch_name) }}
 
                            </div>
                        </div>
                    </div>
                </td>

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">

                                {{ $item->payrefnum }}

                            </div>
                        </div>
                    </div>
                </td> 

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">

                                {{ $item->idnum }}

                            </div>
                        </div>
                    </div>
                </td> 

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">

                           
                            {{ substr($item->buyername,0,20) }}

                            </div>
                        </div>
                    </div>
                </td> 

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">

                             {{ substr($item->effdate,0,2).'/'.substr($item->effdate,2,2).'/'.substr($item->effdate,4,4) }} 
                            
                            </div>
                        </div>
                    </div>
                </td> 

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">

                                  {{ substr($item->expdate,0,2).'/'.substr($item->expdate,2,2).'/'.substr($item->expdate,4,4) }} 
                                
                            </div>
                        </div>
                    </div>
                </td> 

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <div class="flex items-center">
                        <div>
                            <div class="text-sm leading-5 text-gray-800">

                               {{ $item->approval }} 
                            
                            </div>
                        </div>
                    </div>
                </td> 
              
            
            </tr>
           @endforeach
        </tbody>
    </table>

</div>

<!--  for all except staff from HQ -->      
      @else
      <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="bg-blue-100 border-b-4 border-blue-600 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                        <!--  <div class="rounded-full p-5 bg-blue-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div> -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Daftar</h5>
                          <h3 class="font-bold text-3xl"> {{($posts->count())}} 
                          <span class="text-blue-500"><i class="fas fa-caret-up"></i></span></h3>
                      </div>
                  </div>
              </div>
              <!--/Metric Card-->
          </div>  
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="bg-green-100 border-b-4 border-green-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                          <!--<div class="rounded-full p-5 bg-green-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>-->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Lulus</h5>
                          <h3 class="font-bold text-3xl">{{($postspass->count())}} 
                          <span class="text-green-500"><i class="fas fa-exchange-alt"></i></span></h3>
                      </div>
                  </div>
              </div>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="bg-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                         <!-- <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div> -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Dalam Proses</h5>
                          <h3 class="font-bold text-3xl"> {{($postsfail->count())}} 
                          <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                      </div>
                  </div>
              </div>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <a href="{{route('searchenrp.index')}}">
              <!--Metric Card-->
              <div class="bg-red-100 border-b-4 border-red-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                         <!-- <div class="rounded-full p-5 bg-red-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>  -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600"> Senarai </h5>
                          <h3 class="font-bold text-3xl"> ENRP</h3>
                      </div>
                  </div>
              </div>
             </a>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
            <a href="{{route('searchcft.index')}}">
              <div class="bg-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                        <!--  <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>  -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600"> Senarai </h5>
                          <h3 class="font-bold text-3xl"> CFT </h3>
                      </div>
                  </div>
              </div>
            </a>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
            <a href="{{route('search.index')}}">
              <div class="bg-orange-100 border-b-4 border-orange-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                        <!--  <div class="rounded-full p-5 bg-orange-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>  -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600">INFO</h5>
                          <h3 class="font-bold text-3xl"> e-Mandate <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                      </div>
                  </div>
              </div>
            </a>
              <!--/Metric Card-->
          </div>
      </div>

      

  </div>
</div>
@endif

{{-- @endsection --}}