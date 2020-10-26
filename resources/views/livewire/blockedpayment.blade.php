<main class="h-full pb-16 overflow-y-auto">
    <br><br>
    <div
		class="flex items-center justify-between p-4 mb-2 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
		>
		<div class="flex items-center">
			<h1>Laporan Senarai Sekatan Pemotongan</h1>
		</div>
    </div>
    <br><br>
    
    <!--<div class="container">
      <div class=" grid px-6 mx-auto">
        <h2
          class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
          Laporan Senarai Sekatan Pemotongan
        </h2>
    -->  
    <!-- search section -->
      <div class="flex justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              >
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <input
                      class="w-full pl-8 pr-2 text-sm text-white-700 placeholder-gray-600 bg-white-100 border-0 rounded-md dark:placeholder-white-500 dark:focus:shadow-outline-white dark:focus:placeholder-white-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                      type="text"
                      placeholder="Carian no akaun / no ic"
                      aria-label="Search"
                      wire:model="searchTerm"
                      class="form-control"
                    /> 
              </div>
          </div>
    
    
    
        <!-- With avatar -->
        <h4
          class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
        >
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
          <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
              <thead>
                <tr
                  class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                >
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">No Akaun</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">No Kad Pengenalan</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Nama</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Amaun</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Kekeparapn Potogan</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Produk</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Tarikh Mula Potongan</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Tarikh Luput Potongan</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">ID Bank</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Status Potongan</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Tarikh Akhir Pembayaran</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Tarikh Bayaran Seterusnya</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Tarikh Sekatan Pemotongan</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Tarikh Akhir Proses</th>
                <th class="px-4 py-3" style="text-align:center; font-size: 15px">Status Pembayaran</th>
                 <!-- <th style='width: 100px;'>Button</th> -->
                </tr>
              </thead>
              <tbody
                class="bg-white divide-y dark:divide-white-700 dark:bg-white-800">
              @foreach ($blocked_payment as $item)
             
                <tr 
                  {{-- class="text-gray-700 dark:text-gray-400"> --}}
                  class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                 
                  <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->fms_acct_no }} 
                  </td>
                  <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                  {{ $item->idnum }}</a>
                  </td>
                  <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                      {{ $item->buyername }}
                  </td>
                <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->debitamt }}
                </td>
                <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->freqnum }}
                </td>
                <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->purpose }}
                </td>
                <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->effdate }} 
                  </td>
                  <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                  {{ $item->expdate }}</a>
                  </td>
                  <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                      {{ $item->bankid }}
                  </td>
                  <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->approval }}
                </td>
                <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->lastcycle_date }}
                </td>
                <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->nextcycle_date }}
                </td>
                <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->blockpayment_date }}
                </td>
                <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->lastprocess_date }}
                </td>
                <td class="px-4 py-3" style="text-align:center; font-size: 12px">
                    {{ $item->blocked_paymnt_status }}
                </td>
                </tr>
    
              @endforeach
              </tbody>
            </table>
          </div>
          {{ $blocked_payment->links() }}
          <div
            class="grid px-1 py-2 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
          >
            <span class="flex items-center col-span-3">
             
            </span>
            <span class="col-span-2"></span>
            <!-- Pagination -->
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
                </ul>
              </nav>
            </span>
          </div>
        </div>
    
        <!-- With actions -->
        
      </div>
    </div>
    
    </main>
    
    
    