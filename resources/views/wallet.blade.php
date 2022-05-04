<x-app-layout>
  <div>    
    <div class="p-2">
      <div class="flex items-center flex-wrap ">
        
        <a href="content/create">Wallet</a>
      </div>
    </div>
   
    <div class="p-4 md:w-1/3">
      <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
      <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1618172193622-ae2d025f4032?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1064&q=80" alt="blog"> -->
      <div class="p-6">
          <h1 class="title-font text-lg font-medium text-gray-600 mb-3"></h1>
          <p class="leading-relaxed mb-3">Balance</p> 
          {{Auth::user()->wallet ? Auth::user()->wallet->amount : 0}}
      </div>
      </div>
      <div class="flex items-center flex-wrap ">
        <a href="payment.index/{{$content->id}}" class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Payout</a>
      </div>
    </div>
  </div>   
</x-app-layout>

