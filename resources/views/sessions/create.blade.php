<x-layout>

    <section class="px-6 py-14">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In!</h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf


                <x-form.input name="email" type="email"/>
                <x-form.input name="password" type="password"/>

                <div class="mt-6">
                    <button 
                        type="submit" 
                        class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"
                    >
                        Log In
                    </button>
                </div>


            </form>
        </main>
    </section>
</x-layout>