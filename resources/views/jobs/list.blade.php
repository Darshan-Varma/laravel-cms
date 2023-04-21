@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Employment Histories</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Company</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($jobs as $job): ?>
            <tr>
                <td>{{$job->title}}</td>
                <td>{{$job->company_name}}</td>
                <td>{{\Carbon\Carbon::parse($job->start_at)->format('d/m/Y')}}</td>
                <td>{{\Carbon\Carbon::parse($job->end_at)->format('d/m/Y ')}}</td>
                <td><a href="/console/jobs/edit/{{$job->id}}">Edit</a></td>
                <td><a href="/console/jobs/delete/{{$job->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/jobs/add" class="w3-button w3-green">New Employer</a>

</section>

@endsection