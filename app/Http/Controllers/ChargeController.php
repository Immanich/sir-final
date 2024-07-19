<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Charge;
use Illuminate\Http\Request;

class ChargeController extends Controller
{
    public function store(Request $request, Account $account)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'title' => 'nullable|string|max:255',
        ]);

        $account->charges()->create($validated);

        // Fetch charges, payments, and calculate totals
        $charges = $account->charges;
        $payments = $account->payments;
        $totalCharges = $charges->sum('amount');
        $totalPayments = $payments->sum('amount');
        $totalAmount = $totalCharges - $totalPayments;

        return view('accounts.charge-list', compact('charges', 'payments', 'totalCharges', 'totalPayments', 'totalAmount'));
    }
}
