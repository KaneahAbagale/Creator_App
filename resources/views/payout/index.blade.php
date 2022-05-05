<x-app-layout>
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

                
                <div class="col-span-3 sm:col-span-2">
                    <label for="name" value="{{ __('payout.index') }}" class="block text-sm font-medium text-gray-700"> Cost </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <select name="cost" id="cost1" onchange="makePayout()" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">
                            <option value="">Select</option>
                            <option value="0">Bank Transfer</option>
                            <option value="1">Mobile Money</option>
                        </select>            
                    </div>
                </div>
                
                    
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input name="title" id="contenttype" type="text" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Art/Music title">           
                        </div>
                    </div>
                </div> 

                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input value="" type="text" id="amount" disabled />
                  </div>
             
            </form>
    </html>
</x-app-layout>   
    



