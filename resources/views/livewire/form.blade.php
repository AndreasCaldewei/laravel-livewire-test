<div>


    <input wire:model.lazy="firstname">
    <input wire:model.lazy="lastname">
    <input wire:model.lazy="email">


    <div data-messages="{{$messages}}"> {{$messages}}</div>


    <button {{$valid ?  '' : 'disabled'}}>Create</button>


    <script>

        const element = document.querySelector('[data-messages]')

        const log = () => {
            console.log(JSON.parse(element.dataset.messages))
        }

    </script>

    <button onclick="log()" >Log</button>




</div>
