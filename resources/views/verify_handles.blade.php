<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="gate.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Social Handles || gate.io</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-zinc-100">

    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="gate_logo_wt.png" class="h-8" alt="Gate.io" />
            </a>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white shadow rounded-lg p-6 mt-8">
            <h1 class="text-2xl font-semibold text-gray-800">Verify Our Official Social Handles</h1>
            <p class="text-gray-600 mt-2">
                Use this page to confirm our official accounts and avoid impersonation or scams.
                If a handle is not listed below, treat it as unverified.
            </p>
        </div>

        <div class="bg-white shadow rounded-lg p-6 mt-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Verify a Handle</h2>
            <form method="GET" action="{{ route('verify.handles') }}" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Platform</label>
                    <input type="text" name="platform" value="{{ $platform ?? '' }}" class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="e.g., X, Telegram">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Handle</label>
                    <input type="text" name="handle" value="{{ $handle ?? '' }}" class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="e.g., @gate_io">
                </div>
                <div class="flex items-end">
                    <button class="w-full cursor-pointer rounded-lg bg-blue-700 px-6 py-2 text-sm font-semibold text-white">Verify</button>
                </div>
            </form>
            <p class="text-xs text-gray-500 mt-3">
                Submitting a verification attempt is logged to help monitor spoofing activity.
            </p>
            @if(($verificationStatus ?? null) === 'success')
            <div class="mt-4 rounded-lg border border-green-600 bg-green-50 px-4 py-3 text-sm text-green-700">
                Verified. This handle matches an official account.
            </div>
            @elseif(($verificationStatus ?? null) === 'failed')
            <div class="mt-4 rounded-lg border border-red-600 bg-red-50 px-4 py-3 text-sm text-red-700">
                Not verified. This handle is not listed as an official account.
            </div>
            @endif
        </div>

        <div class="bg-white shadow rounded-lg p-6 mt-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Official Handles</h2>
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
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($handles as $handleRow)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $handleRow->platform }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $handleRow->handle }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $handleRow->url }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="px-6 py-6 text-center text-sm text-gray-500" colspan="3">
                            No verified handles have been published yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
