<div>


    <input wire:model.lazy="firstname">
    <input wire:model.lazy="lastname">
    <input wire:model.lazy="email">


    <div> {{$messages}}</div>


    <button {{$valid ?  '' : 'disabled'}}>Create</button>




</div>
