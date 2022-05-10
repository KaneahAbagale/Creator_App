<x-app-layout>
    <div class="p-2">
        <div class="flex items-center flex-wrap ">
          <a href="content/create">Payout</a>
        </div>
    </div>
    <div class="p-24">
        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
        
                <title>Pay Out </title>
        
                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            </head>
            <body >
                <form id="paymentForm">
                    
                    

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="name" value="{{ __('payout.index') }}" class="block text-sm font-medium text-gray-700">Account Name</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input name="name" id="contenttype" type="text" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="john doe">           
                            </div>
                        </div>
                    </div>  

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input name="email" id="contenttype" type="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="joh@gmail.com">           
                            </div>
                        </div>
                    </div> 

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="name" value="{{ __('payout.index') }}" class="block text-sm font-medium text-gray-700"> Payout Platform</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="platform" id="payout type" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">
                                    <option value="">Select</option>
                                    <option value="0">Bank Transfer</option>
                                    <option value="1">Mobile Money</option>
                                </select>            
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">Account/Mobile Money Number</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input name="title" id="contenttype" type="text" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="2345 5678 1234/050 200 3456">           
                            </div>
                        </div>
                    </div> 

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">Amount</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input name="Amount" id="contenttype" type="text" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="GHC 1000">           
                            </div>
                        </div>
                    </div> 
                </form>
                <div class="flex items-center flex-wrap ">
                    <!-- <a href="wallet" class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Payout</a> -->
                    <a href="{{ route('payout.index') }}" :active="request()->routeIs('payout.index')"class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">{{ __('Payout') }}</a> 
                </div>
        </html>
    </div>
</x-app-layout>   
    



