<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('admin.components.sidebar')
    <div class="sm:ml-80 p-4">
        <div class="p-4 m-4 rounded-lg dark:border-gray-700">
            <nav class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Dashboard
                    </a>
                </li>
                </ol>
            </nav>

            <div class="grid grid-cols-5 items-center justify-center">
                  <div class="col-span-4 p-8 flex items-center h-12 rounded bg-e73002 dark:bg-gray-800">
                     <h1 class=" text-base font-normal leading-none tracking-tight text-white  dark:text-white">Selamat datang, <br/> <span class="text-xl font-extrabold text-white dark:text-blue-500">{{ Auth::user()->name }}</span></h1>
                  </div>
                  <div class="flex items-center justify-center rounded h-12 dark:bg-gray-800 gap-4">

                     <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button">
                        <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                        <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
                        </svg>
                        
                        <div class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-4 dark:border-gray-900"></div>
                     </button>
                        
                  </div>
            </div>


            <div class="grid my-2 text-right">
               <p class="text-base text-gray-400 dark:text-gray-500">
                  Overview
               </p>
            </div>
            <div class="grid grid-cols-4 p-4 gap-4 items-center justify-center mb-4 rounded bg-slate-100 shadow-md dark:bg-gray-800">
               <div class="flex items-center p-4 rounded bg-fd7d09 h-20 dark:bg-gray-800">
                  <h1 class=" text-lg font-medium leading-none tracking-tight text-white  dark:text-white">Jumlah Produk <br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">{{ $totalProducts }}</span></h1>
               </div>
               <div class="flex items-center p-4 rounded bg-fd1d02 h-20 dark:bg-gray-800">
                  <h1 class=" text-lg font-medium leading-none tracking-tight text-white  dark:text-white">Jumlah User <br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">{{ $totalUsers }}</span></h1>
               </div>
               <div class="flex items-center p-4 rounded bg-fd7d09 h-20 dark:bg-gray-800">
                  <h1 class=" text-lg font-medium leading-none tracking-tight text-white  dark:text-white">Jumlah Produk Aktif <br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">{{ $activeProducts }}</span></h1>
               </div>
               <div class="flex items-center p-4 rounded bg-fd1d02 h-20 dark:bg-gray-800">
                  <h1 class=" text-lg font-medium leading-none tracking-tight text-white  dark:text-white">Jumlah User Aktif <br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">{{ $activeUsers }}</span></h1>
               </div>
            </div>
            
            <div class="p-4 rounded bg-slate-100 drop-shadow-md dark:bg-gray-800">
                <div class="p-4 bg-white rounded drop-shadow-md dark:bg-gray-800">
                    <p class="text-sm font-bold text-right text-black dark:text-gray-500">
                        Recent Products
                    </p>
                    <div class="grid grid-cols-5 gap-4">
                        @foreach($recentProducts as $product)
                        <div class="col-span-1">
                            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="">
                                    <img class="p-2 rounded-t-lg object-cover h-40 w-full" src="{{ $product->image }}" alt="{{ $product->name }}" />
                                </a>
                                <div class="px-2 pb-3">
                                    <a href="#">
                                        <h5 class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white truncate">{{ $product->name }}</h5>
                                    </a>
                                    <div class="flex items-center mt-1">
                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{ $product->status }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <p class="text-xs font-medium text-right text-gray-500 dark:text-gray-400">
                        <a href="/products" class="hover:underline">See All</a>
                    </p>
                </div>
            </div>
            

            
         </div>

    </div>

</body>
</html>