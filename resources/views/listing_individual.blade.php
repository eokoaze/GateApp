<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="gate.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listing || gate.io</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>

    </style>
</head>
<body class="min-h-screen bg-zinc-200">

    <!--navbar-->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="gate_logo_wt.png" class="h-8" alt="Gate.io" />
            </a>
            
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <!-- <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                    <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>
    <!--end navbar-->

    <div class="bg-animate flex justify-center p-4">
        <div class="mx-14 mt-10 border-blue-400 rounded-lg">
            <div class="mt-10 text-center font-bold">New Coin Listing Request</div>

                <form class="space-y-1" action="/newlisting_i" method="POST">
                @csrf
                    <div class="flex gap-4">
                    <input type="email" name="email" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Email" />
                    </div>
                    @error ('email')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="flex gap-4">
                        <input type="Name" name="tokenName" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Please give the token’s English full name" />
                    </div>
                    @error ('tokenName')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="flex gap-4">
                        <input type="coinSymbol" name="coinSymbol" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*What is the coin symbol" />
                    </div>
                    @error ('coinSymbol')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="flex gap-4">
                        <input type="Name" name="projectWebsite" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Project website" />
                    </div>
                    @error ('projectWebsite')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="flex gap-4">
                        <input type="Name" name="whitepaperLink" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Whitepaper link" />
                    </div>
                    @error ('whitepaperLink')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="flex gap-4">
                        <textarea name="recommendation" id="text" cols="70" rows="2" class="mb-5 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*Why recommend it</textarea>
                    </div>
                    @error ('recommendation')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <span class="flex text-red-500">
                        Please note, if your recommended project is listed, we will notify you via email.<br> 
                        Otherwise the recommendation is invalid. Thank you for your support.
                    </span>
                    <div class="text-center mt-2">
                        <button class="cursor-pointer rounded-lg bg-blue-700 px-10 py-5 text-sm font-semibold text-white">Submit Request</button>
                    </div>
                </form>
        </div>
    </div>







</body>
</html>