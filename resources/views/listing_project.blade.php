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
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Custom scrollbar for visual appeal */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f0f0f0; }
        ::-webkit-scrollbar-thumb { background: #888; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #555; }
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
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-2xl"
         x-data="{ activeTab: 'company' }">

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

        <!-- The ENTIRE form, including all tab contents, is wrapped in a single <form> tag -->
        <form action="/api/save-product" method="POST">
            
            <!-- 1. TAB NAVIGATION (Nav-Tabs equivalent) -->
            <div class="border-b border-gray-200 mb-8">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <!-- Tab 1: Company Profile -->
                    <button type="button" 
                            @click="activeTab = 'company'"
                            :class="activeTab === 'company' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Company
                    </button>

                    <!-- Tab 2: Basic Info -->
                    <button type="button"
                            @click="activeTab = 'basic'"
                            :class="activeTab === 'basic' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Basic
                    </button>

                    <!-- Tab 3: Token Info -->
                    <button type="button"
                            @click="activeTab = 'token'"
                            :class="activeTab === 'token' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Token
                    </button>

                     <!-- Tab 4: Project Intro -->
                    <button type="button"
                            @click="activeTab = 'project'"
                            :class="activeTab === 'project' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Project
                    </button>

                     <!-- Tab 5: Project Dev -->
                    <button type="button"
                            @click="activeTab = 'project-dev'"
                            :class="activeTab === 'project-dev' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Project Dev
                    </button>

                     <!-- Tab 6: Team Intro -->
                    <button type="button"
                            @click="activeTab = 'team'"
                            :class="activeTab === 'team' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Team
                    </button>

                     <!-- Tab 7: Business Marketing Plan-->
                    <button type="button"
                            @click="activeTab = 'business'"
                            :class="activeTab === 'business' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Business
                    </button>
                     <!-- Tab 8: Fee -->
                    <button type="button"
                            @click="activeTab = 'fee'"
                            :class="activeTab === 'fee' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm transition-colors duration-200 rounded-t-lg">
                        Fee
                    </button>
                </nav>
            </div>
            
            <!-- 2. TAB CONTENT (Tab-Content equivalent) -->
            <div class="tab-content">
                
                <!-- Tab Pane 1: Company Profile -->
                <div x-show="activeTab === 'company'" x-cloak>
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Company Profile</h3>
                    
                    <div class="mb-4">
                        <label for="company_name" class="block text-sm font-medium text-gray-700 mb-1">Company name</label>
                        <input type="text" name="companyName" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., XYZ Inc.">
                    </div>
                    @error ('companyName')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="mb-4">
                        <label for="company_address" class="block text-sm font-medium text-gray-700 mb-1">Company address</label>
                        <input type="text" name="companyAdd" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., 123 Main St, City, Country">
                    </div>
                    @error ('companyAdd')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="mb-4">
                        <label for="rep_name" class="block text-sm font-medium text-gray-700 mb-1">Company representative's name</label>
                        <input type="text" name="repName" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., John Doe">
                    </div>
                    @error ('repName')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="mb-4">
                        <label for="rep_email" class="block text-sm font-medium text-gray-700 mb-1">Company representative's email</label>
                        <input type="email" name="repEmail" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., xyz@email.com">
                    </div>
                    @error ('repEmail')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="mb-4">
                        <label for="team_email" class="block text-sm font-medium text-gray-700 mb-1">Team's email</label>
                        <input type="email" name="teamEmail" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., abc@email.com">
                    </div>
                    @error ('teamEmail')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <p class="text-gray-800 mb-8">Please note, corporate documentation and an identity document of the representative will be required if it passes at the preliminary review.</p>

                    <!-- Navigation within the form (Optional) -->
                    <div class="flex justify-end pt-4 border-t">
                        <button type="button" @click="activeTab = 'pricing'" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                            Next: Basic Information &rarr;
                        </button>
                    </div>
                </div>

                <!-- Tab Pane 2: Basic Project Information -->
                <div x-show="activeTab === 'basic'" x-cloak>
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Basic Project Information</h3>

                    <div class="mb-4">
                        <label for="project_name" class="block text-sm font-medium text-gray-700 mb-1">Project name</label>
                        <input type="text" name="projectName" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., XYZ">
                    </div>
                    @error ('projectName')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="mb-4">
                        <label for="project_intro" class="block text-sm font-medium text-gray-700 mb-1">Brief summary of the project</label>
                        <textarea name="projectIntro" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Describe the project briefly..."></textarea>
                    </div>
                    @error ('projectIntro')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="mb-4">
                        <label for="project_website" class="block text-sm font-medium text-gray-700 mb-1">Project's official website</label>
                        <input type="url" name="projectWebsite" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., https://www.xyz.com">
                    </div>
                    @error ('projectWebsite')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    <div class="mb-4">
                        <label for="project_whitepaper" class="block text-sm font-medium text-gray-700 mb-1">Weblink to project's whitepaper</label>
                        <input type="url" name="projectWhitepaper" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., https://www.xyz.com/whitepaper">
                    </div>
                    @error ('projectWhitepaper')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror

                    <!-- Navigation within the form -->
                    <div class="flex justify-between pt-4 border-t">
                        <button type="button" @click="activeTab = 'company'" class="text-gray-600 hover:text-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-150">
                            &larr; Previous: Company Profile
                        </button>
                        <button type="button" @click="activeTab = 'token'" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                            Next: Token Information &rarr;
                        </button>
                    </div>
                </div>

                <!-- Tab Pane 3: Token Information -->
                <div x-show="activeTab === 'token'" x-cloak>
                    <h3 class="text-lg font-semibold mb-4 text-gray-700">Token/Coin Information</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="token_name" class="block text-sm font-medium text-gray-700 mb-1">Please give the token’s English full name</label>
                            <input type="text" name="tokenName" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., XYZ Token">
                        </div>
                        <div class="mb-4">
                            <label for="coin_symbol" class="block text-sm font-medium text-gray-700 mb-1">Token/Coin symbol</label>
                            <input type="text" name="coinSymbol" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., XYZ">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="total_supply" class="block text-sm font-medium text-gray-700 mb-1">What is the total supply</label>
                            <input type="text" name="totalSupply" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., 1,000,000">
                        </div>
                        <div class="mb-4">
                            <label for="coin_type" class="block text-sm font-medium text-gray-700 mb-1">What is the token/coin type</label>
                            <input type="text" name="coinType" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., ERC-20">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="contract_address" class="block text-sm font-medium text-gray-700 mb-1">Provide the contract address</label>
                            <input type="text" name="contractAdd" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., 0x1234...abcd">
                        </div>
                        <div class="mb-4">
                            <label for="decimal_places" class="block text-sm font-medium text-gray-700 mb-1">Token's decimal places</label>
                            <input type="number" name="decimalPlaces" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., 18">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="block_explorer" class="block text-sm font-medium text-gray-700 mb-1">Please give the link to it's block explorer</label>
                            <input type="url" name="blockExpl" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., https://etherscan.io">
                        </div>
                        <div class="mb-4">
                            <label for="token_dist" class="block text-sm font-medium text-gray-700 mb-1">How is the token distributed</label>
                            <input type="text" name="tokenDist" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., ICO=20%, Airdrop=30%, Team=50%">
                        </div>
                     </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="eco_model" class="block text-sm font-medium text-gray-700 mb-1">What’s the economic model</label>
                            <input type="text" name="ecomodel" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., Deflationary">
                        </div>
                        <div class="mb-4">
                            <label for="assetsAdd" class="block text-sm font-medium text-gray-700 mb-1">Traceable assets storage addresse(s)</label>
                            <input type="text" name="assetsAdd" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., 0x1234...abcd">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="token_rule" class="block text-sm font-medium text-gray-700 mb-1">Token lockup and release rule</label>
                            <textarea name="tokenRule" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Please specify the token’s lockup and release rule"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="sales_det" class="block text-sm font-medium text-gray-700 mb-1">Sale phases, time, amount, and prices</label>
                            <textarea name="salesDet" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Provide the sale phases and their time, amount, and price respectively"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="holding_address" class="block text-sm font-medium text-gray-700 mb-1">Holding addresse(s)</label>
                            <input type="text" name="holdingAdd" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="e.g., 0x1234...abcd">
                        </div>
                        <div class="mb-4">
                            <label for="additional_iss" class="block text-sm font-medium text-gray-700 mb-1">Will there be additional issuance, how?</label>
                            <textarea name="addtionalIss" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Provide details of additional issuance and how you plan to execute it"></textarea>
                        </div>
                    </div>

                    <!-- Navigation within the form -->
                    <div class="flex justify-between pt-4 border-t">
                        <button type="button" @click="activeTab = 'basic'" class="text-gray-600 hover:text-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-150">
                            &larr; Previous: Basic Information
                        </button>
                        <button type="button" @click="activeTab = 'project'" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                            Next: Project Introduction &rarr;
                        </button>
                    </div>

                    <!-- Tab Pane 4: Project Introduction -->
                    <div x-show="activeTab === 'company'" x-cloak>
                        <h3 class="text-lg font-semibold mb-4 text-gray-700">Project Introduction</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-4">
                                <label for="token_rule" class="block text-sm font-medium text-gray-700 mb-1">Token lockup and release rule</label>
                                <textarea name="tokenRule" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Please specify the token’s lockup and release rule"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="sales_det" class="block text-sm font-medium text-gray-700 mb-1">Sale phases, time, amount, and prices</label>
                                <textarea name="salesDet" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Provide the sale phases and their time, amount, and price respectively"></textarea>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-4">
                                <label for="token_rule" class="block text-sm font-medium text-gray-700 mb-1">Token lockup and release rule</label>
                                <textarea name="tokenRule" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Please specify the token’s lockup and release rule"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="sales_det" class="block text-sm font-medium text-gray-700 mb-1">Sale phases, time, amount, and prices</label>
                                <textarea name="salesDet" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Provide the sale phases and their time, amount, and price respectively"></textarea>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-4">
                                <label for="token_rule" class="block text-sm font-medium text-gray-700 mb-1">Token lockup and release rule</label>
                                <textarea name="tokenRule" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Please specify the token’s lockup and release rule"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="sales_det" class="block text-sm font-medium text-gray-700 mb-1">Sale phases, time, amount, and prices</label>
                                <textarea name="salesDet" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Provide the sale phases and their time, amount, and price respectively"></textarea>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-4">
                                <label for="token_rule" class="block text-sm font-medium text-gray-700 mb-1">Token lockup and release rule</label>
                                <textarea name="tokenRule" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Please specify the token’s lockup and release rule"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="sales_det" class="block text-sm font-medium text-gray-700 mb-1">Sale phases, time, amount, and prices</label>
                                <textarea name="salesDet" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5" placeholder="Provide the sale phases and their time, amount, and price respectively"></textarea>
                            </div>
                        </div>

                        <!-- Navigation within the form (Optional) -->
                        <div class="flex justify-end pt-4 border-t">
                            <button type="button" @click="activeTab = 'pricing'" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150">
                                Next: Basic Information &rarr;
                            </button>
                        </div>
                    </div>

                    <!-- Final Submission Button -->
                    <div class="flex justify-between pt-4 border-t">
                        <button type="button" @click="activeTab = 'pricing'" class="text-gray-600 hover:text-indigo-600 font-semibold py-2 px-4 rounded-lg transition duration-150">
                            &larr; Previous: Pricing & Inventory
                        </button>
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2.5 px-6 rounded-lg shadow-xl transition duration-150 transform hover:scale-[1.02]">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Save All Product Data
                        </button>
                    </div>
                </div>

            </div>
            <!-- End of Tab Content -->

        </form>

    </div>
    <!-- End of Alpine Data Scope -->
      

</body>
</html>