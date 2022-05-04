
<x-app-layout>
    
    <div class="p-24">

        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Pay Out/h3>
                    </div>
                </div>
            
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('payout.index') }}">
                        @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

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
                    </form>
                </div>
            </div>
 
        </div>
        
    </div>
   
</x-app-layout>




