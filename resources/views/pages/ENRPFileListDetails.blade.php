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
            <td>SECTION</td>
        </tr>
        <tr>
            <td>IC REGISTERATION</td>
        </tr>
        <tr>
            <td>NAME</td>
        </tr>
        <tr>
            <td>DEBIT AMOUNT</td>
        </tr>
        <tr>
            <td>PURPOSE</td>
        </tr>
        <tr>
            <td>EFFECTIVE DATE</td>
        </tr>
        <tr>
            <td>NEXPIRY DATEAME</td>
        </tr>
        <tr>
            <td>APPROVE DATEAME</td>
        </tr>
        <tr>
            <td>MERCH DATEAME</td>
        </tr>
        <tr>
            <td>APPROVAL STATUS</td>
        </tr>


      </thead>
      <tbody>
        @foreach ($NERPS_details as $item)
       
          <tr>
            {{ $item->filename }}
          </tr>
          <tr>
            {{ $item->payrefnum }}
          </tr>
          <tr>
            {{ $item->section }}
          </tr>
          <tr>
            {{ $item->idnum }}
          </tr>
          <tr>
            {{ $item->buyername }}
          </tr>
          <tr>
            {{ $item->debitamt }}
          </tr>
          <tr>
            {{ $item->purpose }}
          </tr>
          <tr>
            {{ $item->effdate }}
          </tr>
          <tr>
            {{ $item->expdate }}
          </tr>
          <tr>
            {{ $item->appdate }}
          </tr>
          <tr>
            {{ $item->merchdate }}
          </tr>
          <tr>
            {{ $item->approval }}
          </tr>


        @endforeach
      </tbody>
  </table> --}}

  {{-- <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    <br>
        ENRP E-Mandate Details
   </h4>
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
   <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
     
      @foreach ($NERPS_details as $item)

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
                    {{ $item->payrefnum }}
                </div>
            </td>
          
        </tr> 
 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <td class="px-4 py-3">Bahagian</td>

            <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->section }}
                </div>
            </td>

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
             <th class="px-4 py-3">Jumlah Debit</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->debitamt }}
                </div>
            </td>

        </tr> 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Tujuan</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->purpose }}
                </div>
            </td>

        </tr> 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Tarikh Mula</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->effdate }}
                </div>
            </td>

        </tr> 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Tarikh Tamat</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->expdate }}
                </div>
            </td>

        </tr> 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Tarikh Lulus</th>

             <td class="px-4 py-3">
                 <div class="flex items-center text-sm">
                    <div
                     class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    </div>
                    {{ $item->appdate }}
                </div>
            </td>

        </tr> 
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3">Merch Date</th>

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
                    {{ $item->approval }}
                </div>
            </td>
        </tr>

        @endforeach

      </thead>
      <tbody>
       
      </tbody>
    </table>
  </div>
  {{ $NERPS_details->links() }}
</div> --}}



<main class="h-full pb-16 overflow-y-auto">
<div class="container">
  <div class=" grid px-6 mx-auto">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Senarai Fail E-Mandate
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
              <th colspan="2" class="px-4 py-3"><b>Makluamat Ringkasan ENRP</b></th>
            </tr>
          </thead>
          <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($NERPS_details as $item)

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Nama</td><td class="px-4 py-3">{{ $item->filename }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">No Akaun</td> <td class="px-4 py-3">{{ $item->payrefnum }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Bahagian</td> <td class="px-4 py-3">{{ $item->section }}</td>
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
              <td class="px-4 py-3">Jumlah Debit</td> <td class="px-4 py-3">{{ $item->debitamt }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Tujuan</td> <td class="px-4 py-3">{{ $item->purpose }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Tarikh Mula Potongan</td> <td class="px-4 py-3">{{ $item->effdate }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Tarikh Tamat</td> <td class="px-4 py-3">{{ $item->expdate }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Tarikh Memohon</td> <td class="px-4 py-3">{{ $item->appdate }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Tarikh Merch</td> <td class="px-4 py-3">{{ $item->merchdate }}</td>
            </tr>

            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">Tarikh Lulus</td> <td class="px-4 py-3">{{ $item->appdate }}</td>
            </tr>

            <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <td class="px-4 py-3">Status</td> <td class="px-4 py-3">{{ $item->approval }}</td>
           </tr>
            

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

    <a href= '{{ url("emandate-list") }}' >
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




