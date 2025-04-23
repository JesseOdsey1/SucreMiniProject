<x-layout>
    <form action="{{route('employees.save')}}" method="POST">
        @csrf
        <div>
            <Label>First Name:</label>
            <input type='text' name='FirstName' value="{{old('FirstName')}}" required>

            <Label>Last Name:</label>
            <input type='text' name='LastName' value="{{old('LastName')}}" required>
        </div>

        <Label>Gender*:</Label>
        <fieldset>
            <label><input type="radio" name="Gender" value="Male" {{ (old('Gender') == 'Male') ? 'checked' : '' }} required> Male</label>
            <label><input type="radio" name="Gender" value="Female" {{ (old('Gender') == 'Female') ? 'checked' : '' }} required> Female</label>
        </fieldset>
        
        <div>
            <Label>Birthday:</label>
            <input type="date" id="birthday" name="Birthday" value="{{old('Birthday')}}" required>
        <div>

        <div>
            <Label>Monthly Salary:</label>
            <input type='number' name='MonthlySalary' min="0" step="1" value="{{old('MonthlySalary')}}" required>
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