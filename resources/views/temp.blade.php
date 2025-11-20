<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refactored Tabbed Form</title>
    <!-- Load Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Load Alpine.js for interactive tabs -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Custom scrollbar for visual appeal */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f0f0f0; }
        ::-webkit-scrollbar-thumb { background: #888; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #555; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen p-8 antialiased font-sans">

    



 <!--Section container-->
        <section class="w-full lg:w-3/5">
                
            <!--Card-->
            <div id='section1' class="p-8 mt-2 lg:mt-0 leading-normal rounded shadow bg-white">
            <!--Start Form-->

                <div class="text-center">Company Profile</div>

                @if(session('success'))
                <div class="bg-white-300 flex p-4 m-10 gap-3 items-center justify-center rounded-2xl border border-blue-600 ">
                    <svg class="h-6 w-6 fill-current text-blue-600" viewBox="0 0 448 512">
                        <path
                            d="M256 32V49.88C328.5 61.39 384 124.2 384 200V233.4C384 278.8 399.5 322.9 427.8 358.4L442.7 377C448.5 384.2 449.6 394.1 445.6 402.4C441.6 410.7 433.2 416 424 416H24C14.77 416 6.365 410.7 2.369 402.4C-1.628 394.1-.504 384.2 5.26 377L20.17 358.4C48.54 322.9 64 278.8 64 233.4V200C64 124.2 119.5 61.39 192 49.88V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32V32zM216 96C158.6 96 112 142.6 112 200V233.4C112 281.3 98.12 328 72.31 368H375.7C349.9 328 336 281.3 336 233.4V200C336 142.6 289.4 96 232 96H216zM288 448C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288z" />
                    </svg>
                    <div class="ml-3 font-sans text-xs leading-6 text-blue-600">
                        {{session('success')}}
                    </div>
                </div>
                @endif

                <form class="space-y-2" action="/newlisting_p" method="POST">
                @csrf
                    <div class="flex gap-4">
                        <input type="Name" name="companyName" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Company name" />
                    </div>
                    @error ('companyName')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="flex gap-4">
                        <input type="Name" name="companyAdd" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Company registered address" />
                    </div>
                    @error ('companyAdd')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="flex gap-4">
                        <input type="Name" name="repName" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Company Representative Name" />
                    </div>
                    @error ('repName')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="flex gap-4">
                        <input type="Name" name="repEmail" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Submitter email" />
                    </div>
                    @error ('repEmail')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="flex gap-4">
                        <input type="Name" name="teamEmail" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Project Team email" />
                    </div>
                    @error ('teamEmail')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <span class="flex text-red-500">
                    Please note, corporate documentation and an identity document of the representative will be required if it passes at the preliminary review.
                    </span><br>                
                    <div class="flex gap-20 mt-4 text-right">
                        <button class="cursor-pointer rounded-lg bg-blue-700 px-12 py-3 text-sm font-semibold text-white">Next</button>
                    </div>
                
                </form>
                <!--End Form--> 
            </div>
            <!--/Card-->

        </section>
        <!--/Section container-->

         <!--Back link -->
        <div class="w-full lg:w-4/5 lg:ml-auto text-base md:text-sm text-gray-600 px-4 py-24 mb-12">
          <span class="text-base text-yellow-600 font-bold">&lt;</span> <a href="/listingrequest" class="text-base md:text-sm text-yellow-600 font-bold no-underline hover:underline">Back link</a>
         </div>

                    <!--Description Field-->
                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Detailed Description</label>
                        <textarea id="description" name="description" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Describe the product's features and benefits..."></textarea>
                    </div>
                    
                    <!-- Price and SKU Fields (2 Column Field) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Unit Price ($)</label>
                            <input type="number" step="0.01" id="price" name="price" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="99.99">
                        </div>
                        <div class="mb-4">
                            <label for="sku" class="block text-sm font-medium text-gray-700 mb-1">SKU</label>
                            <input type="text" id="sku" name="sku" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="PROD-U-001">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="stock_level" class="block text-sm font-medium text-gray-700 mb-1">Stock Level</label>
                        <input type="number" id="stock_level" name="stock_level" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="100">
                    </div>

            







</body>
</html>