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

  <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    <br>
      Senarai ENRP E-Mandate
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
      <tbody
       
      </tbody>
    </table>
  </div>
  {{ $NERPS_details->links() }}
</div>
@endsection


