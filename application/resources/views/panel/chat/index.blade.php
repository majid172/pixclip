@extends('panel.layouts.app')
@section('content')
    <div class="card h-[calc(100vh-8rem)]">
        <div class="card-body p-0 flex flex-row h-full overflow-hidden">
            
            {{-- Sidebar: Contact List --}}
            <div class="w-80 border-r border-base-content/10 flex flex-col bg-base-100 flex-shrink-0">
                {{-- Header --}}
                <div class="p-4 border-b border-base-content/10">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-base-content/50">
                            <span class="icon-[tabler--search] size-5"></span>
                        </span>
                        <input type="text" class="input input-sm w-full pl-10 rounded-full bg-base-200 border-none" placeholder="Search contacts...">
                    </div>
                </div>

                {{-- Contact List --}}
                <div class="flex-1 overflow-y-auto">
                    @foreach($contacts as $contact)
                        <a href="#" class="block hover:bg-base-200 transition-colors duration-200">
                            <div class="flex items-center gap-3 p-4 border-b border-base-content/5 cursor-pointer">
                                <div class="avatar {{ $contact->is_online ? 'online' : 'offline' }}">
                                    <div class="w-10 rounded-full bg-base-300">
                                         @if($contact->avatar)
                                            <img src="{{ $contact->avatar }}" alt="{{ $contact->name }}" />
                                        @else
                                             <div class="bg-primary/10 text-primary w-full h-full flex items-center justify-center font-bold text-lg">
                                                {{ substr($contact->name, 0, 1) }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex justify-between items-baseline">
                                        <h3 class="font-medium truncate text-base-content">{{ $contact->name }}</h3>
                                        <span class="text-xs text-base-content/50">12:30 PM</span>
                                    </div>
                                    <p class="text-sm text-base-content/60 truncate">Last message preview...</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Main Area: Chat Window --}}
            <div class="flex-1 flex flex-col min-w-0 bg-base-100/50">
                
                {{-- Chat Header --}}
                <div class="h-16 border-b border-base-content/10 flex items-center justify-between px-6 bg-base-100">
                    <div class="flex items-center gap-3">
                        <div class="avatar placeholder">
                            <div class="bg-neutral text-neutral-content rounded-full w-10">
                                <span class="text-xl">D</span>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-base-content">Dominic Val (Demo)</h3>
                            <span class="text-xs text-success flex items-center gap-1">
                                <span class="badge badge-xs badge-success rounded-full"></span> Online
                            </span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button class="btn btn-circle btn-ghost btn-sm">
                            <span class="icon-[tabler--phone] size-5"></span>
                        </button>
                        <button class="btn btn-circle btn-ghost btn-sm">
                            <span class="icon-[tabler--video] size-5"></span>
                        </button>
                        <button class="btn btn-circle btn-ghost btn-sm">
                            <span class="icon-[tabler--dots-vertical] size-5"></span>
                        </button>
                    </div>
                </div>

                {{-- Messages Area --}}
                <div class="flex-1 overflow-y-auto p-6 space-y-4 bg-base-200/30">
                    
                    {{-- Incoming Message --}}
                    <div class="chat chat-start">
                        <div class="chat-image avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                            </div>
                        </div>
                        <div class="chat-header">
                            Dominic
                            <time class="text-xs opacity-50">12:45</time>
                        </div>
                        <div class="chat-bubble">You were the Chosen One!</div>
                        <div class="chat-footer opacity-50">Delivered</div>
                    </div>

                    {{-- Outgoing Message --}}
                    <div class="chat chat-end">
                        <div class="chat-image avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                            </div>
                        </div>
                         <div class="chat-header">
                            Anakin
                            <time class="text-xs opacity-50">12:46</time>
                        </div>
                        <div class="chat-bubble chat-bubble-primary">I hate you1</div>
                         <div class="chat-footer opacity-50">Seen at 12:46</div>
                    </div>

                      {{-- Incoming Message --}}
                    <div class="chat chat-start">
                        <div class="chat-image avatar">
                            <div class="w-10 rounded-full">
                                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                            </div>
                        </div>
                        <div class="chat-bubble">I loved you.</div>
                    </div>
                </div>

                {{-- Input Area --}}
                <div class="p-4 bg-base-100 border-t border-base-content/10">
                    <form class="flex gap-2 items-end">
                        <button class="btn btn-circle btn-ghost text-base-content/60" type="button">
                            <span class="icon-[tabler--paperclip] size-6"></span>
                        </button>
                        <textarea class="textarea textarea-bordered w-full resize-none focus:outline-none focus:border-primary" rows="1" placeholder="Type a message..."></textarea>
                        <button class="btn btn-primary btn-circle">
                            <span class="icon-[tabler--send] size-5"></span>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
