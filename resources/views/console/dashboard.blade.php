@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <ul id="dashboard">
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/entries/list">Manage Journal Entries</a></li>
        <li><a href="/console/topics/list">Manage Topics</a></li>
        <li><a href="/console/jobs/list">Manage Employment Histories</a></li>
        <li><a href="/console/skills/list">Manage Skills</a></li>
        <li><a href="/console/studies/list">Manage Education</a></li>
        <li><a href="/console/links/list">Manage Extra Links</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/logout">Log Out</a></li>
    </ul>

</section>

@endsection
