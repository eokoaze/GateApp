<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="gate.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listing || gate.io</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-white">
    
    <!--navbar-->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="gate_logo_wt.png" class="h-8" alt="Gate.io" />
            </a>
            
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
               
            </div>
        </div>
    </nav>
    <!--end navbar-->

        <!--Container-->
        <div class="mt-10 text-center font-bold"> New Coin Listing Request </div>
        <div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-4 justify-center">

        <!--Section container-->
        <section class="w-full lg:w-3/5">
                
            <!--Card-->
            <div id='section1' class="p-8 mt-2 lg:mt-0 leading-normal rounded shadow bg-white">
            <!--Start Form-->
                <div class="text-center">Project Development </div>

                <form class="space-y-2" action="/listingrequestproj6" method="POST">
                @csrf

                <div class="flex gap-4">
                <textarea minlenght="50" name="networkCond" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*What is its network condition currently?</textarea>
                </div>
                @error ('networkCond')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <input type="url" required name="codeLibrary" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Please provide a link to its code library" />
                </div>
                @error ('codeLibrary')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4 mt-2">
                <textarea minlenght="50" name="funcModules" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*How is the development of the main functional modules going?</textarea>
                </div>
                @error ('funcModules')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <input type="text" required name="roadmap" class="mt-1 w-full rounded-md border border-slate-300 bg-white px-3 py-3 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="*Please give its Roadmap or a link to its roadmap" />
                </div>
                @error ('roadmap')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4 mt-2">
                <textarea minlenght="50" name="implementation" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*How is the project implementation going?</textarea>
                </div>
                @error ('implementation')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea minlenght="50" name="ecosystemProg" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*How is its project ecosystem going?</textarea>
                </div>
                @error ('ecosystemProg')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea minlenght="50" name="currentPhase" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*At which phase on the road-map the project currently is?</textarea>
                </div>
                @error ('currentPhase')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea minlenght="50" name="devVenue" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*At which venue the project will disclose its development?</textarea>
                </div>
                @error ('devVenue')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror

                <div class="flex gap-20 mt-4">
                    <button class="cursor-pointer rounded-lg bg-blue-700 px-12 py-3 text-sm font-semibold text-white">Next</button>
                </div>
            
            </form>
            <!--End Form--> 
            
            </div>
            <!--/Card-->

        </section>
        <!--/Section container-->

      </div>
      <!--/container-->

</body>
</html>