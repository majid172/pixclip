<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Country;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        $billing = BillingAddress::where('user_id', auth()->id())->first();
       
        $countries = Country::where('status', 'Active')->get();
        return view('panel.settings.billing', compact('billing', 'countries'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'bill_to'           => 'required|string|max:255',
            'billing_email'     => 'required|email|max:255',
            'billing_phone'     => 'required|string|max:20',
            'billing_address'   => 'required|string|max:255',
            'billing_city'      => 'required|string|max:255',
            'billing_state'     => 'required|string|max:255',
            'billing_country_id'=> 'required|exists:countries,id',
            'billing_post_code' => 'required|string|max:20',
            'vat_id'            => 'nullable|string|max:50',
            'website_url'       => 'nullable|url|max:255',
        ]);

        BillingAddress::updateOrCreate(
            ['user_id' => auth()->id()],
            $request->except(['_token', '_method'])
        );

        return back()->with('success', 'Billing address updated successfully.');
    }
}
