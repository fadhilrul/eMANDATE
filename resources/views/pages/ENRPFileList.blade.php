@extends('pages.layout.app')
@section('content')

  {{-- <table>
      <thead>
        <tr>
          <td>FILENAME</td>
          <td>ACCOUNTNO</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($NERPS as $item)
        <tr>
          <td>
            {{ $item->filename }}
          </td>
          <td>
            {{ $item->payrefnum }}
          </td>
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
        <tr
          class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">Nama File</th>
          <th class="px-4 py-3">NO Account</th>
        </tr>
      </thead>
      <tbody
        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        @foreach ($NERPS as $item)
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div
                class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
              </div>
              {{ $item->filename }}
            </div>
          </td>
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div
                class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
              </div>
              {{ $item->payrefnum }}
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection


