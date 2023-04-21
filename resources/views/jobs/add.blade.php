@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Job</h2>

    <form method="post" action="/console/jobs/add" novalidate class="w3-margin-bottom">

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
            <label for="company_name">Company Name:</label>
            <input type="text" name="company_name" id="company_name" value="{{old('company_name')}}" required>
            
            @if ($errors->first('company'))
                <br>
                <span class="w3-text-red">{{$errors->first('company_name')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="job_description">Job Description:</label>
            <textarea name="job_description" id="job_description" required>{{old('job_description')}}</textarea>

            @if ($errors->first('job_description'))
                <br>
                <span class="w3-text-red">{{$errors->first('job_description')}}</span>
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

        <div class="w3-margin-bottom">
            <label for="skill_id">Skill:</label>
            
                @foreach ($skills as $skill)
                <br>
                    <input type="checkbox" value="{{$skill->id}}" name="skills[]"
                        {{$skill->id == old('skill_id') ? 'checked' : ''}}>
                        {{$skill->title}}
                    
                @endforeach
            
        </div>

        <button type="submit" class="w3-button w3-green">Add Job</button>

    </form>

    <a href="/console/jobs/list">Back to Job List</a>

</section>

@endsection