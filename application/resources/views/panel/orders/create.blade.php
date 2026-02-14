@extends('panel.layouts.app')
@section('content')
    <div class="">
        <form method="post" action="{{ route('order.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <!-- ================= General ================= -->
            
            {{-- @if ($errors->any())
                <div class="alert alert-error mb-4">
                    <div class="flex flex-col">
                        <span class="font-bold">Please check the following errors:</span>
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif --}}

            <div class="rounded-box shadow-base-300/10 bg-base-100 shadow-md p-4 my-4">
                <h3 class="text-primary font-semibold mb-4">General</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="label-text">Job Title <span class="text-warning">*</span> </label>
                        <input type="text" class="input w-full" name="title" placeholder="Job Title"
                            value="{{ old('title') }}">
                    </div>

                    <div>
                        <label class="label-text">Image Quantity <span class="text-warning">*</span></label>
                        <input type="number" class="input w-full" name="image_quantity" placeholder="Image Quantity"
                            value="{{ old('image_quantity') }}" required>
                    </div>
                </div>

                <div class="mt-4">
                    <label class="label-text">Instruction <span class="text-warning">*</span></label>
                    <div class="mb-3" id="editor"></div>
                    <input type="hidden" name="instruction" id="instruction">
                    <p class="text-xs text-gray-400 mt-1">
                        Instruction will help the designer to edit your image accurately.
                    </p>
                </div>
            </div>

            <!-- ================= Complexity & Extensions ================= -->
            <div class="flex flex-col md:flex-row gap-4 w-full text-sm">

                <!-- Card 1: Image Complexity -->
                <div class="flex-1 rounded-box bg-base-100 shadow p-4 ">
                    <h3 class="font-semibold mb-3">Image Complexity</h3>
                    <div class="flex flex-wrap gap-4">
                        <label class="flex items-center gap-1 cursor-pointer">
                            <input type="radio" name="complexity" value="simple" checked class="radio radio-primary radio-sm">
                            Simple
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="complexity" value="medium" class="radio radio-primary radio-sm">
                            Medium
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="complexity" value="complex" class="radio radio-primary radio-sm">
                            Complex
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="complexity" value="extreme" class="radio radio-primary radio-sm">
                            Extreme
                        </label>
                    </div>
                </div>

                <!-- Card 2: Return File Extensions -->
                <div class="flex-1 rounded-box bg-base-100 shadow p-4 ">
                    <h3 class="font-semibold mb-3">Return File Extensions</h3>
                    <div class="flex flex-wrap gap-4">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" checked class="checkbox checkbox-primary checkbox-sm"
                                name="return_file_extension[]" value="jpg">
                            JPG
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="checkbox checkbox-primary checkbox-sm"
                                name="return_file_extension[]" value="png">
                            PNG
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="checkbox checkbox-primary checkbox-sm"
                                name="return_file_extension[]" value="pdf">
                            PDF
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="checkbox checkbox-primary checkbox-sm"
                                name="return_file_extension[]" value="psd">
                            PSD
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="checkbox checkbox-primary checkbox-sm"
                                name="return_file_extension[]" value="tif">
                            TIF
                        </label>
                    </div>
                </div>

                <!-- Card 3: Turn Around -->
                <div class="flex-1 rounded-box bg-base-100 shadow p-4 ">
                    <h3 class="font-semibold mb-3">@lang('Turn Around')</h3>
                    <div class="flex flex-wrap gap-4">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <!-- Changed name="complexity" to name="turnaround" to avoid conflict -->
                            <input type="radio" name="turnaround"  value="48" checked class="radio radio-primary radio-sm text-sm">
                            48 Hours
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="turnaround" value="72" class="radio radio-primary radio-sm">
                            72 Hours
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="turnaround" value="999" class="radio radio-primary radio-sm">
                            Flexible
                        </label>
                    </div>
                </div>

            </div>

            <!-- ================= Required Services ================= -->
            <div class="rounded-box bg-base-100 shadow p-4 text-sm">
                <h3 class="font-semibold mb-4">Required Services</h3>

                <div class="flex flex-wrap gap-8">

                    @foreach ($pathservices as $key=>$item)
                        <label class="flex gap-3 cursor-pointer">
                            <input type="checkbox" name="service_id[]" id="service_id"  value="{{$item->id}}" class="checkbox checkbox-primary mt-1 checkbox-sm ">
                            <div>
                                <p class="font-medium">{{ $item->service_name }}</p>
                                <p class="text-xs text-gray-400">Starting from ${{ $item->starting_price }}</p>
                            </div>
                        </label>
                    @endforeach


                </div>

            </div>

            <!-- ================= Upload Type ================= -->
            <div class="rounded-xl bg-white shadow-lg p-6 md:p-8 max-w-4xl">

                <h3 class="text-xl font-bold mb-6 text-gray-800">Upload Type</h3>

                <!-- Two column layout -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">

                    <!-- Image Link Box -->
                    <!-- Dynamic Image Link Box -->
                    <div class="border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow duration-300">
                        <label class="font-semibold text-sm text-gray-700 block mb-2">Image Link (Optional) </label>
                        <div id="image-link-wrapper">
                            <div class="flex items-center gap-2 mb-2">
                                <input type="text" name="image_links[]" class="input input-bordered w-full text-sm" placeholder="https://dropbox.com/..." />
                                <button type="button" class="btn btn-square btn-sm btn-ghost text-red-500 delete-link hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                </button>
                            </div>
                        </div>
                        
                        <button type="button" id="add-link-btn" class="btn btn-sm btn-outline btn-primary mt-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                            Add Another Link
                        </button>
                    </div>

                    <!-- File Upload -->
                    <div class="w-full max-w-3xl mx-auto">

                        <div class="rounded-xl bg-white p-6">

                            <div class="flex items-center w-full">
                                <label class="cursor-pointer shrink-0">
                                    <input type="file" class="input w-full" name="upload_files[]" multiple/>
                                </label>

                            </div>
                            <p class="text-xs text-gray-500 mt-2">
                                It will allow just for few small size sample images. If you have more images please provide
                                image down link
                            </p>

                        </div>
                    </div>

                </div>

                <!-- Submit -->
                <div class="flex justify-end mt-10">
                    <button class="btn btn-primary text-white font-semibold px-6 py-2 rounded-lg shadow">
                        Place Order
                    </button>
                </div>

            </div>

        </form>
    </div>
@endsection

@push('plugins')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    {{--
    <script src="{{ asset('/assets/plugins/js/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea#basic-example',
            height: 500,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount',
                /* Premium plugins for demo purposes only */
                'mediaembed',
            ],
            toolbar: 'undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });
    </script> --}}

    <script>
        const toolbarOptions = [
            [{
                'font': []
            }], // Font family
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }], // Headers
            ['bold', 'italic', 'underline', 'strike'], // Text formatting
            [{
                'color': []
            }, {
                'background': []
            }], // Text and background colors
            [{
                'script': 'sub'
            }, {
                'script': 'super'
            }], // Subscript/superscript
            [{
                'header': 1
            }, {
                'header': 2
            }], // Custom headers
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }], // Lists
            [{
                'indent': '-1'
            }, {
                'indent': '+1'
            }], // Indent
            [{
                'align': []
            }], // Alignment
            ['link', 'image', 'video'], // Links, images, videos
            ['clean'] // Remove formatting
        ];

        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions
            }
        });
    </script>
@endpush

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const wrapper = document.getElementById('image-link-wrapper');
        const addBtn = document.getElementById('add-link-btn');

        // Function to update delete button visibility
        function updateDeleteButtons() {
            const groups = wrapper.querySelectorAll('.flex.items-center');
            groups.forEach(group => {
                const deleteBtn = group.querySelector('.delete-link');
                if (groups.length > 1) {
                    deleteBtn.classList.remove('hidden');
                } else {
                    deleteBtn.classList.add('hidden');
                }
            });
        }

        // Add new link field
        addBtn.addEventListener('click', function() {
            const template = wrapper.firstElementChild.cloneNode(true);
            const input = template.querySelector('input');
            input.value = ''; // Clear value
            wrapper.appendChild(template);
            updateDeleteButtons();
        });

        // Remove link field
        wrapper.addEventListener('click', function(e) {
            if (e.target.closest('.delete-link')) {
                const row = e.target.closest('.flex.items-center');
                if (wrapper.children.length > 1) {
                    row.remove();
                    updateDeleteButtons();
                }
            }
        });
    });
</script>
@endpush
