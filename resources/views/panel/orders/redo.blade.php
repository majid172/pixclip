    <div class="">
        <form method="post" action="{{ route('order.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <!-- ================= General ================= -->
            <div class="rounded-box shadow-base-300/10 bg-base-100 shadow-md p-4 my-4">
               
                <div class="mt-4">
                    <label class="label-text">Instruction <span class="text-warning">*</span></label>
                    <div class="mb-3" id="editor"></div>
                    <input type="hidden" name="instruction" id="instruction">
                    <p class="text-xs text-gray-400 mt-1">
                        Instruction will help the designer to edit your image accurately.
                    </p>
                </div>
            </div>


            <!-- ================= Upload Type ================= -->
            <div class="rounded-xl bg-white shadow-lg p-6 md:p-8 max-w-4xl mx-auto">

                <h3 class="text-xl font-bold mb-6 text-gray-800">Upload Type</h3>

                <!-- Two column layout -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">

                    <!-- Image Link Box -->
                    <div
                        class="border border-gray-200 rounded-xl p-6 text-center hover:shadow-md transition-shadow duration-300">
                        <p class="font-semibold text-sm text-gray-700">Image Link</p>
                        <p class="text-xs text-gray-400 mt-2">
                            Supports links like Dropbox, Google Drive, OneDrive, etc.
                        </p>
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
                        Redo Order
                    </button>
                </div>

            </div>

        </form>
    </div>

    @push('plugins')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>


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