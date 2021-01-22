<div>


    <vaadin-text-field placeholder="Input" wire:model="input"></vaadin-text-field>

    <vaadin-text-field placeholder="Input" wire:model="input"></vaadin-text-field>
    <vaadin-text-field placeholder="Input" ></vaadin-text-field>

    {{-- Success is as dangerous as failure. --}}

    <vaadin-date-picker wire:model.lazy="date" ></vaadin-date-picker>

    <div>{{$input}}</div>
    <div>{{$date}}</div>


    <script>



        function logo(log) {
            $wire.data = log
        }

    </script>


</div>
