<x-layout>

    <x-slot:head>
        {{$yale}}
    </x-slot:head>
    {{$blog[$yale]['title']}}
    <p>
        {{$blog[$yale]['body']}}
    </p>

</x-layout>