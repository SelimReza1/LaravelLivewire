<div>
    Name:<br>
    <input type="text" wire:model.debounce.1000ms="name" /><br>

    Message:<br>
    <textarea wire:model.debounce.1000ms="message"></textarea><br>

    Marital Status:<br>
    Single<input type="radio" value="single" wire:model.debounce.1000ms="maritial_status" /><br>
    Married<input type="radio" value="married" wire:model.debounce.1000ms="maritial_status"  /><br>

    Favourite Color:<br>
    Red<input type="checkbox" value="red" wire:model.debounce.1000ms="colors" /><br>
    Green<input type="checkbox" value="green" wire:model.debounce.1000ms="colors" /><br>
    Orange<input type="checkbox" value="orange" wire:model.debounce.1000ms="colors" /><br>

    Favourite Fruit:<br>
    <select wire:model.debounce.1000ms="fruit">
        <option>Select Fruit</option>
        <option value="apple">Apple</option>
        <option value="mango">Mango</option>
        <option value="banana">Banana</option>
    </select>
<br><br>

    Name: {{$name}}<br>
    Message: {{$message}}<br>
    Maritial Status: {{$maritial_status}}<br>
    <ul>
    Favourite Colors: @foreach($colors as $color)
             <li> {{$color}} </li>
    @endforeach
    </ul><br>
        favourite Fruit: {{$fruit}}
</div>
