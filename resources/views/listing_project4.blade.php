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
            <div class="text-center">Project Introduction</div>
                <form class="space-y-2" action="/listingrequestproj5" method="POST">
                @csrf
                <div class="flex gap-4 mt-4">
                <textarea name="trackRec" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*What is track record of the team in this industry?</textarea>
                </div>
                @error ('trackRec')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea name="outstandingFeat" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*What’s make the project outstanding?</textarea>
                </div>
                @error ('outstadningFeat')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea name="target" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*What is its target and vision?</textarea>
                </div>
                @error ('target')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea name="technicalFW" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*Please give the technical framework of this project</textarea>
                </div>
                @error ('technicalFW')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea name="innovativeTech" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*What is innovate technologically</textarea>
                </div>
                @error ('innovativeTech')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea name="difficulty" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*Please point the most difficult parts in this technology?</textarea>
                </div>
                @error ('difficulty')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea name="proposedSol" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*What is the solution proposed by this project?</textarea>
                </div>
                @error ('proposedSol')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea name="opensource" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*Is it open sourced? If it is, when</textarea>
                </div>
                @error ('opensource')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea name="competitors" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*Who are competitors in your opinion?</textarea>
                </div>
                @error ('competitors')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea name="superiorFeat" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*What make your project superior to your peer competitors in the same niche?</textarea>
                </div>
                @error ('superiorFeat')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4">
                <textarea name="ecosystem" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*List what have been built in your ecosystem</textarea>
                </div>
                @error ('ecosystem')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4"">
                <textarea name="projectUse" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*Please give the use cases of this project?</textarea>
                </div>
                @error ('projectUse')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <div class="flex gap-4"">
                <textarea name="ecoModel" id="text" cols="70" rows="2" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400">*How is the token’s economic model connected to its ecological model?</textarea>
                </div>
                @error ('ecoModel')
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