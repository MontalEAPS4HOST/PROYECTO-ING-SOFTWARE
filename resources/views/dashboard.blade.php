

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Cuadro que ocupa el 70% -->
        <div style="width: calc(70% - 20px); float: left; margin: 10px; background-color: #ccc;">
            @include('calendar_table')
        </div>

        <!-- Cuadro que ocupa el 30% -->
        <div style="width: calc(30% - 20px); float: left; margin: 10px; background-color: #eee;">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button type="button" onclick="alert('Cita Reservada')">Reservar Cita</button>

                </div>
            </div>
        </div>

        <div style="clear: both;"></div>
    </div>
    </div>

</x-app-layout>
