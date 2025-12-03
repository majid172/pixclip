@extends('panel.layouts.app')
@section('content')
    <div class="card mb-6">
        <div class="card-body gap-6">
            <div class="border-base-content/20 flex items-end gap-6 border-b pb-4">
                <div class="avatar">
                    <div class="size-25 rounded-field">
                        <img src="../assets/img/avatars/2.png" alt="avatar" />
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-primary mb-4 me-4">
                        <i class="icon-[tabler--upload] block sm:hidden"></i>
                        <span class="hidden sm:block">Upload new photo</span>
                    </button>
                    <button type="button" class="btn btn-soft btn-secondary mb-4">
                        <i class="icon-[tabler--rotate-clockwise] block sm:hidden"></i>
                        <span class="hidden sm:block">Reset</span>
                    </button>
                    <p class="text-sm">Allowed JPG, GIF or PNG. Max size of 800K</p>
                </div>
            </div>
            <form class="space-y-6" action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="label-text" for="name">Name</label>
                        <input type="text" id="name" name="name" class="input" placeholder="John"
                            value="{{ $user->name }}" />
                    </div>

                    <div>
                        <label class="label-text" for="email">E-mail</label>
                        <input type="email" id="email" name="email" class="input"
                            placeholder="john.doe@example.com" value="{{ $user->email }}" readonly />
                    </div>

                    <div>
                        <label class="label-text" for="number">Phone Number</label>
                        <input type="text" id="number" name="number" class="input" placeholder="202 555 0111" />
                    </div>
                    <div>
                        <label class="label-text" for="address">Address</label>
                        <input type="text" id="address" name="address" class="input" placeholder="Address" />
                    </div>
                    <div>
                        <label class="label-text" for="state">State</label>
                        <input type="state" id="state" name="state" class="input" placeholder="California" />
                    </div>
                    <div>
                        <label class="label-text" for="zipCode">Zip Code</label>
                        <input type="text" id="zipCode" name="zipCode" class="input" placeholder="231465"
                            maxlength="6" />
                    </div>
                    <div>
                        <label class="label-text" for="coutry">Country</label>
                        <div class="max-w-full">
                            <select
                                data-select='{
    "placeholder": "Select",
    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
    "toggleClasses": "advance-select-toggle select-disabled:pointer-events-none select-disabled:opacity-40",
    "hasSearch": true,
    "dropdownClasses": "advance-select-menu max-h-52 pt-0 overflow-y-auto",
    "optionClasses": "advance-select-option selected:select-active",
    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"icon-[tabler--check] shrink-0 size-4 text-primary hidden selected:block \"></span></div>",
    "extraMarkup": "<span class=\"icon-[tabler--chevron-down] shrink-0 size-4 text-base-content absolute top-1/2 end-3 -translate-y-1/2 \"></span>"
    }'
                                class="hidden">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="label-text" for="language">Status</label>
                        <div class="max-w-full">
                            <select
                                data-select='{
    "placeholder": "Select Status",
    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
    "toggleClasses": "advance-select-toggle select-disabled:pointer-events-none select-disabled:opacity-40",
    "hasSearch": true,
    "dropdownClasses": "advance-select-menu max-h-52 pt-0 overflow-y-auto",
    "optionClasses": "advance-select-option selected:select-active",
    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"icon-[tabler--check] shrink-0 size-4 text-primary hidden selected:block \"></span></div>",
    "extraMarkup": "<span class=\"icon-[tabler--chevron-down] shrink-0 size-4 text-base-content absolute top-1/2 end-3 -translate-y-1/2 \"></span>"
    }'
                                class="hidden">
                                <option value="">Select Status</option>
                                <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Inactive</option>
                                <option value="2">Ban</option>

                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="label-text" for="timeZones">Timezone</label>
                        <div class="max-w-full">
                            <select
                                data-select='{
    "placeholder": "Select Timezone",
    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
    "toggleClasses": "advance-select-toggle select-disabled:pointer-events-none select-disabled:opacity-40",
    "hasSearch": true,
    "dropdownClasses": "advance-select-menu max-h-52 pt-0 overflow-y-auto",
    "optionClasses": "advance-select-option selected:select-active",
    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"icon-[tabler--check] shrink-0 size-4 text-primary hidden selected:block \"></span></div>",
    "extraMarkup": "<span class=\"icon-[tabler--chevron-down] shrink-0 size-4 text-base-content absolute top-1/2 end-3 -translate-y-1/2 \"></span>"
    }'
                                class="hidden">
                                <option value="">Select Timezone</option>
                                <option value="-12">(GMT-12:00) International Date Line West</option>
                                <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                <option value="-10">(GMT-10:00) Hawaii</option>
                                <option value="-9">(GMT-09:00) Alaska</option>
                                <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                <option value="-7">(GMT-07:00) Arizona</option>
                                <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                <option value="-6">(GMT-06:00) Central America</option>
                                <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                <option value="-6">(GMT-06:00) Saskatchewan</option>
                                <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                <option value="-5">(GMT-05:00) Indiana (East)</option>
                                <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="label-text" for="currency">Currency</label>
                        <div class="max-w-full">
                            <select
                                data-select='{
    "placeholder": "Select Timezone",
    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
    "toggleClasses": "advance-select-toggle select-disabled:pointer-events-none select-disabled:opacity-40",
    "hasSearch": true,
    "dropdownClasses": "advance-select-menu max-h-52 pt-0 overflow-y-auto",
    "optionClasses": "advance-select-option selected:select-active",
    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"icon-[tabler--check] shrink-0 size-4 text-primary hidden selected:block \"></span></div>",
    "extraMarkup": "<span class=\"icon-[tabler--chevron-down] shrink-0 size-4 text-base-content absolute top-1/2 end-3 -translate-y-1/2 \"></span>"
    }'
                                class="hidden">
                                <option value="">Select Currency</option>
                                <option value="usd">USD</option>
                                <option value="euro">Euro</option>
                                <option value="pound">Pound</option>
                                <option value="bitcoin">Bitcoin</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="flex gap-3">
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                    <button class="btn btn-soft btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="text-base-content text-lg font-medium">Delete Account</h5>
        </div>
        <div class="card-body gap-8">
            <div class="alert alert-soft alert-warning mb-1 border-0" role="alert">
                <h5 class="text-lg font-medium">Are you sure you want to delete your account?</h5>
                <p>Once you delete your account, there is no going back. Please be certain.</p>
            </div>
            <div class="ms-2 flex items-center gap-1">
                <input type="checkbox" class="checkbox checkbox-primary checkbox-sm" id="checkboxPrimary" />
                <label class="label-text text-base" for="checkboxPrimary">I confirm my account deactivation</label>
            </div>
            <div class="card-actions">
                <button class="btn btn-error">Deactivate Account</button>
            </div>
        </div>
    </div>
@endsection
