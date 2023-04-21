@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>School Name</th>
            <th>Education Level</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($studies as $study): ?>
            <tr>
                <td>{{$study->title}}</td>
                <td>{{$study->school_name}}</td>
                <td>{{$study->education_level}}</td>
                <td>{{\Carbon\Carbon::parse($study->start_at)->format('d/m/Y')}}</td>
                <td>{{\Carbon\Carbon::parse($study->end_at)->format('d/m/Y ')}}</td>
                <td><a href="/console/studies/edit/{{$study->id}}">Edit</a></td>
                <td><a href="/console/studies/delete/{{$study->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/studies/add" class="w3-button w3-green">New Education</a>

</section>

@endsection