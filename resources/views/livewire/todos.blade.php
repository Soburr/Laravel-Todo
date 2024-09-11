<?php

use function Livewire\Volt\{state, with};

state(['task']);

with([
    'todos'=>fn()=>auth()->user()->todos
]);

$add = function() {
    auth()->user()->todos()->create([
        'task' => $this->task
    ]);
    $this->task = '';
};

$delete = fn(Todo $todo) => $todo->delete();

?>


<div>
    <form wire:submit= "add" >
        <input style="color: black;" type="text" wire:model='task'>
        <button type="submit">Add</buton>
    </form>

    <div>
        @foreach ($todos as $todo)
           <div>
            {{ $todo->task }}
            <button wire:click='delete({{ $todo->id }})'>X</button>
           </div>
        @endforeach
    </div>

</div>
