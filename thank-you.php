<p class="center-align thank-you">
    <?php
        $whoAreYou = (strtolower($_POST['fname']) == "edward") ? "Welcome back, our fearless leader!" : "Hello ".trim(ucfirst($_POST['fname']))."!";
        echo "$whoAreYou <br/>";
        echo "Your form has been submitted.<br/><br/>Please enjoy while we count up to your age:<br/>";
        $number = 1;
        echo "age".intval($_POST['age']);

        while ( $number <= $_POST['age'] )
        {
            echo "$number ";
            $number++;
        }
        echo "<br/><br/>";
        switch($_POST['kids']){
            case "yes":
                echo "We see you said you had kids... Here's a helpful resource:<br/> <a href='https://www.psychologytoday.com/us/blog/emotional-fitness/201509/top-10-parenting-tips' target='_blank'> Psychology Today - Top 10 Parenting Tips</a>";
                break;
            case "no":
                echo "Congratulations on your freedom! Here's a helpful resource:<br/> <a href='https://www.plannedparenthood.org/learn/birth-control' target='_blank'> Planned Parenthood - Birth Control</a>";
                break;
            case "someday":
                echo "We understand you may want kids someday... Here's a helpful resource:<br/> <a href='https://www.psychologytoday.com/us/blog/complete-without-kids/201204/advantages-and-disadvantages-being-childfree' target='_blank'> Psychology Today - Advantages and Disadvantages of Being Childfree</a>";
                break;
            default:
                echo "Afraid to say if you had kids or not?";
                break;
        }
        echo "<br/><br/>Today's date is: ".date('l, F j, o');
    ?>
</p>
<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>">
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