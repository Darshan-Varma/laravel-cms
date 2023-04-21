@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Link</h2>

    <form method="post" action="/console/links/add" novalidate class="w3-margin-bottom">

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
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{old('description')}}" required>
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Link</button>

    </form>

    <a href="/console/links/list">Back to Link List</a>

</section>

@endsection