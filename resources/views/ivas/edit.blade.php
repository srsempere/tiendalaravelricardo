<x-app-layout>
    <div class="w-1/2 mx-auto">
        <form method="POST" action="{{ route('ivas.update', ['iva' => $iva]) }}">
            @csrf
            @method('PUT')

            <!-- Tipo -->
            <div>
                <x-input-label for="tipo" :value="'Tipo impositivo del IVA'" />
                <select id="tipo"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                    name="tipo" required>
                    @foreach ($ivas as $iva_select)
                        <option value="{{ $iva_select->tipo }}" {{ $iva_select->id == $iva->id ? 'selected' : '' }}>
                            {{ $iva_select->tipo}}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
            </div>

            <!-- Porcentaje -->
            <div class="mt-4">
                <x-input-label for="por" :value="'Porcentaje de IVA'" />
                <x-text-input id="por" class="block mt-1 w-full"
                type="text" name="por" :value="old('por')" required
                autofocus autocomplete="por" />
                <x-input-error :messages="$errors->get('por')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('ivas.index') }}">
                    <x-secondary-button class="ms-4">
                        Volver
                        </x-primary-button>
                </a>
                <x-primary-button class="ms-4">
                    Editar
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
