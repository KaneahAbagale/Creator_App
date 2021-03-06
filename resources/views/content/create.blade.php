<x-app-layout>
    
    <div class="p-24">

        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Upload Content</h3>
                    </div>
                </div>
            
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('content.store') }}" method="POST">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="name" value="{{ __('Content type') }}" class="block text-sm font-medium text-gray-700">Title</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input name="title" id="contenttype" type="text" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Art/Music title">           
                                </div>
                            </div>
                        </div>  

                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="name" value="{{ __('Content type') }}" class="block text-sm font-medium text-gray-700"> Content type </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <select name="content_type" id="contenttype" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">
                                        <option value="default">Select</option>
                                        <option value="music">Music</option>
                                        <option value="art">Art</option>
                                    </select>            
                                </div>
                            </div>
                        </div>
                            
                            <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="name" value="{{ __('Content type') }}" class="block text-sm font-medium text-gray-700"> Cost </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <select name="cost" id="cost1" onchange="contentCreate()" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">
                                        <option value="">Select</option>
                                        <option value="0">Paid </option>
                                        <option value="1">Free </option>
                                    </select>            
                                </div>
                            </div>
                            </div>
    
                            <div class="grid grid-cols-3 gap-6" style="display:none" id="ctypediv1">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="name" value="{{ __('Content type') }}" class="block text-sm font-medium text-gray-700"> Enter Price </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="price" id="ctype" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">            
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
   
                        </div> 

                            <div>
                                <label for="about" class="block text-sm font-medium text-gray-700"> Description</label>
                                <div class="mt-1">
                                <textarea id="about" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Eg. label name, year"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Brief description of your Content. URLs are hyperlinked.</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700"> Content File </label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save Content</button>
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
            </div>
        </div>
        
    </div>
   
</x-app-layout>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    function contentCreate(){
        if($("#cost1").val() == 0){
            $("#ctypediv1").show();
        }
        else {
            $("#ctypediv1").hide();
        }
    }
</script>
