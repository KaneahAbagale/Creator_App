

</x-app-layout>
    <div>
        <!-- component -->
        <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css'</style>
        <style>


        @media not print {
        .form-radio::-ms-check {
            border-width: 1px;
            color: transparent;
            background: inherit;
            border-color: inherit;
            border-radius: inherit;
        }
        }

        .form-radio:focus {
        outline: none;
        }

        .form-select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23a0aec0'%3e%3cpath d='M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z'/%3e%3c/svg%3e");
        -webkit-appearance: none;
            -moz-appearance: none;
                appearance: none;
        -webkit-print-color-adjust: exact;
                color-adjust: exact;
        background-repeat: no-repeat;
        padding-top: 0.5rem;
        padding-right: 2.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        background-position: right 0.5rem center;
        background-size: 1.5em 1.5em;
        }

        .form-select::-ms-expand {
        color: #a0aec0;
        border: none;
        }

        @media not print {
        .form-select::-ms-expand {
            display: none;
        }
        }

        @media print and (-ms-high-contrast: active), print and (-ms-high-contrast: none) {
        .form-select {
            padding-right: 0.75rem;
        }
        }
        </style>

        <form>
            <div class="min-w-screen min-h-screen bg-gray-50 py-5" method="POST"  accept-charset="UTF-8" class="form-horizontal" role="form">
                <div class="px-5">
                    <div class="mb-2">
                        <a href="#" class="focus:outline-none hover:underline text-gray-500 text-sm"><i class="mdi mdi-arrow-left text-gray-400"></i>Back</a>
                    </div>
                    <div class="mb-2">
                        <h1 class="text-3xl md:text-5xl font-bold text-gray-600">Checkout.</h1>
                    </div>
                </div>
                <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-10 text-gray-800">
                    <div class="w-full">
                        <div class="-mx-3 md:flex items-start">
                            <div class="px-3 md:w-7/12 lg:pr-10">
                                
                                <div class="mb-6 pb-6 border-b border-gray-200 text-gray-800">
                                    <div class="w-full flex mb-3 items-center">
                                        <div class="flex-grow">
                                            <span class="text-gray-600">Subtotal</span>
                                        </div>
                                        <div class="pl-3">
                                            <span class="font-semibold">$190.91</span>
                                        </div>
                                    </div>
                                    <div class="w-full flex items-center">
                                        <div class="flex-grow">
                                            <span class="text-gray-600">Taxes (GST)</span>
                                        </div>
                                        <div class="pl-3">
                                            <span class="font-semibold">$19.09</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-6 pb-6 border-b border-gray-200 md:border-none text-gray-800 text-xl">
                                    <div class="w-full flex items-center">
                                        <div class="flex-grow">
                                            <span class="text-gray-600">Total</span>
                                        </div>
                                        <div class="pl-3">
                                            <span class="font-semibold text-gray-400 text-sm">AUD</span> <span class="font-semibold">$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 md:w-5/12">
                            
                                <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 text-gray-800 font-light mb-6">
                                    <div class="w-full p-3 border-b border-gray-200">
                                    <div class="">
                                            <div class="mb-5">
                                                <label for="type1" class="flex items-center cursor-pointer">
                                                    <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-6 ml-3">
                                                </label>
                                            </div>

                                            <div class="grid grid-cols-3 gap-6">
                                                <label for="type2" class="flex items-center cursor-pointer">
                                                    <img src="https://commons.wikimedia.org/wiki/File:Paystack_Logo.png#/media/File:Paystack_Logo.png" width="80" class="ml-3"/>
                                                </label>
                                            </div> 
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <div class="col-span-3 sm:col-span-2">
                                                    <label for="name" value="{{ __('Checkout type') }}" class="block text-sm font-medium text-gray-700"> Payment type </label>
                                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                        <select name="checkout" id="checkout" onchange="checkoutIndex()" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">
                                                            <option value="">Select</option>
                                                            <option value="0">Card</option>
                                                            <option value="1">Paystack</option>
                                                        </select>            
                                                    </div>
                                                </div>
                                                </div>
                        
                                                <div class="block text-sm font-medium text-gray-700" style="display:none" id="ctypediv1">
                                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1"></label>
                                                    <div class="col-span-3 sm:col-span-2">
                                                        <label for="name" value="{{ __('Content type') }}" class="block text-sm font-medium text-gray-700">Name on Card</label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input type="text" name="ctype" id="ctype" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="john doe" type="text"> 
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                                    <!--<div>
                                                        <button class= "btn btn-success btn-lg btn-block block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-2 font-semibold" type="submit"><i class="fa fa-plus-circle fa-lg"></i> PAY NOW</button>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            
    </div>

</x-app-layout>

