<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="gate.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || gate.io</title>
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
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                    <a href="/smail" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Send Mail</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->

    <div class="bg-animate flex justify-center p-5">
        <div class="mx-10 mt-10 border-0 border-blue-400 rounded-lg">
            <div class="mt-8 mb-4 text-center text-xl ont-bold">Individual Applications</div>

                <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                tokenName
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                coinSymbol
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                appDate
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($applicationI as $applicationIs)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $applicationIs->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $applicationIs->tokenName }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $applicationIs->coinSymbol }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ Carbon\Carbon::parse($applicationIs->created_at)->diffForHumans() }} 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $applicationI->onEachSide(4)->links() }}
        </div>

        <div class="mx-10 mt-10 border-0 border-blue-400 rounded-lg">
            <div class="mt-8 mb-4 text-center text-xl ont-bold">Team/Project Applications</div>

                <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                companyName
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                repName
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                repEmail || teamEmail
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                appDate
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- @php($i = 1) -->
                        @foreach($applicationP as $applicationPs)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $applicationPs->companyName }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $applicationPs->repName }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $applicationPs->repName.'||'.$applicationPs->teamEmail }} 
                            </td>                            
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ Carbon\Carbon::parse($applicationPs->created_at)->diffForHumans() }} 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $applicationP->onEachSide(4)->links() }}
        </div>  
    </div>


</body>
</html>