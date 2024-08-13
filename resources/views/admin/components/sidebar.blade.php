<button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar"
type="button"
class="inline-flex items-center p-2 mt-2 text-sm text-gray-500 rounded-lg ms-3 sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
<span class="sr-only">Open sidebar</span>
<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd"
        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
    </path>
</svg>
</button>

<aside id="separator-sidebar"
class="fixed top-0 left-0 z-40 h-screen transition-transform -translate-x-full bg-white shadow-lg w-80 sm:translate-x-0"
aria-label="Sidebar">
<div class="h-full px-8 py-4 overflow-y-auto shadow-md dark:bg-gray-800">
    <ul class="mb-10 space-y-2 font-medium">
        <div class="flex items-center justify-center p-2 ">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ URL('images/kelontong.png') }}" class="object-cover h-12 mt-4 w-72 me-3" alt="Kelontong Logo" />
            </a>
        </div>
    </ul>
    <ul class="space-y-2 font-medium">
        <li>
            <a href="{{ route('admin.dashboard.index') }}"
                class="{{ Route::is('admin.dashboard.index') ? 'bg-e73002' : '' }} flex items-center p-3 m-4 rounded-lg hover:bg-e73002 group">

                <svg class="{{ Route::is('admin.dashboard.index') ? 'text-white' : '' }} flex-shrink-0 w-5 h-5 text-abu-abu transition duration-75 dark:text-gray-400 group-hover:text-white" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z" clip-rule="evenodd"/>
                </svg>
                <span
                    class="{{ Route::is('admin.dashboard.index') ? 'text-white' : '' }} ms-3 font-poppins font-semibold text-abu-abu group-hover:text-white text-lg">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.products.index') }}"
                class="{{ Route::is('admin.products.index') ? 'bg-e73002' : '' }} flex items-center p-3 m-4 rounded-lg hover:bg-e73002 group">
                <svg class="{{ Route::is('admin.products.index') ? 'text-white' : '' }} flex-shrink-0 w-5 h-5 text-abu-abu transition duration-75 dark:text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                </svg>
                <span
                    class="{{ Route::is('admin.products.index') ? 'text-white' : '' }} ms-3 font-poppins font-semibold text-abu-abu group-hover:text-white text-lg">Produk</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.customer.index') }}"
                class="{{ Route::is('admin.customer.index') ? 'bg-e73002' : '' }} flex items-center p-3 m-4 rounded-lg hover:bg-e73002 group">
                <svg class="{{ Route::is('admin.customer.index') ? 'text-white' : '' }} flex-shrink-0 w-5 h-5 text-abu-abu transition duration-75 dark:text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                  </svg>
                  
                <span
                    class="{{ Route::is('admin.customer.index') ? 'text-white' : '' }} ms-3 font-poppins font-semibold text-abu-abu group-hover:text-white text-lg">Kustomer</span>
            </a>
        </li>

    </ul>

    <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
        <li>
            @if (Auth::check())
                <a href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="flex items-center p-3 m-4 rounded-lg dark:text-white hover:bg-e73002 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 text-abu-abu dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                    </svg>
                    <span class="text-lg font-semibold ms-3 font-poppins text-abu-abu group-hover:text-white">Sign Out</span>
                </a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>
            @endif
        </li>
    </ul>
    
</div>
</aside>