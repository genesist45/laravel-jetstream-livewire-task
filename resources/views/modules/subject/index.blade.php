<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List of Subjects
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg">
                <div style="padding: 20px">
                <a href="{{ route('subjects.create') }}" class="text-white p-2 rounded-lg border"
                    style="background-color: rgb(17, 106, 136)">Create Subject
                </a>

                <hr class="mt-6 mb-6">

                <table class="table tablebordered p-2 w-full rounded-lg border">
                    <thead class="bg-gray-100 rounded-lg">
                        <th class="bg-gray-200">#</th>
                        <th class="bg-gray-200 text-start">Code</th>
                        <th class="bg-gray-200 text-start">Title</th>
                        <th class="bg-gray-200 text-start">Description</th>
                        <th class="bg-gray-200 text-start">Lab Unit</th>
                        <th class="bg-gray-200 text-start">Lec Unit</th>
                        <th class="bg-gray-200 text-start">Total Unit</th>

                        <th class="bg-gray-200 text-start">Action</th>
                    </thead>
                    <tbody>
                        @foreach($subjectModel->latest()->get() as $index => $subj)
                        <tr class="border">
                            <td class="p-2 text-center border">{{$index + 1}}.</td>
                            <td class="p-2">{{$subj->subject_code}}</td>
                            <td class="p-2">{{$subj->subject_title}}</td>
                            <td class="p-2">{{$subj->subject_description}}</td>
                            <td class="p-2">{{$subj->subject_lab_unit}}</td>
                            <td class="p-2">{{$subj->subject_lec_unit}}</td>
                            <td class="p-2">{{$subj->subject_total_unit}}</td>

                            <td class="p-2">
                                <button class="p-2 px-2 border rounded-lg" style="background-color: orange; color: #fff">Edit</button>
                                <button class="p-2 px-2 border rounded-lg" style="background-color: rgb(203, 74, 74); color: #fff">Delete</button>
                            </td>

                        </tr>

                        @endforeach
                    </tbody>
                </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
