<link rel="stylesheet" href="<?php echo TEMPLATE_URL?>css/treeflex.css">

<div class="container">
    <div class="text-start my-5">
        <a href="<?php echo SITE_URL; ?>" id="back" class="text-thin text-muted text-decoration-none"><i class="la la-arrow-left"></i> Home</a>
        <h1 class="text-bold m-0 condensed mt-4">Family Tree <span class="text-muted" id="monarchy-name"></span></h1>
        <div id="hierarchy" class="tf-tree my-6">
        </div>
    </div>
</div>

<script>
    <?php if(isset($_GET['monarchy']) && $_GET['monarchy'] !==''){ ?>
    ajaxDirect({
        callback:'monarchy-get',
        data:{
            'id':<?php echo $_GET['monarchy']; ?>
        }
    });
    ajaxDirect({
        callback: 'family-tree',
        data:{
            'id':<?php echo $_GET['monarchy']; ?>
        }
    });
    <?php } ?>
</script>