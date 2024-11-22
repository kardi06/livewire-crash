<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1>Hello World</h1>
    <p>{{ $count }}</p>
    <input type="number" wire:model.live="count"/>
    <button wire:click="changeCount(8)">Change Count</button>

</div>
