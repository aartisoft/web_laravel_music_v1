
@extends('app')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to unlimited Music</h1>
            <p> - Stay with music </p>
        </div>
        <p>This question came up in a forum where I drop by now & then. It is also something that I recall answering previously on one or two occasions. So I thought I’d write about it here with a rudimentary example to provide a gist of how it works.
            There’s no mystery or secret voodoo involved in having AJAX work in a Laravel app. On its own Laravel 4 (current version) doesn’t have any API for implementing AJAX, so you’ll need to do the footwork yourself. The basic concept that applies everywhere else applies here as well; grab the data from a HTML form, create an AJAX request and send it to server to a URL on which data is expected. Form data is retrieved on server just like any normal form data would be, the only key part is since you’re dealing with an AJAX request you can’t send back a normal View as response, you’ll need to make your own response with proper headers</p>

        <h2>Collapsible Methods</h2>
        <p>The toggle method toggles the collapsible content.</p>
        <p>The show method shows the collapsible content.</p>
        <p>The hide method hides the collapsible content.</p>
        <button type="button" class="btn btn-primary">Toggle</button>
        <button type="button" class="btn btn-success">Show</button>
        <button type="button" class="btn btn-warning">Hide</button>

        <div class="collapse">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>

        <h3>Tooltip Example</h3>
        <p>Tooltips are not CSS-only plugins, and must therefore be initialized with jQuery: select the specified element and call the tooltip() method.</p>
        <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>
    </div>


@endsection
