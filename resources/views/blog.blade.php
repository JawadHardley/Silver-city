<x-layout>

    <x-slot:head>
        {{$yale}}
    </x-slot:head>
    {{$blog->title}}
    <p>
        {{$blog->body}}
    </p>

</x-layout>