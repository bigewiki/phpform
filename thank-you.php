<h1 class="center-align title-header">Thank you!</h1>
<p class="center-align thank-you">
    <?php
        echo "Hello ".$_POST['fname']."!<br/>";
    ?>
    Your form has been submitted!
</p>
<form method="post" action="<?php echo $_SERVER[SCRIPT_NAME] ?>">
<div class="row">
    <div class="col s3"></div>
    <div class="input-field col s6">
    <input
        class="btn waves-effect waves-light resubmit"
        name="submit"
        value="resubmit"
        type="submit"
    />
    </div>
    <div class="col s3"></div>
</div>
</form>