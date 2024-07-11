<x-layout>
    <x-slot:head>
        Home
    </x-slot:head>
    <h1>Welcome home</h1>

    @foreach ($Jobs as $job)
        <li>{{ $Jobs['name'] }}</li>
    @endforeach

</x-layout>