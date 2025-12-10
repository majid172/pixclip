@extends('panel.layouts.app')
@section('content')
{{-- ================= Change Password Form ================= --}}
<div class="card mb-6">
    <div class="card-header">
        <h2 class="text-lg font-semibold">Change Password</h2>

        {{-- Success message --}}
        @if (session('password_success'))
            <div class="mb-4 rounded-lg border border-green-200 bg-green-50 p-4 text-green-700">
                {{ session('password_success') }}
            </div>
        @endif

        {{-- Validation errors --}}
        @if ($errors->passwordChange->any())
            <div class="mb-4 rounded-lg border border-red-200 bg-red-50 p-4 text-red-600">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->passwordChange->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="card-body gap-6">
        <form action="{{ route('change.password') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                {{-- Current Password --}}
                <div>
                    <label class="label-text" for="current_password">Current Password</label>
                    <input type="password" name="current_password" id="current_password"
                        class="input @error('current_password') border-red-500 @enderror"
                        placeholder="••••••••">
                    @error('current_password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- New Password --}}
                <div>
                    <label class="label-text" for="new_password">New Password</label>
                    <input type="password" name="new_password" id="new_password"
                        class="input @error('new_password') border-red-500 @enderror"
                        placeholder="••••••••">
                    @error('new_password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div>
                    <label class="label-text" for="new_password_confirmation">Confirm Password</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                        class="input @error('new_password_confirmation') border-red-500 @enderror"
                        placeholder="••••••••">
                    @error('new_password_confirmation')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Submit Button --}}
            <div class="flex gap-3 mt-4">
                <button type="submit" class="btn btn-primary">Update Password</button>
            </div>
        </form>
    </div>
</div>

@endsection
