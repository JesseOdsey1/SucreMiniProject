<x-layout>
    <form action="{{route('employees.edited',$employee)}}" method="POST">
        @csrf
        <div>
            <Label>First Name:</label>
            <input type='text' name='FirstName' value="{{$employee->FirstName}}" required>

            <Label>Last Name:</label>
            <input type='text' name='LastName' value="{{$employee->LastName}}" required>
        </div>

        <Label>Gender*:</Label>
        <fieldset>
            <label><input type="radio" name="Gender" value="Male" {{ $employee->Gender == 'Male' ? 'checked' : '' }} required> Male</label>
            <label><input type="radio" name="Gender" value="Female" {{ $employee->Gender == 'Female' ? 'checked' : '' }} required> Female</label>
        </fieldset>

        <div>
            <Label>Birthday:</label>
            <input type="date" id="birthday" name="Birthday" value="{{$employee->Birthday}}" required>
        <div>

        <div>
            <Label>Monthly Salary:</label>
            <input type='number' name='MonthlySalary' min="0" step="1" value="{{$employee->MonthlySalary}}" required>
        <div>

        <button type="submit">Submit</button>

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

    </form>
</x-layout>