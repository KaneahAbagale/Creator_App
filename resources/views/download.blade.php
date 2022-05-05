<x-app-layout>
    <div> 
                <!-- component -->
        <style>
            @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
            .bg-random {
                /* @apply bg-cover bg-center */
                background-image: url(https://source.unsplash.com/random);
                background-size: cover;
                background-position: center;
            }
        </style>
            
        <div class="min-w-screen min-h-screen bg-random flex items-center justify-center px-5 py-5">
            <div class="w-full mx-auto rounded-3xl shadow-xl bg-white" style="max-width: 300px">
                <div class="w-full px-5 pt-8 pb-3">
                    <div class="rounded-full w-44 h-44 mx-auto border-8 border-gray-300 flex items-center justify-center">
                        <i class="mdi mdi-arrow-down text-8xl text-gray-300 leading-none"></i>
                    </div>
                </div>
                <div class="w-full px-5 text-center pb-8 border-b border-gray-300">
                    <h1 class="text-2xl font-light text-gray-800 leading-tight">Ready when you are</h1>
                    <p class="text-xs text-gray-500">Transfer expires in 7 days</p>
                </div>
                <ul>
                    <li class="w-full px-5 py-2 border-b border-gray-300">
                        <div class="w-full flex">
                            <div class="flex-grow">
                                <h3 class="text-sm text-gray-800 leading-tight">LoremIpsum_sitamore.zip</h3>
                                <p class="text-xs text-gray-500">138 MB - zip</p>
                            </div>
                            <div class="w-12 text-right">
                                <i class="mdi mdi-download-circle-outline text-blue-500 text-2xl"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="w-full px-5 py-5 text-center">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white rounded-full px-10 py-2 transition-colors">Download</button>
                </div>
            </div>
        </div>
        
        <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
        <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
            <div>
                <a title="Buy me a beer" href="https://www.buymeacoffee.com/scottwindon" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                    <img class="object-cover object-center w-full h-full rounded-full" src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg"/>
                </a>
            </div>
        </div>
    </div> 
</x-app-layout>
            