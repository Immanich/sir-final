<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request, Account $account)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'date_time' => 'required|date',
        ]);

        $account->payments()->create($validated);

        // Fetch charges, payments, and calculate totals
        $charges = $account->charges;
        $payments = $account->payments;
        $totalCharges = $charges->sum('amount');
        $totalPayments = $payments->sum('amount');
        $totalAmount = $totalCharges - $totalPayments;

        return view('accounts.charge-list', compact('charges', 'payments', 'totalCharges', 'totalPayments', 'totalAmount'));
    }
}
