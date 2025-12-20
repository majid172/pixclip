@extends('layouts.app')
@section('content')
    @include('layouts.includes.breadcumb')
    <section class="py-16 md:py-12 bg-gray-50">
        <div class="max-w-6xl mx-auto">

            <!-- CARD WRAPPER -->
            <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10">

                <form action="{{ route('free.trial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                        <!-- LEFT COLUMN: Form Fields -->
                        <div class="lg:col-span-7 flex flex-col gap-5">

                            <!-- Row 1 -->
                            @if (session('success'))
                                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                    role="alert">
                                    <strong class="font-bold">Success!</strong>
                                    <span class="block sm:inline">{{ session('success') }}</span>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">First Name <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="first_name" placeholder="First Name" required
                                        class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-blue-900 placeholder-gray-400 font-light">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Last Name <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="last_name" placeholder="Last Name" required
                                        class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-blue-900 placeholder-gray-400 font-light">
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Email <span
                                            class="text-red-500">*</span></label>
                                    <input type="email" name="email" placeholder="alex@example.com" required
                                        class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-blue-900 placeholder-gray-400 font-light">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Phone <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="phone" placeholder="Enter your phone number" required
                                        class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-blue-900 placeholder-gray-400 font-light">
                                </div>
                            </div>

                            <!-- Row 3 -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Company Name
                                    </label>
                                    <input type="text" name="company_name" placeholder="Example Inc."
                                        class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-blue-900 placeholder-gray-400 font-light">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Website / Social
                                        Profile URL </label>
                                    <input type="text" name="website" placeholder="https://www.yourwebsite.com"
                                        class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-blue-900 placeholder-gray-400 font-light">
                                </div>
                            </div>


                            <!-- Row 5 -->
                            <div>
                                <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Service <span
                                        class="text-red-500">*</span></label>
                                <select name="service"
                                    class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-blue-900 placeholder-gray-500 font-light cursor-pointer">
                                    @foreach ($pathService as $item)
                                        <option value="{{ $item->id }}">{{ $item->service_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Row 6 -->
                            <div>
                                <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Instruction <span
                                        class="text-red-500">*</span></label>
                                <textarea rows="5" name="instruction" placeholder="Hi there, I would like to ..." required
                                    class="w-full border border-gray-300 rounded px-3 py-2.5 text-gray-600 focus:outline-none focus:border-blue-900 placeholder-gray-400 font-light resize-none"></textarea>
                            </div>

                        </div>

                        <!-- RIGHT COLUMN: Upload Box -->
                        <div class="lg:col-span-5 flex flex-col h-full">
                            <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1">Upload Images <span
                                    class="text-red-500">*</span></label>

                            <div
                                class="flex-1 border-2 border-dashed border-dashed-custom rounded p-6 bg-white min-h-[350px] cursor-pointer hover:bg-blue-90/20 transition relative">

                                <input type="file" name="upload_files[]" id="upload_files" multiple
                                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                    accept=".jpg,.jpeg,.png,.heic,.heif">

                                <!-- Upload Text -->
                                <div id="uploadText" class="flex flex-col items-center justify-center h-full text-center">
                                    <h3 class="text-gray-600 font-bold text-lg mb-2">
                                        Drop files here or click to upload.
                                    </h3>
                                    <p class="text-gray-500 text-sm mb-4 font-light">
                                        Max File Quantity: 5
                                    </p>
                                </div>

                                <!-- Preview -->
                                <div id="preview" class="grid grid-cols-2 gap-3 hidden"></div>
                            </div>


                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="mt-6">
                        <div class="flex items-center mb-6">
                            <input id="terms" type="checkbox" required
                                class="w-4 h-4 text-blue-900 border-gray-300 rounded focus:ring-blue-900 cursor-pointer">
                            <label for="terms"
                                class="ml-2 text-gray-500 text-sm underline decoration-gray-400 cursor-pointer">
                                I agree to the Terms & Conditions
                            </label>
                        </div>

                        <button type="submit"
                            class="w-25 bg-blue-900 hover:bg-blue-800 text-white font-semibold text-md p-2 rounded shadow-sm transition flex items-center justify-center gap-2">
                            Upload
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>

@endsection
@push('js')
    <script>
        const input = document.getElementById('upload_files');
        const preview = document.getElementById('preview');
        const uploadText = document.getElementById('uploadText');

        input.addEventListener('change', function() {
            preview.innerHTML = '';

            const files = Array.from(this.files).slice(0, 5);

            if (files.length > 0) {
                uploadText.classList.add('hidden');
                preview.classList.remove('hidden');
            }

            files.forEach(file => {
                if (!file.type.startsWith('image/')) return;

                const reader = new FileReader();

                reader.onload = e => {
                    const div = document.createElement('div');
                    div.className = 'relative';

                    div.innerHTML = `
                    <img src="${e.target.result}"
                        class="w-full h-32 object-cover rounded-lg border shadow-sm">
                `;

                    preview.appendChild(div);
                };

                reader.readAsDataURL(file);
            });
        });
    </script>
@endpush
