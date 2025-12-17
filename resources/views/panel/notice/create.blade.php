@extends('panel.layouts.app')
@section('content')
    <div class="card mb-6">
        <div class="card-body gap-6">
            <form class="space-y-6" action="{{ route('notice.store') }}" method="post">

                @csrf
                @method('POST')

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="label-text" for="name">Name</label>
                        <input type="text" id="name" name="title" class="input" placeholder="John"
                            value="" />
                    </div>

                    <div>
                        <label class="label-text" for="date">Publish Date</label>
                       <input type="date" id="date" name="publish_date" class="input" placeholder="John"
                            value="" />
                    </div>
                    <div>
                        <label class="label-text" for="status">Status</label>
                        <select type="status" id="status" name="status" class="input" placeholder="California">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>


                <div>
                    <label class="label-text" for="description">Description</label>
                    <div id="editor" style="height: 200px;"></div>
                    <textarea name="description" id="description" class="hidden"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex gap-3">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('notice.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    @push('plugins')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <script>
        const toolbarOptions = [
            [{ 'font': [] }],
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'script': 'sub' }, { 'script': 'super' }],
            [{ 'header': 1 }, { 'header': 2 }],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            [{ 'indent': '-1' }, { 'indent': '+1' }],
            [{ 'align': [] }],
            ['link', 'image', 'video'],
            ['clean']
        ];

        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions
            }
        });

        // Sync content to hidden textarea on submit
        const form = document.querySelector('form');
        form.addEventListener('submit', function() {
            document.querySelector('#description').value = quill.root.innerHTML;
        });
    </script>
    @endpush
@endsection
