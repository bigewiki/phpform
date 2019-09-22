<h1 class="center-align title-header">POST Request</h1>
<!-- <form method="post" action="<?php $_SERVER[SCRIPT_NAME]; ?>"> -->
<form method="post" action="index.php">
  <div class="row">
    <div class="input-field col s6">
      <label for="fname">First Name</label
      ><input
        size="12"
        maxlength="12"
        name="fname"
        type="text"
        id="fname"
        class="validate"
        required
      />
    </div>
    <div class="input-field col s6">
      <label for="age">Age</label
      ><input
        class="validate"
        name="age"
        min="1"
        type="number"
        id="age"
        required
      />
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <div class="flex-row">
        <div class="radio-wrapper">
          <fieldset>
            <legend>Timezone</legend>
            <div class="radio-pair">
              <label for="eastern">
                <input
                  type="radio"
                  id="eastern"
                  name="timezone"
                  value="eastern"
                />
                <span>US Eastern UTC -4</span>
              </label>
            </div>

            <div class="radio-pair">
              <label for="central">
                <input
                  type="radio"
                  id="central"
                  name="timezone"
                  value="central"
                />
                <span>US Central UTC -5</span>
              </label>
            </div>
            <div class="radio-pair">
              <label for="mountain-daylight">
                <input
                  type="radio"
                  id="mountain-daylight"
                  name="timezone"
                  value="mountain-daylight"
                />
                <span>US Mountain Daylight UTC -6</span>
              </label>
            </div>
            <div class="radio-pair">
              <label></label>
            </div>
            <div class="radio-pair">
              <label for="mountain-standard">
                <input
                  type="radio"
                  id="mountain-standard"
                  name="timezone"
                  value="mountain-standard"
                  checked="checked"
                />
                <span>Moutain Standard (Arizona)</span>
              </label>
            </div>
            <div class="radio-pair">
              <label for="pacific">
                <input
                  type="radio"
                  id="pacific"
                  name="timezone"
                  value="pacific"
                />
                <span>US Pacific UTC -7</span>
              </label>
            </div>
            <div class="radio-pair">
              <label for="alaska">
                <input
                  type="radio"
                  id="alaska"
                  name="timezone"
                  value="alaska"
                />
                <span>Alaska UTC -8</span>
              </label>
            </div>
            <div class="radio-pair">
              <label for="hawaii">
                <input
                  type="radio"
                  id="hawaii"
                  name="timezone"
                  value="hawaii"
                />
                <span>Hawaii UTC -10</span>
              </label>
            </div>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s6">
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