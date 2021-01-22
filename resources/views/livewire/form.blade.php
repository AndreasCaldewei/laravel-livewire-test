<div>


    <input wire:model="firstname">
    <input wire:model="lastname">
    <input wire:model="email">


    <div> {{$messages}}</div>


    <button {{$valid ?  '' : 'disabled'}}>Create</button>




</div>
