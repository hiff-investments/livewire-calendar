<div
    @if($eventClickEnabled)
        wire:click.stop="onEventClick('{{ $event['id']  }}')"
    @endif
    class="px-3 py-2 {{ isset($event['color']) ? 'text-white' : '' }} bg-white border rounded-lg shadow-md cursor-pointer" style="{{ isset($event['color']) ? 'background-color: ' . $event['color'] : '' }}">
    <div></div>
    <p class="text-sm font-medium">
        <span class="inline-flex items-center">
            {{ $event['title'] }}
        </span>
    </p>
</div>
