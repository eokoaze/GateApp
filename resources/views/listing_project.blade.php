<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="gate.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listing || gate.io</title>
    <!-- Load Tailwind CSS and JS Script -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Custom scrollbar for visual appeal */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f0f0f0;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body class="min-h-screen bg-white-200">

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


    <!--Page Title-->
    <div class="mt-10 text-center font-bold"> New Coin Listing Request </div><br>

    <!-- The entire component is wrapped in x-data, managing the activeTab state -->
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-2xl" x-data="listingForm" x-init="init()">

        <p class="text-gray-600 mb-8">Please complete all the sections to finalize your application.</p>

        <!-- Form validation success/failure message -->
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
        <div id="listing-success"
            class="hidden bg-white-300 flex p-4 m-10 gap-3 items-center justify-center rounded-2xl border border-blue-600 ">
            <svg class="h-6 w-6 fill-current text-blue-600" viewBox="0 0 448 512">
                <path
                    d="M256 32V49.88C328.5 61.39 384 124.2 384 200V233.4C384 278.8 399.5 322.9 427.8 358.4L442.7 377C448.5 384.2 449.6 394.1 445.6 402.4C441.6 410.7 433.2 416 424 416H24C14.77 416 6.365 410.7 2.369 402.4C-1.628 394.1-.504 384.2 5.26 377L20.17 358.4C48.54 322.9 64 278.8 64 233.4V200C64 124.2 119.5 61.39 192 49.88V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32V32zM216 96C158.6 96 112 142.6 112 200V233.4C112 281.3 98.12 328 72.31 368H375.7C349.9 328 336 281.3 336 233.4V200C336 142.6 289.4 96 232 96H216zM288 448C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288z" />
            </svg>
            <div id="listing-success-text" class="ml-3 font-sans text-xs leading-6 text-blue-600"></div>
        </div>
        <div id="listing-error"
            class="hidden bg-white-300 flex p-4 m-10 gap-3 items-center justify-center rounded-2xl border border-red-600 ">
            <svg class="h-6 w-6 fill-current text-red-600" viewBox="0 0 512 512">
                <path
                    d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 405.3c-13.3 0-24-10.7-24-24c0-13.3 10.7-24 24-24s24 10.7 24 24c0 13.3-10.7 24-24 24zM280 128l-6.6 160c-.3 7.9-6.8 14-14.7 14h-5.4c-7.9 0-14.4-6.1-14.7-14L232 128c-.3-8.2 6.3-15 14.7-15h18.6c8.4 0 15 6.8 14.7 15z" />
            </svg>
            <div id="listing-error-text" class="ml-3 font-sans text-xs leading-6 text-red-600"></div>
        </div>
        @if($errors->any())
        <div class="bg-white-300 flex p-4 m-10 gap-3 items-center justify-center rounded-2xl border border-red-600 ">
            <svg class="h-6 w-6 fill-current text-red-600" viewBox="0 0 512 512">
                <path
                    d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 405.3c-13.3 0-24-10.7-24-24c0-13.3 10.7-24 24-24s24 10.7 24 24c0 13.3-10.7 24-24 24zM280 128l-6.6 160c-.3 7.9-6.8 14-14.7 14h-5.4c-7.9 0-14.4-6.1-14.7-14L232 128c-.3-8.2 6.3-15 14.7-15h18.6c8.4 0 15 6.8 14.7 15z" />
            </svg>
            <div class="ml-3 font-sans text-xs leading-6 text-red-600">
                Please fix the highlighted fields and try again.
            </div>
        </div>
        @endif

        <!-- The ENTIRE form, including all tab contents, is wrapped in a single <form> tag -->
        <form x-ref="listingForm" @submit.prevent="submitForm" action="/newlisting_p" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- 1. TAB NAVIGATION (Nav-Tabs equivalent) -->
            <div class="border-b border-gray-200 mb-8">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <!-- Tab 1: Company Profile -->
                    <button type="button" @click="goToTabFromNav('company')"
                        :class="activeTab === 'company' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Company
                    </button>

                    <!-- Tab 2: Basic Info -->
                    <button type="button" @click="goToTabFromNav('basic')"
                        :class="activeTab === 'basic' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Basic
                    </button>

                    <!-- Tab 3: Token Info -->
                    <button type="button" @click="goToTabFromNav('token')"
                        :class="activeTab === 'token' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Token
                    </button>

                    <!-- Tab 4: Project Intro -->
                    <button type="button" @click="goToTabFromNav('project')"
                        :class="activeTab === 'project' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Project
                    </button>

                    <!-- Tab 5: Project Dev -->
                    <button type="button" @click="goToTabFromNav('project-dev')"
                        :class="activeTab === 'project-dev' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Project Dev
                    </button>

                    <!-- Tab 6: Team Intro -->
                    <button type="button" @click="goToTabFromNav('team')"
                        :class="activeTab === 'team' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Team
                    </button>

                    <!-- Tab 7: Business Marketing Plan-->
                    <button type="button" @click="goToTabFromNav('business')"
                        :class="activeTab === 'business' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Business
                    </button>
                    <!-- Tab 8: Fee -->
                    <button type="button" @click="goToTabFromNav('fee')"
                        :class="activeTab === 'fee' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                        class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Fee
                    </button>
                </nav>
            </div>

            <!-- 2. TAB CONTENT (Tab-Content equivalent) -->
            <div class="tab-content">

                <!-- Tab Pane 1: Company Profile -->
                <div x-show="activeTab === 'company'" x-cloak data-tab-panel="company">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Company Profile</h3>

                    <div class="mb-4">
                        <label for="company_name" class="block text-sm font-medium text-gray-700 mb-1">Company
                            name</label>
                        <input type="text" name="companyName"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="e.g., XYZ Inc.">
                    </div>
                    <div class="mb-4">
                        <label for="company_address" class="block text-sm font-medium text-gray-700 mb-1">Company
                            address</label>
                        <input type="text" name="companyAdd"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="e.g., 123 Main St, City, Country">
                    </div>
                    <div class="mb-4">
                        <label for="rep_name" class="block text-sm font-medium text-gray-700 mb-1">Company
                            representative's name</label>
                        <input type="text" name="repName"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="e.g., John Doe">
                    </div>
                    <div class="mb-4">
                        <label for="rep_email" class="block text-sm font-medium text-gray-700 mb-1">Company
                            representative's email</label>
                        <input type="email" name="repEmail"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="e.g., xyz@email.com">
                    </div>
                    <div class="mb-4">
                        <label for="team_email" class="block text-sm font-medium text-gray-700 mb-1">Team's
                            email</label>
                        <input type="email" name="teamEmail"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="e.g., abc@email.com">
                    </div>
                    <p class="text-gray-600 mb-8">Please note, corporate documentation and an identity document of the
                        representative will be required if it passes at the preliminary review.</p>

                    <!-- Navigation within the form (Optional) -->
                    <div class="flex justify-end pt-4 border-t">
                        <button type="button" @click="goToTab('basic', 'company')"
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                            Next: Basic Information &rarr;
                        </button>
                    </div>
                </div>

                <!-- Tab Pane 2: Basic Project Information -->
                <div x-show="activeTab === 'basic'" x-cloak data-tab-panel="basic">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Basic Project Information</h3>

                    <div class="mb-4">
                        <label for="project_name" class="block text-sm font-medium text-gray-700 mb-1">Project
                            name</label>
                        <input type="text" name="projectName"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="e.g., XYZ">
                    </div>
                    <div class="mb-4">
                        <label for="project_intro" class="block text-sm font-medium text-gray-700 mb-1">Brief summary of
                            the project</label>
                        <textarea name="projectIntro" rows="3"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="Describe the project briefly..."></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="project_website" class="block text-sm font-medium text-gray-700 mb-1">Project's
                            official website</label>
                        <input type="url" name="projectWebsite"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="e.g., https://www.xyz.com">
                    </div>
                    <div class="mb-4">
                        <label for="project_whitepaper" class="block text-sm font-medium text-gray-700 mb-1">Weblink to
                            project's whitepaper</label>
                        <input type="url" name="projectWhitepaper"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="e.g., https://www.xyz.com/whitepaper">
                    </div>

                    <!-- Navigation within the form -->
                    <div class="flex justify-between pt-4 border-t">
                        <button type="button" @click="activeTab = 'company'"
                            class="text-gray-600 hover:text-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-150">
                            &larr; Previous: Company Profile
                        </button>
                        <button type="button" @click="goToTab('token', 'basic')"
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                            Next: Token Information &rarr;
                        </button>
                    </div>
                </div>

                <!-- Tab Pane 3: Token Information -->
                <div x-show="activeTab === 'token'" x-cloak data-tab-panel="token">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Token/Coin Information</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="token_name" class="block text-sm font-medium text-gray-700 mb-1">Please give the
                                token’s English full name</label>
                            <input type="text" name="tokenName"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., XYZ Token">
                        </div>
                        <div class="mb-4">
                            <label for="coin_symbol" class="block text-sm font-medium text-gray-700 mb-1">Token/Coin
                                symbol</label>
                            <input type="text" name="coinSymbol"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., XYZ">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="total_supply" class="block text-sm font-medium text-gray-700 mb-1">What is the
                                total supply</label>
                            <input type="text" name="totalSupply"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., 1,000,000">
                        </div>
                        <div class="mb-4">
                            <label for="coin_type" class="block text-sm font-medium text-gray-700 mb-1">What is the
                                token/coin type</label>
                            <input type="text" name="coinType"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., ERC-20">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="contract_address" class="block text-sm font-medium text-gray-700 mb-1">Provide
                                the contract address</label>
                            <input type="text" name="contractAdd"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., 0x1234...abcd">
                        </div>
                        <div class="mb-4">
                            <label for="decimal_places" class="block text-sm font-medium text-gray-700 mb-1">Token's
                                decimal places</label>
                            <input type="number" name="decimalPlaces"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., 18">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="block_explorer" class="block text-sm font-medium text-gray-700 mb-1">Please give
                                the link to it's block explorer</label>
                            <input type="url" name="blockExpl"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., https://etherscan.io">
                        </div>
                        <div class="mb-4">
                            <label for="token_dist" class="block text-sm font-medium text-gray-700 mb-1">How is the
                                token distributed</label>
                            <input type="text" name="tokenDist"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., ICO=20%, Airdrop=30%, Team=50%">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="eco_model" class="block text-sm font-medium text-gray-700 mb-1">What’s the
                                economic model</label>
                            <input type="text" name="ecomodel"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., Deflationary">
                        </div>
                        <div class="mb-4">
                            <label for="assetsAdd" class="block text-sm font-medium text-gray-700 mb-1">Traceable assets
                                storage addresse(s)</label>
                            <input type="text" name="assetsAdd"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., 0x1234...abcd">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="token_rule" class="block text-sm font-medium text-gray-700 mb-1">Token lockup
                                and release rule</label>
                            <textarea name="tokenRule" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="Please specify the token’s lockup and release rule"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="sales_det" class="block text-sm font-medium text-gray-700 mb-1">Sale phases,
                                time, amount, and prices</label>
                            <textarea name="salesDet" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="Provide the sale phases and their time, amount, and price respectively"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="holding_address" class="block text-sm font-medium text-gray-700 mb-1">Holding
                                addresse(s)</label>
                            <input type="text" name="holdingAdd"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., 0x1234...abcd">
                        </div>
                        <div class="mb-4">
                            <label for="additional_iss" class="block text-sm font-medium text-gray-700 mb-1">Will there
                                be additional issuance, how?</label>
                            <textarea name="additionalIss" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="Provide details of additional issuance and how you plan to execute it"></textarea>
                        </div>
                    </div>

                    <!-- Navigation within the form -->
                    <div class="flex justify-between pt-4 border-t">
                        <button type="button" @click="activeTab = 'basic'"
                            class="text-gray-600 hover:text-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-150">
                            &larr; Previous: Basic Information
                        </button>
                        <button type="button" @click="goToTab('project', 'token')"
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                            Next: Project Introduction &rarr;
                        </button>
                    </div>
                </div>

                <!-- Tab Pane 4: Project Introduction -->
                <div x-show="activeTab === 'project'" x-cloak data-tab-panel="project">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Project Introduction</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="track_rec" class="block text-sm font-medium text-gray-700 mb-1">Team's
                                track-record in the relevant indusgittry</label>
                            <textarea name="trackRec" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="What is the track record of the team in this industry?"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="outstanding_feat" class="block text-sm font-medium text-gray-700 mb-1">Project's
                                outstanding feat</label>
                            <textarea name="outstandingFeat" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="What makes the project outstanding?"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="target" class="block text-sm font-medium text-gray-700 mb-1">Project's
                                target</label>
                            <textarea name="target" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="What is the project's target and vision?"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="technical_fw" class="block text-sm font-medium text-gray-700 mb-1">Technical
                                framework of the project</label>
                            <textarea name="technicalFW" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="Give the technical framework of this project"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="innovative_tech"
                                class="block text-sm font-medium text-gray-700 mb-1">Technological innovation</label>
                            <textarea name="innovativeTech" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="What is the project innovating technologically?"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="difficulty" class="block text-sm font-medium text-gray-700 mb-1">Implementation
                                difficulty</label>
                            <textarea name="difficulty" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="Point out the difficulty with immplementing this technology?"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="proposed_sol" class="block text-sm font-medium text-gray-700 mb-1">Proposed
                                solution</label>
                            <textarea name="proposedSol" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="What is the solution proposed by this project?"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="opensource" class="block text-sm font-medium text-gray-700 mb-1">Is the project
                                opensource?</label>
                            <textarea name="opensource" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="Is the project open sourced? If it is, when?"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="competitors"
                                class="block text-sm font-medium text-gray-700 mb-1">Competitors</label>
                            <textarea name="competitors" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="Who are the project's competitors in your opinion?"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="superior_feat" class="block text-sm font-medium text-gray-700 mb-1">Competitive
                                advantage</label>
                            <textarea name="superiorFeat" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="What make your project superior to your peer competitors in the same niche?"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="ecosystem" class="block text-sm font-medium text-gray-700 mb-1">Ecosystem
                                products</label>
                            <textarea name="ecosystem" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="List what have been built successfully in your ecosystem"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="project_use" class="block text-sm font-medium text-gray-700 mb-1">Project's
                                usecase(s)</label>
                            <textarea name="projectUse" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="Please give the use cases of this project?"></textarea>
                        </div>
                    </div>

                    <!-- Navigation within the form -->
                    <div class="flex justify-between pt-4 border-t">
                        <button type="button" @click="activeTab = 'token'"
                            class="text-gray-600 hover:text-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-150">
                            &larr; Previous: Token Information
                        </button>
                        <button type="button" @click="goToTab('project-dev', 'project')"
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                            Next: Project Development &rarr;
                        </button>
                    </div>
                </div>

                <!-- Tab Pane 5: Project Development -->
                <div x-show="activeTab === 'project-dev'" x-cloak data-tab-panel="project-dev">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Project Development</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="code_library" class="block text-sm font-medium text-gray-700 mb-1">Link to the
                                project's code library</label>
                            <input type="url" name="codeLibrary"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., https://github.com/code">
                        </div>
                        <div class="mb-4">
                            <label for="roadmap" class="block text-sm font-medium text-gray-700 mb-1">Link to the
                                project's roadmap</label>
                            <input type="url" name="roadmap"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="e.g., https://xyz.com/roadmap">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="network_cond" class="block text-sm font-medium text-gray-700 mb-1">Network
                                condition</label>
                            <textarea name="networkCond" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="What is its network condition currently?"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="func_modeules" class="block text-sm font-medium text-gray-700 mb-1">Functional
                                modules development</label>
                            <textarea name="funcModules" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="How is the development of the main functional modules going?"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="implementation" class="block text-sm font-medium text-gray-700 mb-1">Project's
                                implementation</label>
                            <textarea name="implementation" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="How is the project's implementation going so far?"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="ecosystem_dev" class="block text-sm font-medium text-gray-700 mb-1">Ecosystem
                                development</label>
                            <textarea name="ecosystemDev" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="What is the development level of the project's ecosystem?"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="current_phase" class="block text-sm font-medium text-gray-700 mb-1">Current
                                development phase</label>
                            <input type="text" name="currentPhase"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="At which phase on the road-map the project currently is?">
                        </div>
                        <div class="mb-4">
                            <label for="dev_venue" class="block text-sm font-medium text-gray-700 mb-1">Development
                                Venue</label>
                            <textarea name="devVenue" rows="3"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                                placeholder="Provide details of the projects development site/set-up"></textarea>
                        </div>
                    </div>

                    <!-- Navigation within the form -->
                    <div class="flex justify-between pt-4 border-t">
                        <button type="button" @click="activeTab = 'project'"
                            class="text-gray-600 hover:text-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-150">
                            &larr; Previous: Project Introduction
                        </button>
                        <button type="button" @click="goToTab('team', 'project-dev')"
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                            Next: Team Introduction &rarr;
                        </button>
                    </div>
                </div>

                <!-- Tab Pane 6: Team Introduction -->
                <div x-show="activeTab === 'team'" x-cloak data-tab-panel="team">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Team Introduction</h3>

                    <div class="mb-4">
                        <label for="team_intro" class="block text-sm font-medium text-gray-700 mb-1">Project's
                            team</label>
                        <textarea name="teamIntro" rows="2"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="Give a brief introduction to the project's team"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="core_members" class="block text-sm font-medium text-gray-700 mb-1">Core
                            members</label>
                        <textarea name="coreMembers" rows="2"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="Profiles of the project's core members"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="consultant_prof" class="block text-sm font-medium text-gray-700 mb-1">Consultant(s)
                            profile</label>
                        <textarea name="consultantProf" rows="2"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="Profile of the project's consultant(s)"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="investors" class="block text-sm font-medium text-gray-700 mb-1">Institutional
                            investors</label>
                        <textarea name="investors" rows="2"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="Who are the project's institutional investors"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="commercial_partners" class="block text-sm font-medium text-gray-700 mb-1">Commercial
                            partners</label>
                        <textarea name="commercialPartners" rows="2"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="Please name the project's commercial partners"></textarea>
                    </div>

                    <!-- Navigation within the form -->
                    <div class="flex justify-between pt-4 border-t">
                        <button type="button" @click="activeTab = 'project-dev'"
                            class="text-gray-600 hover:text-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-150">
                            &larr; Previous: Project Development
                        </button>
                        <button type="button" @click="goToTab('business', 'team')"
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                            Next: Business Development Plan &rarr;
                        </button>
                    </div>
                </div>

                <!-- Tab Pane 7: Business Development Plan -->
                <div x-show="activeTab === 'business'" x-cloak data-tab-panel="business">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Business Marketing Plan</h3>

                    <div class="mb-4">
                        <label for="community_info" class="block text-sm font-medium text-gray-700 mb-1">Community
                            Information</label>
                        <textarea name="communityInfo" rows="2"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="Give the brief detail about the project's community"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="marketing_ch" class="block text-sm font-medium text-gray-700 mb-1">Marketing
                            Channel(s)</label>
                        <textarea name="marketingCh" rows="2"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="What are your marketing channels currently?"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="marketing_camp" class="block text-sm font-medium text-gray-700 mb-1">Marketing
                            Campaigns</label>
                        <textarea name="marketingCamp" rows="2"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="Provide the marketing campaigns before and after exchange listing"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="budget" class="block text-sm font-medium text-gray-700 mb-1">Campaign Budget</label>
                        <textarea name="budget" rows="2"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="What is the budget for campaigns before and after exchange listing"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="marketing_plans" class="block text-sm font-medium text-gray-700 mb-1">Project's
                            team</label>
                        <textarea name="marketingPlans" rows="2"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="Please describe the detailed marketing plan"></textarea>
                    </div>

                    <!-- Navigation within the form -->
                    <div class="flex justify-between pt-4 border-t">
                        <button type="button" @click="activeTab = 'team'"
                            class="text-gray-600 hover:text-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-150">
                            &larr; Previous: Team Introduction
                        </button>
                        <button type="button" @click="goToTab('fee', 'business')"
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                            Next: Evaluation/Review Fee &rarr;
                        </button>
                    </div>
                </div>

                <!-- Tab Pane 8: Evaluation/Review Fee -->
                <div x-show="activeTab === 'fee'" x-cloak data-tab-panel="fee">
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Evaluation/Review Fee</h3>

                    <div class="mb-4">
                        <p class="text-gray-600 mb-8">
                            Our standard evaluation/review fee is 2,000 USDT, which covers the comprehensive assessment
                            of your project by our expert team.
                            This fee includes technical evaluation, market analysis, and strategic recommendations to
                            enhance your project's potential for success.
                            Please ensure that the payment is made prior to the submision of this application form.
                        </p>
                        <p class="text-gray-600 mb-8">
                            This fee is <b>refundable</b> if the project fails to advance from this stage.
                            Projects that passes review move to the next phase of the pre-listing process.
                            Please do not reapply (except for another project) if this project fails to advance from
                            this stage.
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-600 mb-8">
                            Please make the payment of 2,000 USDT to the following USDT address on <b>ERC-20
                                Network,</b> attach screenshot / receipt of payment below :
                            <br>
                            <b>0x4B26C72000Ea676F92AAa61A15081534bC2448Cb</b>
                        </p>
                    </div>
                    <div class="mb-4">
                        <span class="text-gray-600 mb-8">Upload screenshot / receipt of payment</span>
                        <input type="file" required name="receipt"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="*Please attach the payment reciept" />
                    </div>
                    <div class="mb-4">
                        <label for="budget" class="block text-sm font-medium text-gray-700 mb-1">Provide your USDT
                            address should there be a case of refund (TRC-20)</label>
                        <input type="text" name="refAddress"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5"
                            placeholder="Trc-20 USDT address for refund if applicable" />
                    </div>


                    <!-- Final Submission Button -->
                    <div class="flex justify-between pt-4 border-t">
                        <button type="button" @click="activeTab = 'business'"
                            class="text-gray-600 hover:text-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-150">
                            &larr; Previous: Business Development Plan
                        </button>
                        <button type="submit"
                            class="bg-green-600 hover:bg-green-700 text-white font-bold py-2.5 px-6 rounded-lg shadow-xl transition duration-150 transform hover:scale-[1.02]">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Save and Submit Application
                        </button>
                    </div>
                </div>

            </div>
            <!-- End of Tab Content -->

        </form>

    </div>
    <!-- End of Alpine Data Scope -->

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('listingForm', () => ({
                activeTab: 'company',
                tabOrder: ['company', 'basic', 'token', 'project', 'project-dev', 'team', 'business', 'fee'],
                init() {
                    const fields = this.getAllFields();
                    fields.forEach((field) => {
                        field.required = true;
                        field.addEventListener('input', () => this.validateField(field));
                        field.addEventListener('blur', () => this.validateField(field));
                        if (field.type === 'file') {
                            field.addEventListener('change', () => this.validateField(field));
                        }
                    });
                },
                getAllFields() {
                    const form = this.$refs.listingForm;
                    if (!form) {
                        return [];
                    }
                    return Array.from(form.querySelectorAll('input, textarea, select'))
                        .filter((field) => field.name);
                },
                getTabFields(tab) {
                    const form = this.$refs.listingForm;
                    if (!form) {
                        return [];
                    }
                    return Array.from(form.querySelectorAll('input, textarea, select'))
                        .filter((field) => field.name)
                        .filter((field) => field.closest('[data-tab-panel]')?.getAttribute('data-tab-panel') === tab);
                },
                validateField(field) {
                    const isFile = field.type === 'file';
                    const value = typeof field.value === 'string' ? field.value.trim() : field.value;
                    const hasValue = isFile ? (field.files && field.files.length > 0) : value !== '';
                    const isValid = field.checkValidity() && hasValue;
                    const invalidClasses = ['border-red-500', 'ring-red-500'];
                    if (!isValid) {
                        field.classList.add(...invalidClasses);
                    } else {
                        field.classList.remove(...invalidClasses);
                    }
                    return isValid;
                },
                clearFieldErrors() {
                    const fields = this.getAllFields();
                    fields.forEach((field) => {
                        field.classList.remove('border-red-500', 'ring-red-500');
                        const existing = field.parentElement?.querySelector('.field-error');
                        if (existing) {
                            existing.remove();
                        }
                    });
                },
                applyServerErrors(errors) {
                    const fields = this.getAllFields();
                    const firstErrorKey = Object.keys(errors || {})[0];
                    fields.forEach((field) => {
                        if (errors && Object.prototype.hasOwnProperty.call(errors, field.name)) {
                            field.classList.add('border-red-500', 'ring-red-500');
                            const message = Array.isArray(errors[field.name]) ? errors[field.name][0] : errors[field.name];
                            const existing = field.parentElement?.querySelector('.field-error');
                            if (existing) {
                                existing.textContent = message;
                            } else if (field.parentElement) {
                                const errorEl = document.createElement('div');
                                errorEl.className = 'field-error text-red-500 text-xs mt-1';
                                errorEl.textContent = message;
                                field.parentElement.appendChild(errorEl);
                            }
                        }
                    });
                    if (firstErrorKey) {
                        const firstField = fields.find((field) => field.name === firstErrorKey);
                        if (firstField) {
                            const tab = firstField.closest('[data-tab-panel]')?.getAttribute('data-tab-panel');
                            if (tab) {
                                this.activeTab = tab;
                            }
                            firstField.focus();
                        }
                    }
                },
                validateTab(tab) {
                    const fields = this.getTabFields(tab);
                    let firstInvalid = null;
                    fields.forEach((field) => {
                        const valid = this.validateField(field);
                        if (!valid && !firstInvalid) {
                            firstInvalid = field;
                        }
                    });
                    if (firstInvalid) {
                        this.activeTab = tab;
                        firstInvalid.focus();
                        firstInvalid.reportValidity();
                        return false;
                    }
                    return true;
                },
                goToTab(nextTab, currentTab) {
                    if (this.validateTab(currentTab)) {
                        this.activeTab = nextTab;
                    }
                },
                goToTabFromNav(targetTab) {
                    const currentIndex = this.tabOrder.indexOf(this.activeTab);
                    const targetIndex = this.tabOrder.indexOf(targetTab);
                    if (targetIndex === -1) {
                        return;
                    }
                    if (targetIndex <= currentIndex) {
                        this.activeTab = targetTab;
                        return;
                    }
                    for (let index = currentIndex; index < targetIndex; index++) {
                        const tab = this.tabOrder[index];
                        if (!this.validateTab(tab)) {
                            return;
                        }
                    }
                    this.activeTab = targetTab;
                },
                async submitForm() {
                    for (const tab of this.tabOrder) {
                        if (!this.validateTab(tab)) {
                            return;
                        }
                    }
                    const form = this.$refs.listingForm;
                    const formData = new FormData(form);
                    const token = form.querySelector('input[name="_token"]')?.value;
                    const successBox = document.getElementById('listing-success');
                    const successText = document.getElementById('listing-success-text');
                    const errorBox = document.getElementById('listing-error');
                    const errorText = document.getElementById('listing-error-text');
                    successBox.classList.add('hidden');
                    errorBox.classList.add('hidden');
                    this.clearFieldErrors();

                    let response;
                    try {
                        response = await fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': token || '',
                                'Accept': 'application/json'
                            },
                            body: formData
                        });
                    } catch (error) {
                        errorText.textContent = 'Network error. Please try again.';
                        errorBox.classList.remove('hidden');
                        return;
                    }

                    if (!response.ok) {
                        let message = 'Please fix the highlighted fields and try again.';
                        let errors = null;
                        try {
                            const payload = await response.json();
                            if (payload?.message) {
                                message = payload.message;
                            }
                            if (payload?.errors) {
                                errors = payload.errors;
                            }
                        } catch (error) {
                            // Ignore JSON parse errors.
                        }
                        errorText.textContent = message;
                        errorBox.classList.remove('hidden');
                        if (errors) {
                            this.applyServerErrors(errors);
                        }
                        return;
                    }

                    const payload = await response.json();
                    successText.textContent = payload?.message || 'Project Listing Request Submitted';
                    successBox.classList.remove('hidden');
                    form.reset();
                    this.activeTab = 'company';
                }
            }));
        });
    </script>


</body>

</html>