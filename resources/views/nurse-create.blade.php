<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>

                        <form method="POST" action="{{ route('nurse.store') }}" class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="registration_number" :value="__('Register Number')"/>
                                <input id="registration_number" class="block mt-1" type="text" name="registration_number" :value="old('registration_number')" required autofocus/>
                                <x-input-error :messages="$errors->get('registration_number')" class="mt-2"/>
                            </div>
                            <div class="mt-4">
                                <x-input-label for="province" :value="__('Province')"/>
                                <select name="province" class="block">
                                    <option selected>--Select--</option>
                                    <option value="Alberta">Alberta</option><option value="British Columbia">British Columbia</option>
                                    <option value="New Brunswick">New Brunswick</option><option value="Saskatchewan">Saskatchewan</option>
                                    <option value="Yukon">Yukon</option><option value="Prince Edward Island">Prince Edward Island</option><option value="Quebec">Quebec</option>
                                    <option value="Nova Scotia">Nova Scotia</option><option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                                </select>
                                <x-input-error :messages="$errors->get('province')" class="mt-2"/></div>
                            <div class="mt-4"><x-input-label for="registration_class_id" :value="__('Registration Class')"/>
                                <select name="registration_class" class="block">
                                    <option selected>--Select--</option><option value="Registered Practical Nurse">Registered Practical Nurse</option>
                                    <option value="Registered Nurse">Registered Nurse</option><option value="Nurse Practitioner">Nurse Practitioner</option><option value="Graduate">Graduate</option>
                                </select>
                                <x-input-error :messages="$errors->get('registration_class')" class="mt-2"/>
                            </div>
                            <div class="mt-4">
                                <x-input-label for="effective_from" :value="__('Effective From')"/>
                                <input type="date" id="effective_from" name="effective_from" class="block">
                            </div>
                            <div class="mt-4">
                                <x-input-label for="expiration_date" :value="__('Expiration Date')"/>
                                <input type="date" id="expiration_date" name="expiration_date" class="block">
                            </div>
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Verify') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
