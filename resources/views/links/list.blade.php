@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Links</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($links as $link): ?>
            <tr>
                <td>{{$link->title}}</td>
                <td><a href="/console/links/edit/{{$link->id}}">Edit</a></td>
                <td><a href="/console/links/delete/{{$link->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/links/add" class="w3-button w3-green">New Link</a>

</section>

@endsection