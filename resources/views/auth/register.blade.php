<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Firstname -->
        <div>
            <x-input-label for="firstname" :value="__('firstname')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Sexe -->
        <x-input-label for="password" :value="__('Genre')" /> <br>
                        <div class="row g-2">
                        
                            <div class="col-md">
                                <div class="form-check form-check-inline">
                                    <span class="input-group-text" id="inputGroupPrepend">
                                        <input class="form-check-input" type="radio" name="sexe" id="sexe1" value="femme">
                                        <label class="form-check-label" for="sexe1">Femme</label>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-check form-check-inline">
                                <span class="input-group-text" id="inputGroupPrepend">
                                    <input class="form-check-input" type="radio" name="sexe" id="sexe2" value="homme">
                                    <label class="form-check-label" for="sexe">Home</label>
                                </span>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Role -->
        <x-input-label for="password" :value="__('Vous êtes ?')" /> <br>
                        <div class="row g-2">
                        
                            <div class="col-md">
                                <div class="form-check form-check-inline">
                                    <span class="input-group-text" id="inputGroupPrepend">
                                        <input class="form-check-input" type="radio" name="role" id="role1" value="2">
                                        <label class="form-check-label" for="role1">Electeur</label>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-check form-check-inline">
                                <span class="input-group-text" id="inputGroupPrepend">
                                    <input class="form-check-input" type="radio" name="role" id="role2" value="3">
                                    <label class="form-check-label" for="role2">Candidat</label>
                                </span>
                                </div>
                            </div>
                            
                        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- ville -->
        <div>
            <x-input-label for="ville" :value="__('ville')" />
            <x-text-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required autofocus autocomplete="ville" />
            <x-input-error :messages="$errors->get('ville')" class="mt-2" />
        </div>

        <!-- Date de naissance -->
        <div class="form-group">
                                <x-input-label for="birthdate" :value="__('Datedenaissance')" />
                                <x-text-input id="birthdate" class="form-control" type="date" :value="old('Datedenaissance')" name="Datedenaissance" required  autocomplete="Datedenaissance"/>
                                <x-input-error :messages="$errors->get('Datedenaissance')" class="mt-2" />
                        </div>

     
      

                        <!-- images -->

                        <div class="form-group">
                        <x-input-label for="images" :value="__('images')" />
                            <input class="form-control" type="file" id="images" accept=".png, .jpeg, .jpg" :value="old('images')" name="images" required  autocomplete="images">
                            <x-input-error :messages="$errors->get('images')" class="mt-2" />
                        </div>

                           <!-- Numéro tel -->
        <div>
            <x-input-label for="numerotel" :value="__('numerotel')" />
            <x-text-input id="numerotel" class="block mt-1 w-full" type="text" name="numerotel" :value="old('numerotel')" required autofocus autocomplete="numerotel" />
            <x-input-error :messages="$errors->get('numerotel')" class="mt-2" />
        </div>

                        <!--register -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        


    </form>
</x-guest-layout>
