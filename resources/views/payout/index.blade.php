

</x-app-layout>
    <div>
        <form id="payoutForm" action="{{ route('content.index') }}" method="POST">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email-address" required />
                </div>
                <div class="form-group">
                    <label for="first-name">Full Name</label>
                    <input type="text" id="first-name" />
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="tel" id="amount" required />
                </div>
                <div class="form-group">
                    <label for="last-name">Account Number</label>
                    <input type="text" id="last-name" />
                </div>
                {{-- <div class="form-submit"> --}}
                {{-- <button type="submit" onclick="payWithPaystack()"> Pay </button> --}}
        </form>
    </div>

</x-app-layout>

