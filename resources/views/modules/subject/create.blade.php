<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Subjects
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg">
                <div style="padding: 20px">
                    <h1 class="text-2xl"><strong>Create New Subject..</strong></h1>
                    <p>You Can Create a New Subject Here:</p>
                    <hr class="mt-6 mb-6">

                    @if(session('success'))
                    <div class="border-green-600 p-5" style="color: green">
                        <strong>Success:</strong> {{ session('success') }}
                    </div>
                    <br>
                    @endif


                    <form action="{{ route('subject.store') }}" method="post">
                        @csrf
                        <div>
                            <label for="code">Code :</label>
                            <input id="code" name="code" type="text" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="Subject Code Here">
                        </div>

                        <div class="mt-4">
                            <label for="title">Title :</label>
                            <input id="title" name="title" type="text" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="Subject Title Here">
                        </div>

                        <div class="mt-4">
                            <label for="description">Description :</label>
                            <textarea id="description" name="description" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="Subject Description Here"></textarea>
                        </div>

                         <div class="mt-4">
                            <label for="laboratory_unit">Laboratory Unit :</label>
                            <input id="laboratory_unit" type="number" name="lab_unit" oninput="total_unit()" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="Laboratory Unit Here">
                        </div>

                         <div class="mt-4">
                            <label for="lec_unit">Lecture Unit :</label>
                            <input id="lec_unit" type="number" name="lec_unit" oninput="total_unit()" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="Lecture Unit Here">
                        </div>

                        <div class="mt-4">
                            <label for="total_units">Total Unit :</label>
                            <input readonly id="total_units" type="number" name="total_units" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="Total Unit Here">
                        </div>
                        <hr class="mt-6 mb-6">
                        <button type="reset" class="border shadow-md rounded-lg  text-white "
                        style="background-color: #d4441d; padding: 8px; ">Reset</button>
                        <button type="submit" class="border shadow-md rounded-lg  text-white "
                        style="background-color: #387dd1; padding: 8px; ">Create</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function total_unit() {
            const lab = document.getElementById('laboratory_unit').value;
            const lec = document.getElementById('lec_unit').value;
            const total = document.getElementById('total_units');

            total.value = Number(lab) + Number(lec);
        }
    </script>
</x-app-layout>
