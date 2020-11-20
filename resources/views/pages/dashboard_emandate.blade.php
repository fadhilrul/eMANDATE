@extends('pages.layout.app')
@section('content')


<style>
    @media (min-width: 1280px){
      .container {
      max-width: 100vw !important;
     }
    }

    /*DROPDOWN CSS*/
    .dropdown:hover .dropdown-menu {
    display: block;
    }

  
  </style>


<div class="container px-6 mx-auto grid">

    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

      <div class="bg-blue-800 p-2 shadow text-xl text-white">
          <h3 class="font-bold pl-2">E-Mandate Dashboard</h3>
      </div>

      {{ session()->get('authenticatedUser')['state_code'] }}
                 

      <!-- DROPDOWN PILIHAN NEGERI -->
   <!--   <div class="p-10">

        <div class="dropdown inline-block relative">
          <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150" id="options-menu" aria-haspopup="true" aria-expanded="true">
            <span class="mr-1">Pilihan Negeri</span>
           
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
          </button>
          <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
            <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">One</a></li>
            <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Two</a></li>
            <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Three is the magic number</a></li>
          </ul>
        </div>
      </div> -->
      <!-- END DROP DOWN PILIHAN NEGERI -->
      <!-- component -->
      <!-- card component -->
      <!-- component -->
   <!--   <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
        <img src="https://i.imgur.com/dYcYQ7E.png" class="w-full" />
        <div class="flex justify-center -mt-8">
            <img src="https://i.imgur.com/8Km9tLL.jpg" class="rounded-full border-solid border-white border-2 -mt-3">		
        </div>
      <div class="text-center px-3 pb-6 pt-2">
        <h3 class="text-black text-sm bold font-sans">Olivia Dunham</h3>
        <p class="mt-2 font-sans font-light text-grey-dark">Hello, i'm from another the other side!</p>
      </div>
        <div class="flex justify-center pb-3 text-grey-dark">
          <div class="text-center mr-3 border-r pr-3">
            <h2>34</h2>
            <span>Photos</span>
          </div>
          <div class="text-center">
            <h2>42</h2>
            <span>Friends</span>
          </div>
        </div>
      </div> -->
      <!-- end card component -->
      <!-- component -->
    <!--  <div class="flex flex-wrap -mx-4">
        <div class="w-full mb-6 lg:mb-0 lg:w-1/2 px-4 flex flex-col">
          <div class="flex-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">
            <div class="border-b">
              <div class="flex justify-between px-6 -mb-px">
                <h3 class="text-blue-dark py-4 font-normal text-lg">Your Portfolio</h3>
                <div class="flex">
                  <button type="button" class="appearance-none py-4 text-blue-dark border-b border-blue-dark mr-3">
                                          List
                                      </button>
                  <button type="button" class="appearance-none py-4 text-grey-dark border-b border-transparent hover:border-grey-dark">
                                          Chart
                                      </button>
                </div>
              </div>
            </div>
            <div class="flex-grow flex px-6 py-6 text-grey-darker items-center border-b -mx-4">
              <div class="w-2/5 xl:w-1/4 px-4 flex items-center">
                <div class="rounded-full bg-orange inline-flex mr-3">
                  <svg class="fill-current text-white h-8 w-8 block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill-rule="evenodd"><path d="M21.78 15.37c.51-.61.83-1.4.83-2.26 0-2.74-1.6-4.38-4.24-4.38V5.45c0-.12-.1-.22-.22-.22h-1.27c-.11 0-.2.1-.2.21v3.3h-1.7V5.44c0-.12-.1-.22-.22-.22H13.5c-.12 0-.2.1-.21.21v3.3H9.67c-.12 0-.21.09-.21.21v1.31c0 .12.1.22.21.22h.21c.94 0 1.7.79 1.7 1.75v7c0 .92-.68 1.67-1.55 1.75a.21.21 0 0 0-.18.16l-.33 1.32c-.01.06 0 .13.04.19.04.05.1.08.17.08h3.55v3.3c0 .1.1.2.2.2h1.28c.12 0 .21-.1.21-.22v-3.28h1.7v3.3c0 .1.1.2.21.2h1.27c.12 0 .22-.1.22-.22v-3.28h.85c2.65 0 4.24-1.64 4.24-4.37 0-1.28-.68-2.39-1.68-3zm-6.8-4.01h2.54c.94 0 1.7.78 1.7 1.75 0 .96-.76 1.75-1.7 1.75h-2.55v-3.5zm3.39 8.75h-3.4v-3.5h3.4c.93 0 1.7.78 1.7 1.75 0 .96-.77 1.75-1.7 1.75z"></path></g></svg>
                </div>
                <span class="text-lg">Bitcoin</span>
              </div>
              <div class="hidden md:flex lg:hidden xl:flex w-1/4 px-4 items-center">
                <div class="bg-orange h-2 rounded-full flex-grow mr-2"></div>
                100%
              </div>
              <div class="flex w-3/5 md:w/12">
                <div class="w-1/2 px-4">
                  <div class="text-right">
                    0.0010 BTC
                  </div>
                </div>
                <div class="w-1/2 px-4">
                  <div class="text-right text-grey">
                    CA$21.28
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-grow flex px-6 py-6 text-grey-darker items-center border-b -mx-4">
              <div class="w-2/5 xl:w-1/4 px-4 flex items-center">
                <div class="rounded-full bg-grey inline-flex mr-3">
                  <svg class="fill-current text-white h-8 w-8 block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 38"><g fill-rule="evenodd"><path d="M12.29 28.04l1.29-5.52-1.58.67.63-2.85 1.64-.68L16.52 10h5.23l-1.52 7.14 2.09-.74-.58 2.7-2.05.8-.9 4.34h8.1l-.99 3.8z"></path></g></svg>
                </div>
                <span class="text-lg">Litecoin</span>
              </div>
              <div class="hidden md:flex lg:hidden xl:flex w-1/4 px-4 items-center">
                <div class="bg-grey h-2 w-2 rounded-full mr-2"></div>
                0%
              </div>
              <div class="flex w-3/5 md:w/12">
                <div class="w-1/2 px-4">
                  <div class="text-right">
                    0.0000 LTC
                  </div>
                </div>
                <div class="w-1/2 px-4">
                  <div class="text-right text-grey">
                    CA$0.00
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-grow flex px-6 py-6 text-grey-darker items-center border-b -mx-4">
              <div class="w-2/5 xl:w-1/4 px-4 flex items-center">
                <div class="rounded-full bg-indigo inline-flex mr-3">
                  <svg class="fill-current text-white h-8 w-8 block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill-rule="evenodd"><path d="M10.13 17.76c-.1-.15-.06-.2.09-.12l5.49 3.09c.15.08.4.08.56 0l5.58-3.08c.16-.08.2-.03.1.11L16.2 25.9c-.1.15-.28.15-.38 0l-5.7-8.13zm.04-2.03a.3.3 0 0 1-.13-.42l5.74-9.2c.1-.15.25-.15.34 0l5.77 9.19c.1.14.05.33-.12.41l-5.5 2.78a.73.73 0 0 1-.6 0l-5.5-2.76z"></path></g></svg>
                </div>
                <span class="text-lg">Ethereum</span>
              </div>
              <div class="hidden md:flex lg:hidden xl:flex w-1/4 px-4 items-center">
                <div class="bg-indigo h-2 w-2 rounded-full mr-2"></div>
                0%
              </div>
              <div class="flex w-3/5 md:w/12">
                <div class="w-1/2 px-4">
                  <div class="text-right">
                    0.0000 ETH
                  </div>
                </div>
                <div class="w-1/2 px-4">
                  <div class="text-right text-grey">
                    CA$0.00
                  </div>
                </div>
              </div>
            </div>
            <div class="px-6 py-4">
              <div class="text-center text-grey">
                Total Balance &asymp; CA$21.28
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- end component -->

      <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="bg-blue-100 border-b-4 border-blue-600 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                        <!--  <div class="rounded-full p-5 bg-blue-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div> -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Daftar</h5>
                          <h3 class="font-bold text-3xl"> {{($daftarCount->count())}} 
                          <span class="text-blue-500"><i class="fas fa-caret-up"></i></span></h3>
                      </div>
                  </div>
              </div>
              <!--/Metric Card-->
          </div>
        

          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="bg-green-100 border-b-4 border-green-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                          <!--<div class="rounded-full p-5 bg-green-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>-->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Lulus</h5>
                          <h3 class="font-bold text-3xl">{{($lulusCount->count())}} 
                          <span class="text-green-500"><i class="fas fa-exchange-alt"></i></span></h3>
                      </div>
                  </div>
              </div>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="bg-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                         <!-- <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div> -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          
                          <h5 class="font-bold uppercase text-gray-600">Bilangan Permohonan Dalam Proses</h5>
                          <h3 class="font-bold text-3xl"> {{($gagalCount->count())}} 
                          <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                      </div>
                  </div>
              </div>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <a href="{{route('searchenrp.index')}}">
              <!--Metric Card-->
              <div class="bg-red-100 border-b-4 border-red-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                         <!-- <div class="rounded-full p-5 bg-red-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>  -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600"> Senarai </h5>
                          <h3 class="font-bold text-3xl"> ENRP</h3>
                      </div>
                  </div>
              </div>
             </a>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
            <a href="{{route('searchcft.index')}}">
              <div class="bg-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                        <!--  <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>  -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600"> Senarai </h5>
                          <h3 class="font-bold text-3xl"> CFT </h3>
                      </div>
                  </div>
              </div>
            </a>
              <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
            <a href="{{route('search.index')}}">
              <div class="bg-orange-100 border-b-4 border-orange-500 rounded-lg shadow-lg p-5">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                        <!--  <div class="rounded-full p-5 bg-orange-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>  -->
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="font-bold uppercase text-gray-600">INFO</h5>
                          <h3 class="font-bold text-3xl"> e-Mandate <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                      </div>
                  </div>
              </div>
            </a>
              <!--/Metric Card-->
          </div>
      </div>
  </div>
</div>


<!-- testing propcess -->

{{-- <div class="flex flex-wrap mt-10 justify-center">
    <h2><b> Running Process For UAT <b></h2>
</div> --}}
<!--<div class="flex flex-wrap mt-10 justify-center">
    {{-- <div class="m-3">
      <a href="http://localhost/enrp/newenrp/enrp.php"
         class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-600 hover:border-blue-600 hover:bg-blue-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
        <span class="mx-auto">INSERT ENRP</span>
      </a>
    </div> --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/cft2.php" title="Quicktoolz On Facebook"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-orange-500 hover:border-orange-500 hover:bg-orange-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">GENERATE CFT</span> 
        </a>
      </div> --}}
      

    {{-- 1res --}}
    {{-- <div class="m-3">
      <a href="http://localhost/enrp/newenrp/1res.php" title="Quicktoolz On Pinterest"
         class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
        <span class="mx-auto">1 RES</span>
      </a>
    </div> --}}
    {{-- 2res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/2res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">2 RES</span>
        </a>
      </div> --}}
      {{-- 3res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/3res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">3 RES</span>
        </a>
      </div> --}}
      {{-- 4res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/4res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">4 RES</span>
        </a>
      </div> --}}
       {{-- 5res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/5res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">5 RES</span>
        </a>
      </div> --}}
       {{-- 6res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/6res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">6 RES</span>
        </a>
      </div> --}}
      {{-- 7res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/7res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">7 RES</span>
        </a>
      </div> --}}
      {{-- 8res --}}
    {{-- <div class="m-3">
        <a href="http://localhost/enrp/newenrp/8res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">8 RES</span>
        </a>
    </div> --}}
    {{-- <div class="m-9">
        <a href="http://localhost/enrp/newenrp/9res.php" title="Quicktoolz On Pinterest"
           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
          <span class="mx-auto">9 RES</span>
        </a>
    </div> --}}
</div>  -->

<!-- testing propcess -->
@endsection