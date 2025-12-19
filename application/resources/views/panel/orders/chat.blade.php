<div class="flex flex-col h-[650px] bg-base-100 shadow-xl rounded-box border border-base-content/5 overflow-hidden">
    
    {{-- Chat Header --}}
    <div class="px-6 py-4 border-b border-base-content/5 flex justify-between items-center bg-base-100 z-10 relative">
        <div class="flex items-center gap-3">
             <div class="avatar placeholder">
                <div class="bg-gradient-to-tr from-primary to-secondary text-primary-content rounded-full w-10 shadow-lg shadow-primary/20">
                    <span class="text-lg font-bold">#</span>
                </div>
            </div>
            <div>
                <h3 class="font-bold text-lg text-base-content leading-tight">Order Discussion</h3>
                <span class="text-xs font-medium text-base-content/50 uppercase tracking-wide">ID: {{ $order->order_id }}</span>
            </div>
        </div>
        <div class="badge badge-soft badge-success gap-2">
            <span class="size-2 rounded-full bg-success animate-pulse"></span>
            Support Online
        </div>
    </div>

    {{-- Messages Area --}}
    <div class="flex-1 overflow-y-auto p-6 space-y-6 bg-base-200/30 scrollbar-hide">
        
        {{-- Date Separator --}}
        <div class="flex justify-center pb-2">
            <span class="badge badge-sm badge-ghost font-medium text-base-content/40">Today</span>
        </div>

        {{-- Demo Message: Admin --}}
        <div class="chat chat-start">
            <div class="chat-image avatar">
                <div class="w-10 rounded-full bg-base-100 border border-base-content/10 p-0.5">
                   <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png" alt="Admin" class="rounded-full" />
                </div>
            </div>
            <div class="chat-header text-xs opacity-50 mb-1 ml-1">
                Support Team
                <time class="ml-1">10:00 AM</time>
            </div>
            <div class="chat-bubble bg-base-100 text-base-content shadow-sm border border-base-content/5">
                Hello! 👋 <br>
                How can we help you with this order today?
            </div>
        </div>

        {{-- Demo Message: User --}}
        <div class="chat chat-end">
             <div class="chat-image avatar">
                <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <div class="chat-header text-xs opacity-50 mb-1 mr-1">
                You
                <time class="ml-1">10:05 AM</time>
            </div>
            <div class="chat-bubble bg-gradient-to-br from-primary to-primary-focus text-primary-content shadow-md shadow-primary/20 border-0">
                I need the background removed cleanly from these images, please. 📸
            </div>
            <div class="chat-footer opacity-50 text-xs mt-1">Seen</div>
        </div>
    </div>

    {{-- Input Area --}}
    <div class="p-4 bg-base-100 border-t border-base-content/5">
        <form class="relative group">
            <textarea class="textarea textarea-lg w-full bg-base-200/50 focus:bg-base-100 border-transparent focus:border-primary/20 rounded-2xl pr-12 pl-12 resize-none transition-all duration-300 shadow-inner" 
                      rows="1" 
                      placeholder="Type your message..."></textarea>
            
            {{-- Attachment Button --}}
            <button class="absolute left-2 bottom-2 btn btn-circle btn-ghost btn-sm text-base-content/50 hover:text-primary transition-colors" type="button">
                <span class="icon-[tabler--paperclip] size-5"></span>
            </button>

            {{-- Send Button --}}
            <button class="absolute right-2 bottom-2 btn btn-circle btn-primary btn-sm shadow-lg shadow-primary/30 hover:scale-105 transition-transform" type="submit">
                <span class="icon-[tabler--send-2] size-5"></span>
            </button>
        </form>
    </div>
</div>