<form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>">
  <div class="row">
    <div class="input-field col s6">
      <label for="fname">First Name</label
      ><input
        size="12"
        maxlength="12"
        name="fname"
        type="text"
        id="fname"
        value="<?php echo $_POST['fname']?>"
      />
    </div>
    <div class="input-field col s6">
      <label for="age">Age</label
      ><input
        name="age"
        type="number"
        id="age"
        min="1"
        value="<?php echo $_POST['age']?>"
      />
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <div class="flex-row">
        <div class="radio-wrapper">
          <fieldset>
            <legend>Do You Have Kids?</legend>
            <div class="radio-pair">
              <label for="yes">
                <input
                  type="radio"
                  id="yes"
                  name="kids"
                  value="yes"
                />
                <span>Yes</span>
              </label>
            </div>
            <div class="radio-pair">
              <label for="no">
                <input
                  type="radio"
                  id="no"
                  name="kids"
                  value="no"
                />
                <span>No, don't want them</span>
              </label>
            </div>
            <div class="radio-pair">
              <label for="someday">
                <input
                  type="radio"
                  id="someday"
                  name="kids"
                  value="someday"
                />
                <span>Maybe someday</span>
              </label>
            </div>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s6 fill">
      <input class="waves-effect waves-light btn" type="reset" />
    </div>
    <div class="input-field col s6">
      <input
        class="btn waves-effect waves-light"
        name="submit"
        value="submit"
        type="submit"
      />
    </div>
  </div>
</form>
<script>
  if(<?php echo $_POST['kids']?>){
    document.getElementById("<?php echo $_POST['kids']?>").checked = true;
  }
</script>