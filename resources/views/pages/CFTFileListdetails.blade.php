@extends('pages.layout.app')
@section('content')

  {{-- <table>
      <thead>
        <tr>
            <td>FILENAME</td>
        </tr>
        <tr>
            <td>ACCOUNTNO</td>
        </tr>
        <tr>
            <td>IC REGISTERATION</td>
        </tr>
        <tr>
            <td>NAME</td>
        </tr>
        <tr>
            <td>TRANSACTION AMOUNT</td>
        </tr>
        <tr>
            <td>TRANSACTION DATE</td>
        </tr>
        <tr>
            <td>RETRY NO</td>
        </tr>
        <tr>
            <td>MANDATE</td>
        </tr>
        <tr>
            <td>DATE POTONG</td>
        </tr>
        <tr>
            <td>STATUS</td>
        </tr>
        </tr>
        <tr>
            <td>ACTION</td>
        </tr>


      </thead>
      <tbody>
        @foreach ($CFT_details as $item)
       
          <tr>
            {{ $item->filename }}
          </tr>
          <tr>
            {{ $item->buyeracc }}
          </tr>
          <tr>
            {{ $item->idnum }}
          </tr>
          <tr>
            {{ $item->buyername }}
          </tr>
          <tr>
            {{ $item->tranmt }}
          </tr>
          <tr>
            {{ $item->hvaluedt }}
          </tr>
          <tr>
            {{ $item->retryno }}
          </tr>
          <tr>
            {{ $item->mandate }}
          </tr>
          <tr>
          {{ $item->merchdate }}
          </tr>  
          <tr>
            {{ $item->status }}
          </tr>
          <tr>
            {{ $item->action }}
          </tr>

        @endforeach
      </tbody>
  </table> --}}

  {{-- <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    <br>
        CFT E-Mandate Details
   </h4>
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
   <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
     
      @foreach ($CFT_details as $item)

        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <td class="px-4 py-3">Nama Fail</td>

            <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->filename }}
                </div>
            </td>
          
        </tr>

        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <td class="px-4 py-3">No Akaun</td>

            <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->buyeracc }}
                </div>
            </td>
          
        </tr> 
 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <td class="px-4 py-3">Bahagian</td>

           

        </tr> 
         <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Ic No</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->idnum }}
                </div>
            </td>

        </tr>  
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Nama</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->buyername }}
                </div>
            </td>

        </tr> 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Jumlah Transaksi</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->tranmt }}
                </div>
            </td>

        </tr> 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Tarikh Transaksi</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item-> hvaluedt}}
                </div>
            </td>

        </tr> 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Jumlah Percubaan</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->retryno }}
                </div>
            </td>

        </tr> 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Mandate</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->mandate }}
                </div>
            </td>

        </tr> 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Tarikh Potongan</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->merchdate }}
                </div>
            </td>

        </tr> 
       
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Status Permohonan</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->status }}
                </div>
            </td>
        </tr>

        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Status Potongan</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->action }}
                </div>
            </td>
        </tr>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Pertukaran Status Potongan</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>

                    <button class="btnsmall button3" onclick="window.location='#'">HOLD</button>
                    <button class="btnsmall button4" onclick="window.location='#'">RE-ACTIVE</button>

                </div>
            </td>
        </tr>

        @endforeach

      </thead>
      <tbody
       
      </tbody>
    </table>
  </div>
  {{ $CFT_details->links() }}
</div> --}}



<main class="h-full pb-16 overflow-y-auto">
<div class="container">
  <div class=" grid px-6 mx-auto">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Senarai Fail CFT E-Mandate
    </h2>
    <!-- CTA -->
    
    <h4
      class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
    >
    </h4>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap table-auto">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th colspan="2" class="px-4 py-3"><b>Makluamat Ringkasan CFT</b></th>
            </tr>
          </thead>
          <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($CFT_details as $item)

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Nama Fail</td><td class="px-4 py-3">{{ $item->filename }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">No Akaun</td> <td class="px-4 py-3">{{ $item->buyeracc }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">IC No</td> <td class="px-4 py-3">{{ $item->idnum }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Nama Pembeli</td> <td class="px-4 py-3"> {{ $item->buyername }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Jumlah Transaksi</td> <td class="px-4 py-3">{{ $item->tranmt }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Tarikh Transaksi</td> <td class="px-4 py-3">{{ $item->hvaluedt }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Jumlah Percubaan</td> <td class="px-4 py-3">{{ $item->retryno }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Mandate</td> <td class="px-4 py-3">{{ $item->mandate }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Tarikh Potongan</td> <td class="px-4 py-3">{{ $item->merchdate }}</td>
            </tr>

            <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <td class="px-4 py-3">Status</td> <td class="px-4 py-3">{{ $item->status }}</td>
           </tr>

           <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <td class="px-4 py-3">Status Potongan</td> <td class="px-4 py-3">{{ $item->action }}</td>
           </tr>

        <!--   <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <td class="px-4 py-3">Pertukaran Status Potongan</td> 
            <td class="px-4 py-3">

              <a href = "{{ url('change-status/'.$item -> buyeracc.'')}}">
              <div class="py-8 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-left">
   
              <span class="btnsmall button2">Teruskan</span>

            </td>
           </tr> -->
            

            @endforeach
          </tbody>
        </table>
      </div>
      <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
      >
        <span class="col-span-2"></span>
        <!-- Pagination -->
      </div>
    </div>

    <!-- With actions -->
   <!-- <button class="button button2" onclick="window.location='{{ url("emandate-list") }}'">Back</button> -->

    <a href= '{{ url("search_cftlist") }}' >
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




