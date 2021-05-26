<div class="container my-6">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="text-thin"><i class="la la-crown"></i> <?php echo SITE_NAME ?></h1>
            <hr>
            <h2 class="h6 text-muted text-thin"><?php echo SITE_TAGLINE ?></h2>

            <div class="row mt-5 mb-4">
                <div class="col-md-3">
                    <a href="monarchy-add" class="btn btn-light text-small">
                        <i class="la la-plus"></i>
                        <span>Create a monarchy</span>
                    </a>
                </div>
            </div>

            <div id="monarchy-list"></div>
        </div>
    </div>
</div>

<script>
    ajaxDirect({
        callback: 'monarchy-list',
        data:{}
    });
</script>