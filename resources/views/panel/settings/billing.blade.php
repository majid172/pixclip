@extends('panel.layouts.app')
@section('content')
<div class="flex flex-col gap-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Billing Address</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('billing.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Bill To -->
                    <div>
                        <label class="label label-text" for="bill_to">Bill To / Company Name</label>
                        <input type="text" class="input" id="bill_to" name="bill_to" value="{{ old('bill_to', $billing->bill_to) }}" required>
                        @error('bill_to') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="label label-text" for="billing_email">Billing Email</label>
                        <input type="email" class="input" id="billing_email" name="billing_email" value="{{ old('billing_email', $billing->billing_email) }}" required>
                        @error('billing_email') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="label label-text" for="billing_phone">Phone Number</label>
                        <input type="text" class="input" id="billing_phone" name="billing_phone" value="{{ old('billing_phone', $billing->billing_phone) }}" required>
                        @error('billing_phone') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Website -->
                    <div>
                        <label class="label label-text" for="website_url">Website URL</label>
                        <input type="url" class="input" id="website_url" name="website_url" value="{{ old('website_url', $billing->website_url) }}" placeholder="https://example.com">
                        @error('website_url') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                     <!-- VAT ID -->
                     <div>
                        <label class="label label-text" for="vat_id">VAT ID</label>
                        <input type="text" class="input" id="vat_id" name="vat_id" value="{{ old('vat_id', $billing->vat_id) }}">
                        @error('vat_id') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Country -->
                    <div>
                        <label class="label label-text" for="billing_country_id">Country</label>
                        <select class="select" id="billing_country_id" name="billing_country_id" required>
                            <option value="">Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ old('billing_country_id', $billing->billing_country_id) == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('billing_country_id') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                     <!-- Address -->
                     <div class="md:col-span-2">
                        <label class="label label-text" for="billing_address">Address Line</label>
                        <input type="text" class="input" id="billing_address" name="billing_address" value="{{ old('billing_address', $billing->billing_address) }}" required>
                        @error('billing_address') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- City -->
                    <div>
                        <label class="label label-text" for="billing_city">City</label>
                        <input type="text" class="input" id="billing_city" name="billing_city" value="{{ old('billing_city', $billing->billing_city) }}" required>
                        @error('billing_city') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- State -->
                    <div>
                        <label class="label label-text" for="billing_state">State / Province</label>
                        <input type="text" class="input" id="billing_state" name="billing_state" value="{{ old('billing_state', $billing->billing_state) }}" required>
                        @error('billing_state') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Post Code -->
                    <div>
                        <label class="label label-text" for="billing_post_code">Zip / Post Code</label>
                        <input type="text" class="input" id="billing_post_code" name="billing_post_code" value="{{ old('billing_post_code', $billing->billing_post_code) }}" required>
                        @error('billing_post_code') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                </div>

                <div class="card-footer flex justify-end mt-6">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
