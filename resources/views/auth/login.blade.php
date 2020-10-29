@extends('pages.layout.base')
@section('body')

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-md w-full">
            <div>
                  <!--logo-->
                  <div class="flex font-bold justify-center mt-6">
                        <img class="h-40 w-40"
                            src="https://static.imoney.my/articles/wp-content/uploads/2018/09/Tekun-Nasional-logo.png">
                    </div>
                  <h3 class="mt-6 text-center text-3xl leading-5 font-extrabold text-blue-900">
                        Log Masuk<br><br>e-MANDATE
                  </h3>
            </div>
            
            <form class="mt-8" action="{{ route('loggingin') }}" method="POST">
                  @if(session()->has('loginerror'))
                        <x-general.alert.base class="bg-red-200 border-2 border-red-300 rounded-md p-2 text-sm my-2">
                              <x-slot name="message">{{ session()->get('loginerror') }}</x-slot>
                        </x-general.alert.base>
                  @endif
                  @csrf
                  <div class="rounded-md shadow-sm grid grid-col-1 gap-3">
                        <div>
                              <label for="idpengguna"class="text-sm">ID Pengguna</label>
                              <input aria-label="ID Pengguna" id="idpengguna" name="idpengguna" type="text" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="ID Pengguna">
                        </div>
                        <div class="-mt-px">
                              <label for="katalaluan"class="text-sm">Kata Laluan</label>
                              <input aria-label="Kata Laluan" id="katalaluan" name="katalaluan" type="password" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Kata Laluan">
                        </div>
                  </div>
                  <div class="mt-6">
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150" fill="currentColor" viewBox="0 0 20 20">
                                          <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                              </span>
                              Log Masuk
                        </button>
                  </div>
            </form>
      </div>
</div>
@endsection