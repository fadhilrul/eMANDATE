@extends('pages.layout.app')
@section('content')

@if ($message = Session::get('success'))
<div class="container">
        <div class="alert">
            <span>{{ $message }}</span>
        </div>
        </div>
    @endif

<main class="h-full pb-16 overflow-y-auto">
<div class="container">
  <div class=" grid px-6 mx-auto">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Senarai Akaun Berserta Status
    </h2>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap table-auto">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th colspan="2" class="px-4 py-3"><b>Makluamat Ringkasan Data</b></th>

            </tr>
          </thead>
          <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
          
            <table class="table table-bordered">
                <tr>
                    <th class="px-4 py-3" style="text-align:center; font-size: 12px">No</th>
                    <th class="px-4 py-3" style="text-align:center; font-size: 12px">Nama</th>
                    <th class="px-4 py-3" style="text-align:center; font-size: 12px">No Akaun</th>
                    <th class="px-4 py-3" style="text-align:center; font-size: 12px">Status</th>
                    <th class="px-4 py-3" style="text-align:center; font-size: 12px">Status Bayar</th>
                    <th class="px-4 py-3" style="text-align:center; font-size: 12px">Action</th>
                </tr>

                <br>
                
                @foreach ($status as $item)
                <tr>
                    <td class="px-4 py-3" style="text-align:center; font-size: 12px">{{ ++$i }}</td>
                    <td class="px-4 py-3" style="text-align:center ; font-size: 12px">{{ $item->buyername }}</td>
                    <td class="px-4 py-3" style="text-align:center ; font-size: 12px">{{ $item->buyeracc }}</td>
                    <td class="px-4 py-3" style="text-align:center ; font-size: 12px">{{ $item->status }}</td>
                    <td class="px-4 py-3" style="text-align:center ; font-size: 12px">{{ $item->action }}</td>
                    <td class="px-4 py-3" style="text-align:center ; font-size: 12px">
                            <a class="btnsmall button3" href="{{ url('change-status/'.$item->buyeracc.'')}}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </table>

            {!! $status->links() !!}
          </tbody>
        </table>
       </div>
     </div>   


    </div>
  </div>

    <a href= '{{ url("search_cftlist") }}' >
			<div class="py-8 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span>Back</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current w-4 h-4 ml-2">
					<path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" class="heroicon-ui"></path>
				</svg>
			</div>
  	</a>

</main>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
    
      
@endsection
