<x-layout>
    <x-section>
        <x-dropdown alignment="right">
            <x-slot name="triggerD">
                <button>
                    Clik me
                </button>
            </x-slot>
            <x-dropdown-link href="#">One</x-dropdown-link>
            <x-dropdown-link href="#">Two</x-dropdown-link>
            <x-dropdown-link href="#">Three</x-dropdown-link>
        </x-dropdown>

        <x-modal title="Hello" cancelLabel="Bye">
            <x-slot name="triggerM">
                Open me
            </x-slot>
        </x-modal>
    </x-section>

</x-layout>
