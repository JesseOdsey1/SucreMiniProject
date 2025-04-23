<x-layout>
    <div class="database">
        @foreach($employees as $employee)
                <div class="cardDes">
                    <p>{{$employee->id}}</p>
                    <p>{{$employee->FirstName}} {{$employee->LastName}}</p>
                    <x-card href="{{route('employees.employee', $employee->id)}}" :highlight="true" class="cards">
                    </x-card>
                </div>
        @endforeach
        <a href="{{route('employees.add')}}" class="addButton"> + </a>
    </div>
    {{$employees->links()}}
</x-layout>