<x-layout>
    <x-slot:head>
        Home
    </x-slot:head>
    <h1>Jobs Spree</h1>

    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($blog as $bog) 

                <a href="/blog/{{$bog['id']}}">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg -mx-2">
                        <img class="w-full"
                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{$bog['title']}}</div>
                        </div>
                    </div>
                </a>

            @endforeach
        </div>
    </div>


</x-layout>