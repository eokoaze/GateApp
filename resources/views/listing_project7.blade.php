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
                <form class="space-y-2" action="/listingrequestproj8" method="POST">
                @csrf
                <div class="text-center"> Business marketing plan </div>

                <div class="flex gap-4">
                <textarea required name="communityInfo" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400" placeholder="*Please give the community information"></textarea>
                </div>
                @error ('CommunityInfo')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea required name="marketingCh" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400" placeholder="*What are your marketing channels currently?"></textarea>
                </div>
                @error ('marketingCh')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea required name="marketingCamp" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400" placeholder="*Please list the marketing campaigns before and after exchange listing"></textarea>
                </div>
                @error ('marketingCamp')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea required name="budget" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400" placeholder="*Please give the budget for campaigns before and after exchange listing"></textarea>
                </div>
                @error ('budget')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea required name="marketingPlans" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400" placeholder="*Please describe the detailed marketing plan"></textarea>
                </div>
                @error ('marketingPlans')
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