
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
      <!--<input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm" /> -->
      
       <!-- Search input section -->
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
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text"
                  placeholder="Search for no kad pengenalan/ no akaun"
                  aria-label="Search"
                  wire:model="searchTerm"
                  class="form-control"
                />
              </div>
            </div>



            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                   <!-- <th style='width: 200px;'>{{ $message }}</th> -->
                   <th style='width: 200px;'>Nama</th>                   
                    <th style='width: 200px;'>No Kad Pengenalan</th>
                    <th style='width: 200px;'>No Akaun</th>
                    <th style='width: 200px;'>Status</th>
                </tr>
                @foreach ($EMANDATE_ENRP as $item)
                <tr>
                        <td style='text-align:center;vertical-align:middle'>
                            <a href="#">   {{ $item->buyername }} </a>
                        </td>
                        <td style='text-align:center;vertical-align:middle'>
                            <a href="#">   {{ $item->idnum }} </a>
                        </td>
                        <td style='text-align:center;vertical-align:middle'>
                            <a href = "#">   {{ $item->payrefnum }} </a>
                        </td>
                         <td style='text-align:center;vertical-align:middle'>
                            <a href="#">   {{ $item->processflag }} </a>
                        </td>
                        <td>
                            <a href= '{{ url('linkviewsearch/'.$item->payrefnum.'')}}' >
                                <div class="py-8 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span style="color:blue">View</span>
                                </div>
                            </a>
                        </td>
                </tr>
                @endforeach
            </table>
            {{ $EMANDATE_ENRP->links() }}
        </div>
    </div>

</div>

<br/>

<div'>
    <a href= '{{ url("emandate-dashboard") }}' >
        <span class="ml-1 text-lg font-bold text-gray-800 dark:text-gray-200" style="color:purple"> HOME </span>
    </a>
</div>

