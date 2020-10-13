@extends('pages.layout.app')
@section('content')

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<main class="h-full pb-16 overflow-y-auto">
<div class="container">
  <div class=" grid px-6 mx-auto">
    <h4 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Pertukaran Status
    </h4>
   </div> 
 </div>  

<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
      <table class="w-full whitespace-no-wrap table-auto">
        <thead>
          <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <th colspan="2" class="px-4 py-3" style="text-align:center"><b>Makluamat Ringkasan Data</b></th>

          </tr>
        </thead>
        @foreach ($status as $item)
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
         <div class="container">
         
         <form action = "{{ route('change-status.update', $item-> buyeracc )  }}" method="POST">

            <table class="table table-bordered center"  style="border:2px solid gray;margin-left:auto;margin-right:auto;">
            <br>
            
                @method('PUT')
                @csrf
                <!-- <input type="hidden" name="buyeracc" value="{{ $item->buyeracc }}"> -->
            
                <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <td class="px-4 py-3">Nama</td><td class="px-4 py-3">{{ $item->buyername }}</td>
                </tr>

                <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <td class="px-4 py-3">No Akaun</td><td class="px-4 py-3">{{ $item->buyeracc }}</td>
                </tr>

                <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <td class="px-4 py-3">Status</td><td class="px-4 py-3">{{ $item->status }}</td>
                </tr>
          
                <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <td  class="px-4 py-3">Pertukaran Status : </td>
                <td  class="px-4 py-3">
                     <div class="form-group">
                         <label for="action"></label>
                         <select id="action" name="action">
                             <option value="ACTIVE">ACTIVE</option>
                             <option value="ON HOLD">ON HOLD</option>
                         </select>
                     </div>
                </td> 
                </tr>
               
                </table>

                <br>
               
                <div class="py-8 flex items-center justify-center">
                        <button type="submit" class="btnnormal button2">SUBMIT</button>
                    </div>
                </div>

                @endforeach

            {!! $status->links() !!}

            </form>
               
           </div> 
           <br>

            <a href= '{{ url("change-status") }}' >
                <div>
                    <div class="py-6 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center">
                    <span style="color:blue">Back</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15 class="heroicon-ui"></path>
                    </svg>
                </div>
            </a>

<br>

        </tbody>
        

    </div>

  
</div>      

@endsection


				


</main>



   
 