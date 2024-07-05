<div>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="query" placeholder="Enter your query" required>
        <button type="submit">Submit</button>
    </form>

    @if($response)
        <div>
            <h2>Response:</h2>
            <p>{{ $response['message'] ?? 'No response from the API' }}</p>
        </div>
    @endif
</div>
