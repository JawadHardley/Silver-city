<x-layout>

    <x-slot:head>
        {{$blog->title}}
    </x-slot:head>
    <p>
        <b>Salary:</b> {{number_format($blog->Salary, 0, '.', ',')}} USD
    </p>

</x-layout>