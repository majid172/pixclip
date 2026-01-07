<div class="">
        @if($order->status == 'Completed' || $order->status == 'Redo')
        <form method="post" action="{{ route('order.redo.store', $order->id) }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <!-- ================= General ================= -->
            <div class="rounded-box shadow-base-300/10 bg-base-100 shadow-md p-4 my-4">
               
                <div class="mt-4">
                    <label class="label-text">Redo Instruction <span class="text-warning">*</span></label>
                    <div class="mb-3" id="redo-editor" style="height: 200px;">{!! $order->redo_instruction !!}</div>
                    <input type="hidden" name="instruction" id="redo_instruction_input">
                    <p class="text-xs text-gray-400 mt-1">
                        Please provide detailed instructions for the redo.
                    </p>
                </div>
            </div>


            <!-- ================= Upload Type ================= -->
            <div class="rounded-xl bg-white shadow-lg p-6 md:p-8 max-w-4xl mx-auto">

                <h3 class="text-xl font-bold mb-6 text-gray-800">Upload Redo Files</h3>

                <!-- Two column layout -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">

                    <!-- Image Link Box -->
                    <div
                        class="border border-gray-200 rounded-xl p-6 text-center hover:shadow-md transition-shadow duration-300">
                        <p class="font-semibold text-sm text-gray-700">Image Link</p>
                        <p class="text-xs text-gray-400 mt-2">
                             (Optional) Supports links like Dropbox, Google Drive, OneDrive, etc.
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
                                Upload sample images if needed.
                            </p>

                        </div>
                    </div>

                </div>

                <!-- Submit -->
                <div class="flex justify-end mt-10">
                    <button type="submit" class="btn btn-primary text-white font-semibold px-6 py-2 rounded-lg shadow">
                        Submit Redo Request
                    </button>
                </div>

            </div>

        </form>
        @else
        <div class="alert alert-info">
            <span class="icon-[tabler--info-circle] size-6"></span>
            <span>You can only request a redo for completed orders. Current status: <strong>{{ $order->status }}</strong></span>
        </div>
        @endif
    </div>

    @push('js')
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

        const quill = new Quill('#redo-editor', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions
            }
        });
    </script>
    <!-- <script>
        $(document).ready(function() {
            const redoToolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                ['clean']
            ];

            const redoQuill = new Quill('#redo-editor', {
                theme: 'snow',
                modules: {
                    toolbar: redoToolbarOptions
                }
            });

            $('form').on('submit', function() {
                $('#redo_instruction_input').val(redoQuill.root.innerHTML);
            });
        });
    </script> -->
    @endpush