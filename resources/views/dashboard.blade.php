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

    <div class="bg-animate flex flex-col items-center p-5 gap-8">
        <div class="w-full max-w-6xl border-0 border-blue-400 rounded-lg">
            <div class="mt-8 mb-4 text-center text-xl font-bold">Individual Applications</div>

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

        <div class="w-full max-w-6xl border-0 border-blue-400 rounded-lg">
            <div class="mt-8 mb-4 text-center text-xl font-bold">Team/Project Applications</div>

                <div class="border-b border-gray-200 mb-6">
                    <nav class="-mb-px flex flex-wrap gap-4 justify-center" aria-label="Project Tabs">
                        <button data-tab="project-overview" class="project-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-blue-600 text-blue-600">
                            Overview
                        </button>
                        <button data-tab="project-token" class="project-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-blue-600 hover:border-blue-300">
                            Token & Economics
                        </button>
                        <button data-tab="project-team" class="project-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-blue-600 hover:border-blue-300">
                            Team & Business
                        </button>
                        <button data-tab="project-dev" class="project-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-blue-600 hover:border-blue-300">
                            Development
                        </button>
                        <button data-tab="project-fee" class="project-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-blue-600 hover:border-blue-300">
                            Fee & Refund
                        </button>
                    </nav>
                </div>

                <div id="project-overview" class="project-panel">
                <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                companyName
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                projectName
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                tokenName
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                coinSymbol
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                projectWebsite
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
                                {{ $applicationPs->projectName }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $applicationPs->tokenName }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $applicationPs->coinSymbol }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $applicationPs->projectWebsite }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $applicationPs->repEmail.'||'.$applicationPs->teamEmail }} 
                            </td>                            
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ Carbon\Carbon::parse($applicationPs->created_at)->diffForHumans() }} 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>

                <div id="project-token" class="project-panel hidden">
                <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                projectName
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                totalSupply
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                coinType
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                contractAdd
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                blockExpl
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($applicationP as $applicationPs)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $applicationPs->projectName }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $applicationPs->totalSupply }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $applicationPs->coinType }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $applicationPs->contractAdd }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $applicationPs->blockExpl }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>

                <div id="project-team" class="project-panel hidden">
                <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                projectName
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                teamIntro
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                coreMembers
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                communityInfo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                marketingPlans
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($applicationP as $applicationPs)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $applicationPs->projectName }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $applicationPs->teamIntro }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $applicationPs->coreMembers }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $applicationPs->communityInfo }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $applicationPs->marketingPlans }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>

                <div id="project-dev" class="project-panel hidden">
                <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                projectName
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                codeLibrary
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                roadmap
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                currentPhase
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                devVenue
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($applicationP as $applicationPs)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $applicationPs->projectName }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $applicationPs->codeLibrary }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $applicationPs->roadmap }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $applicationPs->currentPhase }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $applicationPs->devVenue }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>

                <div id="project-fee" class="project-panel hidden">
                <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                projectName
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                receiptPath
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                refAddress
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($applicationP as $applicationPs)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $applicationPs->projectName }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $applicationPs->receiptPath }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $applicationPs->refAddress }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>

                {{ $applicationP->onEachSide(4)->links() }}
        </div>  
    </div>

    <script>
        const tabs = document.querySelectorAll('.project-tab');
        const panels = document.querySelectorAll('.project-panel');
        tabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-tab');
                tabs.forEach((btn) => {
                    btn.classList.remove('border-blue-600', 'text-blue-600');
                    btn.classList.add('border-transparent', 'text-gray-500');
                });
                tab.classList.add('border-blue-600', 'text-blue-600');
                tab.classList.remove('border-transparent', 'text-gray-500');
                panels.forEach((panel) => {
                    panel.classList.toggle('hidden', panel.id !== target);
                });
            });
        });
    </script>

</body>
</html>
