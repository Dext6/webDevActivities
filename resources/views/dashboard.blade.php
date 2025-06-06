<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Student List</h3>

                    <a href="{{ route('students.create') }}"
                       class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">
                        Add New Student
                    </a>

                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">First Name</th>
                                <th class="border px-4 py-2">Age</th>
                                <th class="border px-4 py-2">Address</th>
                                <th class="border px-4 py-2">Edit</th>
                                <th class="border px-4 py-2">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    <td class="border px-4 py-2">{{ $student->fname }}</td>
                                    <td class="border px-4 py-2">{{ $student->age }}</td>
                                    <td class="border px-4 py-2">{{ $student->address }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('students.edit', $student->id) }}"
                                           class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                                    </td>
                                    <td class="border px-4 py-2">
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this student?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4">No students found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
