<div class="m-2 justify-end flex w-full justify-start">
    <button onclick="document.getElementById('add-charge-modal').classList.remove('hidden');" class="p-2 bg-green-400 hover:bg-green-500 duration-300  text-white rounded">Add Charge</button>
    <button onclick="document.getElementById('add-payment-modal').classList.remove('hidden');" class="p-2 bg-blue-500 hover:bg-blue-600 duration-300 text-white rounded ml-2">Add Payment</button>
</div>

<div class="p-4 m-2 rounded bg-gray-200 w-full flex flex-col">
    <div class="items-center">
        <div class="flex gap-7">
            <h3 class="text-2xl">{{ $account->student->first_name }} {{ $account->student->last_name }}, {{ $account->section }}</h3>
            {{-- <h3 class="text-2xl">{{ $account->remarks }} </h3> --}}
        </div>


        <div id="charges_list" class="flex flex-col gap-3 mt-4">
            @include('accounts.charge-list', ['charges' => $charges, 'totalAmount' => $totalAmount])
        </div>
        
    </div>
</div>

<div id="add-charge-modal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-gray-200 p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl mb-4">Add Charge</h2>
        <form action="{{ route('charges.store', $account->id) }}" method="POST" hx-post="{{ route('charges.store', $account->id) }}" hx-target="#charges_list" hx-swap="innerHTML" onsubmit="document.getElementById('add-charge-modal').classList.add('hidden')">
            @csrf
            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                <input type="number" name="amount" id="amount" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
            </div>
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 border border-gray-300 rounded w-full">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="mr-4 p-2 bg-blue-500 text-white rounded">Add</button>
                <button type="button" onclick="document.getElementById('add-charge-modal').classList.add('hidden');" class="p-2 bg-red-500 text-white rounded">Close</button>
            </div>
        </form>
    </div>
</div>


<div id="add-payment-modal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-gray-200 p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl mb-4">Add Payment</h2>
        <form action="{{ route('payments.store', $account->id) }}" method="POST" hx-post="{{ route('payments.store', $account->id) }}" hx-target="#charges_list" hx-swap="innerHTML" onsubmit="document.getElementById('add-payment-modal').classList.add('hidden')">
            @csrf
            <div class="mb-4">
                <label for="payment_amount" class="block text-sm font-medium text-gray-700">Amount</label>
                <input type="number" name="amount" id="payment_amount" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
            </div>
            <div class="mb-4">
                <label for="payment_date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="datetime-local" name="date_time" id="payment_date" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="mr-4 p-2 bg-blue-500 text-white rounded">Add</button>
                <button type="button" onclick="document.getElementById('add-payment-modal').classList.add('hidden');" class="p-2 bg-red-500 text-white rounded">Close</button>
            </div>
        </form>
    </div>
</div>

