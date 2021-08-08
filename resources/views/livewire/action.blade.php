<div>
    <button type="button" wire:click="add(30,40)">Sum</button><br>
    <textarea wire:keydown.enter="displaymsg(event.target.value)"></textarea>
    <br>
    <form wire:submit.prevent="getSum">
        Num 1: <input type="text" wire:model="num1"/>
        Num 2: <input type="text" wire:model="num2"/>
        <button type="submit">submit</button>
    </form>
    <br>
    Sum: {{$sum}}
    <br>
    Message: {{$message}}
</div>
