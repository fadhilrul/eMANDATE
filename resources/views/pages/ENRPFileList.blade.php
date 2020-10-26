@extends('pages.layout.app')
@section('content')
{{-- <style>
  @media (min-width: 1280px){
      .container {
          max-width: 100vw !important;
      }
  }
</style> --}}


<main class="h-full pb-16 overflow-y-auto">
<div class= "container">
  <div class=" grid px-6 mx-auto">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Senarai Maklumat ENRP E-Mandate
    </h2>
    <!-- With avatar -->
    <h4
      class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
    >
    @foreach ($NERPS as $item)
   <!-- {{ $item->filename }} -->
    @endforeach
    </h4>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
              <th class="px-4 py-3">Nama Fail</th>
              <th class="px-4 py-3">No Akaun</th>
              <th class="px-4 py-3">Bahagian</th>
              <th class="px-4 py-3">IC No</th>
              <th class="px-4 py-3">Nama Pelanggan</th>
              <th class="px-4 py-3">Tujuan</th>
              <th class="px-4 py-3">Tarikh Efektif</th>
              <th class="px-4 py-3">Tarikh Tamat</th>
              <th class="px-4 py-3">Status</th>
            </tr>
          </thead>
          <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
          @foreach ($NERPS as $item)
         
            <tr 
              {{-- class="text-gray-700 dark:text-gray-400"> --}}
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <td class="px-4 py-3">
              <a href = "{{ url('link/'.$item->payrefnum.'')}}"> {{ $item->filename }} </a>
              </td>
              <td class="px-4 py-3">
                  {{ $item->payrefnum }}
              </td>
              <td class="px-4 py-3">
                  {{ $item->section }}
              </td>
              <td class="px-4 py-3">
                  {{ $item->idnum }}
              </td>
              <td class="px-4 py-3">
                  {{ $item->buyername }}
              </td>
              <td class="px-4 py-3">
                  {{ $item->purpose }}
              </td>
              <td class="px-4 py-3">
                  {{ $item->effdate }}
              </td>
              <td class="px-4 py-3">
                  {{ $item->expdate }}
              </td>
              <td class="px-4 py-3">
                  {{ $item->approval }}
              </td>
              
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      {{ $NERPS->links() }}
     
    </div>

    <!-- With actions -->
    
  </div>
  </div>
</main>
@endsection


