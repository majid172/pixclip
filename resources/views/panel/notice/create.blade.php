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
                            <option value="2">Inactive</option>
                        </select>
                    </div>
                </div>


                <div>
                    <label class="label-text" for="description">Description</label>
                    <textarea id="description" name="description" class="input" placeholder="Write something ..." row="5"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex gap-3">
                    <button class="btn btn-primary" type="submit">Save</button>

                </div>
            </form>
        </div>
    </div>
@endsection
