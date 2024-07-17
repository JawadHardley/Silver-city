<x-layout>

    <x-slot:head>
        {{$job->title}}
    </x-slot:head>
    <p>
        <b>Salary:</b> {{number_format($job->Salary, 0, '.', ',')}} USD
    </p>

</x-layout>