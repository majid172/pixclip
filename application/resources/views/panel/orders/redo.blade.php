<<<<<<< HEAD
    <div class="">
        <form method="post" action="{{ route('order.redo.store', $order->id) }}" enctype="multipart/form-data"
            class="space-y-6">
=======
<div class="">
        @if($order->status == 'Completed' || $order->status == 'Redo')
        <form method="post" action="{{ route('order.redo.store', $order->id) }}" enctype="multipart/form-data" class="space-y-6">
>>>>>>> f4487809c6336aa094a5037239790f3f6100af79
            @csrf
            <!-- ================= General ================= -->
            <div class="rounded-box shadow-base-300/10 bg-base-100 shadow-md p-4 my-4">

                <div class="mt-4">
<<<<<<< HEAD
                    <label class="label-text">Instruction <span class="text-warning">*</span></label>
                    <div class="mb-3" id="editor" style="height: 150px;"></div>
                    <input type="hidden" name="instruction" id="instruction">
                    <p class="text-xs text-gray-400 mt-1 text-red-500">
                        Instruction will help the designer to edit your image accurately.
=======
                    <label class="label-text">Redo Instruction <span class="text-warning">*</span></label>
                    <div class="mb-3" id="redo-editor" style="height: 200px;">{!! $order->redo_instruction !!}</div>
                    <input type="hidden" name="instruction" id="redo_instruction_input">
                    <p class="text-xs text-gray-400 mt-1">
                        Please provide detailed instructions for the redo.
>>>>>>> f4487809c6336aa094a5037239790f3f6100af79
                    </p>
                </div>
            </div>


            <!-- ================= Upload Type ================= -->
<<<<<<< HEAD
            <div class="rounded-box bg-base-100 shadow p-4 md:p-6">
                <h3 class="text-xl font-bold mb-6 text-gray-800">Upload Type</h3>
=======
            <div class="rounded-xl bg-white shadow-lg p-6 md:p-8 max-w-4xl mx-auto">

                <h3 class="text-xl font-bold mb-6 text-gray-800">Upload Redo Files</h3>

>>>>>>> f4487809c6336aa094a5037239790f3f6100af79
                <!-- Two column layout -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                    <!-- Image Link Box -->
<<<<<<< HEAD
                    <div class="border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow duration-300">
                        <label class="font-semibold text-sm text-gray-700 block mb-2">Image Link (Optional) </label>
                        <div id="image-link-wrapper">
                            <div class="flex items-center gap-2 mb-2">
                                <input type="text" name="redo_image_links[]"
                                    class="input input-bordered w-full text-sm" placeholder="https://dropbox.com/..." />
                                <button type="button"
                                    class="btn btn-square btn-sm btn-ghost text-red-500 delete-link hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <button type="button" id="add-link-btn"
                            class="btn btn-sm btn-outline btn-primary mt-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            Add Another Link
                        </button>
=======
                    <div
                        class="border border-gray-200 rounded-xl p-6 text-center hover:shadow-md transition-shadow duration-300">
                        <p class="font-semibold text-sm text-gray-700">Image Link</p>
                        <p class="text-xs text-gray-400 mt-2">
                             (Optional) Supports links like Dropbox, Google Drive, OneDrive, etc.
                        </p>
>>>>>>> f4487809c6336aa094a5037239790f3f6100af79
                    </div>

                    <!-- File Upload -->
                    <div class="w-full max-w-3xl mx-auto">

                        <div class="rounded-xl bg-white p-6">

                            <div class="flex items-center w-full">
                                <label class="cursor-pointer shrink-0">
                                    <input type="file" class="input w-full" name="upload_files[]" multiple />
                                </label>

                            </div>
                            <p class="text-xs text-gray-500 mt-2">
<<<<<<< HEAD
                                It will allow just for few small size sample images. If you have more images please
                                provide
                                image down link
=======
                                Upload sample images if needed.
>>>>>>> f4487809c6336aa094a5037239790f3f6100af79
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

<<<<<<< HEAD
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

            document.querySelector('form').addEventListener('submit', function() {
                document.getElementById('instruction').value = quill.root.innerHTML;
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
=======
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
>>>>>>> f4487809c6336aa094a5037239790f3f6100af79
