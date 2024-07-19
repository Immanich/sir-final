<!-- resources/views/accounts/charge-list.blade.php -->
@if($charges->isEmpty() && $payments->isEmpty())
    <p id="no-charges-message">No charges or payments available. Add a new charge or payment:</p>
@else
    <div class="flex flex-col items-center">
        <h1 class="text-4xl font-bold mb-6">Billing Statement</h1>
        <div class="flex justify-center w-[900px] gap-10 mb-4">
            <div class="mr-4 w-[450px]">
                <center><h3 class="text-2xl">Charges</h3></center>
                <div class="flex gap-10 justify-between font-semibold text-xl mt-2">
                    <span class=" text-2xl">Title</span>
                    <span class=" text-2xl">Amount</span>
                </div>
                @foreach ($charges as $charge)
                    <div class="flex gap-10 justify-between">
                        <span class="text-xl">{{ $charge->title }}</span>
                        <span class="charge-amount text-xl">{{ number_format($charge->amount, 2) }}</span>
                    </div>
                @endforeach
                {{-- <hr> --}}
                <div class="mt-10 text-2xl flex justify-between font-semibold">Total Charges: <span class="">₱{{ number_format($totalCharges, 2) }}</span></div>
            </div>

            <div class="ml-4 w-[450px]">
                <center><h3 class="text-2xl">Payments</h3></center>
                <div class="flex justify-between font-semibold mt-2 text-xl">
                    <span class="text-2xl">Date/Time</span>
                    <span class="text-2xl">Amount</span>
                </div>
                @foreach ($payments as $payment)
                    <div class="flex gap-10 justify-between text-green-500">
                        <span class="text-xl">{{ $payment->date_time }}</span>
                        <span class="payment-amount text-xl">{{ $payment->amount }}</span>
                    </div>
                @endforeach
                <div class="mt-2 flex justify-between">Total Payments: <span>₱{{ number_format($totalPayments, 2) }}</span></div>
                <div class="mt-2 flex justify-between">Remaining Balance: ₱{{ number_format($totalAmount, 2) }}</div>
            </div>
        </div>
    </div>
@endif
