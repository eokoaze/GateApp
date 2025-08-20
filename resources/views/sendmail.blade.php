<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="gate.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sendmail || gateglobal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>

    </style>
</head>
<body class="bg-animate min-h-screen flex items-center justify-center p-4 bg-zinc-200">
    <div class="bg-grey bg-opacity-80 p-8 rounded-3xl shadow-2xl transform hover:scale-105 transition-all duration-500 max-w-2xl w-full">
        <h3 class="text-4xl font-extrabold text-center mb-8 neon-text">Gate mail 
        <a href="/ddash" class="text-sm py-1 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">return to Dash</a>
        </h3>
        
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

        <form class="space-y-6" action="/sendmail" method="POST">
            @csrf
            <div class="relative">
                <input type="email" name="email" placeholder="Recipient Email Address" class="w-full bg-gray-800 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 transition-all duration-300">
                <i class="fas fa-user absolute right-3 top-3 text-pink-500"></i>
            </div>
            <div class="relative">
                <input type="text" name="subject" placeholder="Email Subject" class="w-full bg-gray-800 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 transition-all duration-300">
                <i class="fas fa-envelope absolute right-3 top-3 text-pink-500"></i>
            </div>
            <div class="relative">
                <div class="">
                    @error ('emailMessage')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    @error ('email')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                    @error ('subject')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Email Message
                </label>
                <textarea rows="11" name="emailMessage" class="w-full bg-gray-800 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 transition-all duration-300">
                </textarea>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white font-bold py-3 rounded-lg hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                Send Mail
            </button>
        </form>
    </div>
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
        <i class="fas fa-rocket text-red-500 text-5xl absolute float" style="top: 20%; right: 10%;"></i>
    </div>
</body>
</html>