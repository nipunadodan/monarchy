<?php
session_destroy();
if(isset($_SESSION))
    unset($_SESSION);
?>

<script>
    window.location.replace("<?php echo SITE_URL; ?>");
</script>
