<?php

use function Livewire\Volt\{state};

state(['task'])

?>

<div>
    <form>
        <input type="text" wire:model='task'>
    </form>

    <div class="mt-2">
       {{ $task }}
    </div>
</div>
