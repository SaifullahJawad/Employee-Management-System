<x-layout>

    <x-setting heading="Add An Employee">
        <form method="POST" action="/owner/employees">
            @csrf

            <x-form.input name="username" />
            <x-form.input name="email" type="email" />
            <x-form.input name="password" type="password" autocomplete="current-password"/>
            <x-form.input name="password_confirmation" type="password" autocomplete="current-password"/>


            <div class="mt-6">
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"
                >
                    Add Employee
                </button>
            </div>


        </form>
    </x-setting>

    

</x-layout>