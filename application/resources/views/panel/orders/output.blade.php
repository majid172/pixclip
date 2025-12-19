<div class="flex flex-col md:flex-row gap-4 w-full text-sm mb-6 mt-6 bg-white shadow p-4 rounded-box">
    @if ($order->is_paid)
        <a href="{{ $order->output_link }}">Download Link</a>
    @else
        <p>{{ _('Please pay first for download images') }}</p>
    @endif
</div>
