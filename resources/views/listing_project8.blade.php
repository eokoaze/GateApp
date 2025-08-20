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
        <div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-2 justify-center">

        <!--Section container-->
        <section class="w-full lg:w-3/5">
                
            <!--Card-->
            <div id='section1' class="p-8 mt-2 lg:mt-0 leading-normal rounded shadow bg-white">
            <!--Start Form-->
                <form class="space-y-2" action="/newlisting_pl" method="POST">
                @csrf
                <div class="text-center"> Project Evaluation / Review Fee </div>

                <div class="flex gap-4">
                    <p class="text-justify">
                        An evaluation fee of 2,000 USDT for project review is required to be paid in advance. 
                        The fee will be used to cover the cost of the review process and is <b>refundable</b> if the project fails to advance from this stage. 
                        Projects that passes review move to the next phase of the pre-listing process. 
                        Please do not reapply (except for another project) if this project fails to advance from this stage.
                    </p>
                </div>
                    <p class="text-justify">
                        Please make the payment of 2,000 USDT to the following USDT address on <b>TRON (TRC-20) Network,</b> attach screenshot / receipt of payment below :<br>
                        <b>TCGkeLkwQk935HxMkVxvf2d1gS7VJLU6sL</b>
                    </p>
                <div class="flex gap-4">

                </div>
                <div class="flex gap-4">
                    <span>Upload screenshot / receipt of payment</span>
                    <input type="file" required name="receipt" id="receipt" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400" placeholder="*Please attach the payment reciept"/>
                </div>
                @error ('receipt')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror

                <div class="flex gap-4">
                    <input type="text" required name="ref_address" id="ref_address" class="mb-2 h-30 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-400" placeholder="*Please provide your USDT address should there be a case of refund (TRC-20)"/>
                </div>
                @error ('ref_address')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                
                

                <div class="flex gap-20 mt-4">
                    <button class="cursor-pointer rounded-lg bg-blue-700 px-12 py-3 text-sm font-semibold text-white">Submit Request</button>
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