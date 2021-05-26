<div class="container">
    <div class="text-start my-5">
        <a href="<?php echo SITE_URL; ?>" id="back" class="text-thin text-muted text-decoration-none"><i class="la la-arrow-left"></i> Home</a>
        <h1 class="text-bold m-0 condensed mt-4">Add a Member <span class="text-muted" id="monarchy-name"></span></h1>
        <form class="form ajax my-5" method="post" name="member-add">

            <label for="member_name">Member Name</label>
            <input id="member_name" name="member_name" required placeholder="Member Name">

            <label for="official_title">Official Title</label>
            <input id="official_title" name="official_title" required placeholder="Official Title">

            <label for="description">Description</label>
            <textarea id="description" name="description" required placeholder="Description"></textarea>

            <label for="parent">Parent</label>
            <select id="parent" name="parent" required></select>

            <label for="gender" class="d-block">Gender</label>
            <input type="radio" class="normal-check" id="male" name="sex" required value="1"><label for="male">Male</label>
            <input type="radio" class="normal-check" id="female" name="sex" required value="0"><label for="female">Female</label>

            <label for="dob" class="d-block mt-3">Date of Birth</label>
            <input type="date" id="dob" name="dob" required placeholder="Date of Birth">

            <input type="hidden" name="monarchy" value="<?php echo isset($_GET['monarchy']) && $_GET['monarchy'] !== '' ? $_GET['monarchy'] : 0?>">

            <input class="w-auto px-5 py-2" type="submit" value="Add">
        </form>
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
        callback: 'member-list-get',
        data:{
            'id':<?php echo $_GET['monarchy']; ?>
        }
    });
    <?php } ?>
</script>