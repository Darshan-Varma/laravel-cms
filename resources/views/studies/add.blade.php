@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Education</h2>

    <form method="post" action="/console/studies/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="school_name">School Name:</label>
            <input type="text" name="school_name" id="school_name" value="{{old('school_name')}}" required>
            
            @if ($errors->first('school_name'))
                <br>
                <span class="w3-text-red">{{$errors->first('school_name')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="education_level">Education Level:</label>
            <input type="text" name="education_level" id="education_level" value="{{old('education_level')}}" required>

            @if ($errors->first('education_level'))
                <br>
                <span class="w3-text-red">{{$errors->first('education_level')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="start_at">Start Date:</label>
            <input type="date" name="start_at" id="start_at" value="{{old('start_at')}}" required>

            @if ($errors->first('start_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('start_at')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="end_at">End Date:</label>
            <input type="date" name="end_at" id="end_at" value="{{old('end_at')}}" required>

            @if ($errors->first('end_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('end_at')}}</span>
            @endif
        </div>

        

        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/studies/list">Back to Education List</a>

</section>

@endsection