<div class="container py-8">
    <div class="row min-vh-100 justify-content-center align-content-center text-center">
        <div class="col-8">
            <h1 class="text-thin text-loose">Orange</h1>
            <hr>
            <h2 class="h6 text-muted text-thin">Lightweight PHP framework with auto-routing</h2>

            <ol class="text-start bg-light p-4 mt-4" style='border-left: 6px solid var(--bs-gray); font-family: var(--bs-font-monospace)'>
                <h4 class="mb-3">Getting started 1-2-3</h4>
                <li class="mb-2 ms-5"><pre>git clone https://github.com/nipunadodan/orange.git</pre></li>
                <li class="ms-5"><pre>composer update</pre></li>
                <li class="ms-5">Copy the env-sample.php and rename it to env.php and edit</li>
            </ol>

            <ul class="text-start bg-light p-4 mt-4 list-unstyled" style='border-left: 6px solid var(--bs-gray); font-family: var(--bs-font-monospace)'>
                <h4 class="mb-3">What's New?</h4>
                <li class="ms-5">Introduced GuzzleHTTP to handle http requests</li>
                <li class="ms-5">Bootstrap 5 included - now you can customise Bootstrap while in the Project</li>
            </ul>

            <div class="text-start my-4 bg-light p-4" style=' border-left: 6px solid var(--bs-gray); font-family: var(--bs-font-monospace)'>
                <h4 class="">API Sample Response</h4>
                <pre class="api-response"></pre>
            </div>
        </div>
    </div>
</div>
<script>
    ajaxDirect({
            callback: 'weather',
            data: {
                q: 'Colombo,LK',
                appid: "xxxxx"
            },
        }
    );
</script>
