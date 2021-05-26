<div class="container">
    <div class="text-start my-5">
        <a href="<?php echo SITE_URL; ?>" id="back" class="text-thin text-muted text-decoration-none"><i class="la la-arrow-left"></i> Home</a>
        <h1 class="text-bold m-0 condensed mt-4">Add a Monarchy <span class="text-muted">| <i class="la la-crown"></i> <?php echo SITE_NAME; ?></span></h1>
        <form class="form ajax my-5" method="post" name="monarchy-add">

            <label for="monarchy_name">Monarchy Name</label>
            <input id="monarchy_name" name="monarchy_name" required placeholder="Monarchy Name">

            <label for="description">Monarchy Name</label>
            <textarea id="description" name="description" required placeholder="Description"></textarea>

            <input class="w-auto px-5 py-2" type="submit" value="Add">
        </form>
    </div>
</div>