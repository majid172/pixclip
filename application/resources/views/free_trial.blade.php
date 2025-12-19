@extends('layouts.app')
@section('content')
    @include('layouts.includes.breadcumb')
<section class="py-16 md:py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto">

        <!-- CARD WRAPPER -->
        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <!-- LEFT COLUMN: Form Fields -->
                <div class="lg:col-span-7 flex flex-col gap-5">

                    <!-- Row 1 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">First Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="First Name"
                                class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-rose-400 placeholder-gray-400 font-light">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Last Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Last Name"
                                class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-rose-400 placeholder-gray-400 font-light">
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Email <span class="text-red-500">*</span></label>
                            <input type="email" placeholder="alex@example.com"
                                class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-rose-400 placeholder-gray-400 font-light">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Phone <span class="text-red-500">*</span></label>
                            <div class="flex items-center w-full border border-gray-300 rounded px-3 py-2.5 focus-within:border-rose-400">
                                <div class="flex items-center gap-1 pr-3 border-r border-gray-200 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-3.5" viewBox="0 0 640 480">
                                        <path fill="#21468b" d="M0 0h640v480H0z" />
                                        <path fill="#fff" d="M0 0h640v320H0z" />
                                        <path fill="#ae1c28" d="M0 0h640v160H0z" />
                                    </svg>
                                    <i class="fa-solid fa-caret-down text-[10px] text-gray-500"></i>
                                </div>
                                <input type="text" placeholder="06 12345678"
                                    class="flex-1 ml-3 outline-none text-gray-600 placeholder-gray-400 font-light bg-transparent">
                            </div>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Company Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Example Inc."
                                class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-rose-400 placeholder-gray-400 font-light">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Website / Social Profile URL <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="https://www.yourwebsite.com"
                                class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-rose-400 placeholder-gray-400 font-light">
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Yearly Images Volume <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <select class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-700 appearance-none bg-white focus:outline-none focus:border-rose-400 cursor-pointer font-light">
                                    <option>Images edit per year?</option>
                                    <option>1-100</option>
                                    <option>100-1000</option>
                                    <option>1000+</option>
                                </select>
                                <i class="fa-solid fa-angle-down absolute right-3 top-3.5 text-xs text-gray-500 pointer-events-none"></i>
                            </div>
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Work Category <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <select class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-700 appearance-none bg-white focus:outline-none focus:border-rose-400 cursor-pointer font-light">
                                    <option>-- Work Category --</option>
                                    <option>E-commerce</option>
                                    <option>Photography</option>
                                    <option>Studio</option>
                                </select>
                                <i class="fa-solid fa-angle-down absolute right-3 top-3.5 text-xs text-gray-500 pointer-events-none"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Row 5 -->
                    <div>
                        <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Service <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Select Service"
                            class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-rose-400 placeholder-gray-500 font-light cursor-pointer">
                    </div>

                    <!-- Row 6 -->
                    <div>
                        <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Instruction <span class="text-red-500">*</span></label>
                        <textarea rows="5" placeholder="Hi there, I would like to ..."
                            class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-rose-400 placeholder-gray-400 font-light resize-none"></textarea>
                    </div>

                </div>

                <!-- RIGHT COLUMN: Upload Box -->
                <div class="lg:col-span-5 flex flex-col h-full">
                    <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Upload Images <span class="text-red-500">*</span></label>

                    <div class="flex-1 border-2 border-dashed border-dashed-custom rounded flex flex-col items-center justify-center p-6 text-center bg-white min-h-[350px] cursor-pointer hover:bg-rose-50/20 transition">
                        <h3 class="text-gray-600 font-bold text-lg mb-2">Drop files here or click to upload.</h3>
                        <p class="text-gray-500 text-sm mb-8 font-light">Max File Quantity: 5</p>
                        <p class="text-[11px] text-[#6200EE] max-w-xs leading-relaxed">
                            Supported File Type: PSD, JPG, PNG, PDF, TIF, CRW, CR2, CR3, DNG, NEF, RAW, RW2, ARW, HEIC, HEIF
                        </p>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <div class="mt-6">
                <div class="flex items-center mb-6">
                    <input id="terms" type="checkbox"
                        class="w-4 h-4 text-rose-600 border-gray-300 rounded focus:ring-rose-500 cursor-pointer">
                    <label for="terms" class="ml-2 text-gray-500 text-sm underline decoration-gray-400 cursor-pointer">
                        I agree to the Terms & Conditions
                    </label>
                </div>

                <button
                    class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold text-lg py-3 rounded shadow-sm transition flex items-center justify-center gap-2">
                    Upload Image First
                    <i class="fa-solid fa-chevron-right text-sm"></i>
                </button>
            </div>

        </div>
    </div>
</section>

@endsection
