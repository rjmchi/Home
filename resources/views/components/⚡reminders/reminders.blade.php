<div class=" border bg-teal-50">

    <table class="min-w-full text-sm dark:bg-indigo-950">
        <tbody class="divide-y divide-gray-200 ">
            @foreach ($reminders as $reminder)
                <tr class="{{ $this->getRowClass($reminder->due_date) }} " wire:key='{{ $reminder->id }}'>
                    <td class="font-mono whitespace-nowrap">
                        {{ $reminder->due_date ? \Carbon\Carbon::parse($reminder->due_date)->format('m/d/y') : '' }}
                    </td>
                    <td class="">
                        {{ $reminder->message }}
                    </td>
                    <td>
                        <flux:button variant='danger' icon='x-mark' size="sm"
                            wire:click='delete({{ $reminder->id }})' />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form class="dark:bg-indigo-700">
        <div class="flex gap-1">
            <flux:input wire:model='due_date' />
            <flux:input wire:model='message' />
            <flux:button variant="primary" wire:click='addReminder'>Add</flux:button>

        </div>
    </form>



</div>
