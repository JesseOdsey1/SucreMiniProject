<x-layout>
    <div class="empInfoBack">
        <div class="empInfoTitle">
            <div class="empInfoCard">
                <p>{{$employee->FirstName}} {{$employee->LastName}}</p>

                <div class="empCardInfo">
                    <div class="empCardInform">
                        <p>Age:</p>
                        <p>Birthday: {{$employee->Birthday}}</p>
                        <p>Gender: {{$employee->Gender}}</p>
                        <p>Monthly Salary: {{$employee->MonthlySalary}}</p>
                    </div>

                    <div class="empCardInfoButtons">
                        <form action="{{route('employees.delete', $employee)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete<br>Employee Information</button>
                        </form>

                        <button href="{{route('employees.edit',$employee)}}">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>