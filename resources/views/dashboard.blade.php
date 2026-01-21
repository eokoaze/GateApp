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
        <div class="mt-10 mb-4 text-center text-5xl font-bold">Hello Admin! 😊 </div>
        <div class="w-full max-w-6xl border-0 border-blue-400 rounded-lg">
            <div class="border-b border-gray-200 mb-6">
                <nav class="-mb-px flex flex-wrap gap-4 justify-center" aria-label="Application Tabs">
                    <button data-tab="applications-individual" class="application-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-blue-600 text-blue-600">
                        Individual Applications
                    </button>
                    <button data-tab="applications-project" class="application-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-blue-600 hover:border-blue-300">
                        Project Applications
                    </button>
                    <button data-tab="applications-social" class="application-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-blue-600 hover:border-blue-300">
                        Manage Verification
                    </button>
                    <button data-tab="applications-activity" class="application-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-blue-600 hover:border-blue-300">
                        User Activities
                    </button>
                </nav>
            </div>

            <div id="applications-individual" class="application-panel w-full max-w-6xl border-0 border-blue-400 rounded-lg">
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
        </div>

        <div id="applications-project" class="application-panel hidden w-full max-w-6xl border-0 border-blue-400 rounded-lg">
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

        <div id="applications-social" class="application-panel hidden w-full max-w-6xl border-0 border-blue-400 rounded-lg">
            <div class="mt-8 mb-4 text-center text-xl font-bold">Social Verification Handles</div>

            <div id="social-success" class="hidden bg-white-300 flex p-4 m-6 gap-3 items-center justify-center rounded-2xl border border-blue-600">
                <svg class="h-6 w-6 fill-current text-blue-600" viewBox="0 0 448 512">
                    <path
                        d="M256 32V49.88C328.5 61.39 384 124.2 384 200V233.4C384 278.8 399.5 322.9 427.8 358.4L442.7 377C448.5 384.2 449.6 394.1 445.6 402.4C441.6 410.7 433.2 416 424 416H24C14.77 416 6.365 410.7 2.369 402.4C-1.628 394.1-.504 384.2 5.26 377L20.17 358.4C48.54 322.9 64 278.8 64 233.4V200C64 124.2 119.5 61.39 192 49.88V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32V32zM216 96C158.6 96 112 142.6 112 200V233.4C112 281.3 98.12 328 72.31 368H375.7C349.9 328 336 281.3 336 233.4V200C336 142.6 289.4 96 232 96H216zM288 448C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288z" />
                </svg>
                <div id="social-success-text" class="ml-3 font-sans text-xs leading-6 text-blue-600"></div>
            </div>
            <div id="social-error" class="hidden bg-white-300 flex p-4 m-6 gap-3 items-center justify-center rounded-2xl border border-red-600">
                <svg class="h-6 w-6 fill-current text-red-600" viewBox="0 0 512 512">
                    <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 405.3c-13.3 0-24-10.7-24-24c0-13.3 10.7-24 24-24s24 10.7 24 24c0 13.3-10.7 24-24 24zM280 128l-6.6 160c-.3 7.9-6.8 14-14.7 14h-5.4c-7.9 0-14.4-6.1-14.7-14L232 128c-.3-8.2 6.3-15 14.7-15h18.6c8.4 0 15 6.8 14.7 15z"/>
                </svg>
                <div id="social-error-text" class="ml-3 font-sans text-xs leading-6 text-red-600"></div>
            </div>
            @if(session('social_success'))
            <div class="bg-white-300 flex p-4 m-6 gap-3 items-center justify-center rounded-2xl border border-blue-600">
                <svg class="h-6 w-6 fill-current text-blue-600" viewBox="0 0 448 512">
                    <path
                        d="M256 32V49.88C328.5 61.39 384 124.2 384 200V233.4C384 278.8 399.5 322.9 427.8 358.4L442.7 377C448.5 384.2 449.6 394.1 445.6 402.4C441.6 410.7 433.2 416 424 416H24C14.77 416 6.365 410.7 2.369 402.4C-1.628 394.1-.504 384.2 5.26 377L20.17 358.4C48.54 322.9 64 278.8 64 233.4V200C64 124.2 119.5 61.39 192 49.88V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32V32zM216 96C158.6 96 112 142.6 112 200V233.4C112 281.3 98.12 328 72.31 368H375.7C349.9 328 336 281.3 336 233.4V200C336 142.6 289.4 96 232 96H216zM288 448C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288z" />
                </svg>
                <div class="ml-3 font-sans text-xs leading-6 text-blue-600">
                    {{ session('social_success') }}
                </div>
            </div>
            @endif

            <form id="social-handle-form" class="bg-white rounded-lg p-6 shadow mb-8" method="POST" action="{{ route('social-handles.store') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Platform</label>
                        <input type="text" name="platform" class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="e.g., X, Telegram, Discord">
                        @error('platform')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Handle</label>
                        <input type="text" name="handle" class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="e.g., @gate_io">
                        @error('handle')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">URL (optional)</label>
                        <input type="url" name="url" class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="https://">
                        @error('url')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-4 text-right">
                    <button type="submit" class="cursor-pointer rounded-lg bg-blue-700 px-6 py-2 text-sm font-semibold text-white">Add Handle</button>
                </div>
            </form>

            <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            platform
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            handle
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            url
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            added
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            actions
                        </th>
                    </tr>
                </thead>
                <tbody id="social-handles-body" class="bg-white divide-y divide-gray-200">
                    @foreach($socialHandles as $socialHandle)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $socialHandle->platform }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $socialHandle->handle }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $socialHandle->url }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ Carbon\Carbon::parse($socialHandle->created_at)->diffForHumans() }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <form method="POST" action="{{ route('social-handles.delete', $socialHandle->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $socialHandles->onEachSide(2)->links() }}

        </div>

        <div id="applications-activity" class="application-panel hidden w-full max-w-6xl border-0 border-blue-400 rounded-lg">
            <div class="mt-8 mb-4 text-center text-xl font-bold">User Activities</div>

            <div class="border-b border-gray-200 mb-6">
                <nav class="-mb-px flex flex-wrap gap-4 justify-center" aria-label="Activity Tabs">
                    <button data-tab="activity-log" class="activity-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-blue-600 text-blue-600">
                        Activity Log
                    </button>
                    <button data-tab="activity-verifications" class="activity-tab whitespace-nowrap py-2 px-3 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-blue-600 hover:border-blue-300">
                        Verification Attempts
                    </button>
                </nav>
            </div>

            <div id="activity-log" class="activity-panel">
            <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            type
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            form
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            path
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ip
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            time
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($activityLogs as $activity)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $activity->activity_type }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $activity->form_type }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $activity->path }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $activity->ip_address }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="px-6 py-6 text-center text-sm text-gray-500" colspan="5">
                            No activity logged yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $activityLogs->onEachSide(2)->links() }}
            </div>

            <div id="activity-verifications" class="activity-panel hidden">
            <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            platform
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            handle
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ip
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            userAgent
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            time
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($verificationAttempts as $attempt)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $attempt->platform }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $attempt->handle }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $attempt->ip_address }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate">
                            {{ $attempt->user_agent }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ Carbon\Carbon::parse($attempt->created_at)->diffForHumans() }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="px-6 py-6 text-center text-sm text-gray-500" colspan="5">
                            No verification attempts logged yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $verificationAttempts->onEachSide(2)->links() }}
            </div>
        </div>
    </div>

    <script>
        const applicationTabs = document.querySelectorAll('.application-tab');
        const applicationPanels = document.querySelectorAll('.application-panel');
        applicationTabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-tab');
                applicationTabs.forEach((btn) => {
                    btn.classList.remove('border-blue-600', 'text-blue-600');
                    btn.classList.add('border-transparent', 'text-gray-500');
                });
                tab.classList.add('border-blue-600', 'text-blue-600');
                tab.classList.remove('border-transparent', 'text-gray-500');
                applicationPanels.forEach((panel) => {
                    panel.classList.toggle('hidden', panel.id !== target);
                });
            });
        });

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

        const activityTabs = document.querySelectorAll('.activity-tab');
        const activityPanels = document.querySelectorAll('.activity-panel');
        activityTabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-tab');
                activityTabs.forEach((btn) => {
                    btn.classList.remove('border-blue-600', 'text-blue-600');
                    btn.classList.add('border-transparent', 'text-gray-500');
                });
                tab.classList.add('border-blue-600', 'text-blue-600');
                tab.classList.remove('border-transparent', 'text-gray-500');
                activityPanels.forEach((panel) => {
                    panel.classList.toggle('hidden', panel.id !== target);
                });
            });
        });

        const socialForm = document.getElementById('social-handle-form');
        const socialBody = document.getElementById('social-handles-body');
        const socialSuccess = document.getElementById('social-success');
        const socialSuccessText = document.getElementById('social-success-text');
        const socialError = document.getElementById('social-error');
        const socialErrorText = document.getElementById('social-error-text');
        if (socialForm) {
            socialForm.addEventListener('submit', async (event) => {
                event.preventDefault();
                const formData = new FormData(socialForm);
                const token = socialForm.querySelector('input[name=\"_token\"]')?.value;
                socialSuccess.classList.add('hidden');
                socialError.classList.add('hidden');

                let response;
                try {
                    response = await fetch(socialForm.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': token || '',
                            'Accept': 'application/json'
                        },
                        body: formData
                    });
                } catch (error) {
                    socialErrorText.textContent = 'Network error. Please try again.';
                    socialError.classList.remove('hidden');
                    return;
                }

                if (!response.ok) {
                    let errorMessage = 'Unable to add social handle.';
                    try {
                        const payload = await response.json();
                        if (payload?.message) {
                            errorMessage = payload.message;
                        }
                    } catch (error) {
                        // Ignore JSON parse errors.
                    }
                    socialErrorText.textContent = errorMessage;
                    socialError.classList.remove('hidden');
                    return;
                }

                let data = null;
                try {
                    data = await response.json();
                } catch (error) {
                    data = null;
                }
                socialSuccessText.textContent = 'Social handle added';
                socialSuccess.classList.remove('hidden');
                socialForm.reset();

                if (socialBody && data?.id) {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td class=\"px-6 py-4 whitespace-nowrap\">${data.platform}</td>
                        <td class=\"px-6 py-4 whitespace-nowrap\">${data.handle}</td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">${data.url || ''}</td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">just now</td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            <form method=\"POST\" action=\"/dashboard/social-handles/${data.id}\">
                                <input type=\"hidden\" name=\"_token\" value=\"${token || ''}\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <button class=\"text-red-600 hover:text-red-800\">Delete</button>
                            </form>
                        </td>
                    `;
                    socialBody.prepend(row);
                }
            });
        }
    </script>

</body>
</html>
