
               
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input name="title" id="contenttype" type="text" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Art/Music title">           
                                    </div>
                                </div>
                            </div> 

                            

                                <div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Pay Out</button>
                                    </div>    
                                </div>
                            </div>
                            </div>   
                        </div>
                   
 
   
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
                
                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input value="" type="text" id="amount" disabled />
                </div>

                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="name" value="{{ __('payout.index') }}" class="block text-sm font-medium text-gray-700">Title</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input name="title" id="contenttype" type="text" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Art/Music title">           
                        </div>
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
                    
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input name="title" id="contenttype" type="text" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Art/Music title">           
                        </div>
                    </div>
                </div> 
                
                
            </form>
            
    </html>
    
    



