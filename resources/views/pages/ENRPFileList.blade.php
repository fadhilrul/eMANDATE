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
      <!--<div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
      >
        <span class="flex items-center col-span-3">
          Showing 21-30 of 100
        </span>
        <span class="col-span-2"></span>
        
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
          <nav aria-label="Table navigation">
            <ul class="inline-flex items-center">
              <li>
                <button
                  class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                  aria-label="Previous"
                >
                  <svg
                    aria-hidden="true"
                    class="w-4 h-4 fill-current"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                    ></path>
                  </svg>
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  1
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  2
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  3
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  4
                </button>
              </li>
              <li>
                <span class="px-3 py-1">...</span>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  8
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  9
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                  aria-label="Next"
                >
                  <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                    ></path>
                  </svg>
                </button>
              </li>
            </ul>
          </nav>
        </span>
      </div> -->
    </div>

    <!-- With actions -->
    
  </div>
  </div>
</main>
@endsection


