<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log in!</h1>
            <form action="/login" method="post" class="mt-10">

                 @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-grey-700">
                        Email
                    </label>

                    <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email"  value="{{old('email')}}" required>
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-grey-700">
                        Password
                    </label>

                    <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password" required>
                </div>

                <div class="mb-6">
                    <button type="Log in" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                </div>
                @if ($errors->any())
                    <div class="mb-6">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 text-xs mt-1">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>

        </main>
    </section>
</x-layout>
