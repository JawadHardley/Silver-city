<x-layout>

    <x-slot:head>
        {{$job->title}}
    </x-slot:head>
    <p>
        <b>Salary:</b> {{$job->Salary}} USD
    </p>

    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>

</x-layout>