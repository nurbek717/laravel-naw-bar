<x-layout>
<x-slot:heading>
     User page
    </x-slot:heading>

    <h1> Name:  {{$user['name']}}</h1>
    
    <h2> Age: {{$user['age']}}</h2>
    <h3> Adres: {{$user['adres']}}</h3>
    <h4> Workplace: {{$user['workplace']}}</h4>
</x-layout>