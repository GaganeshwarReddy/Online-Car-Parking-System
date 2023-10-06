<fieldset>
    <div class="form-group">
        <label for="city_name">City Name *</label>
          <input type="text" disabled="disabled" name="city_name" value="Vizag" placeholder="City Name" class="form-control" required="required" id = "city_name" >
    </div> 

    <div class="form-group">
        <label for="location_name">Location Name *</label>
        <input type="text" name="location_name" value="<?php echo htmlspecialchars($edit ? $data['location_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Location Name" class="form-control" required="required" id="location_name">
    </div> 
    <div class="form-group">
        <label>Location Type </label>
           <?php $opt_arr = ['Railway', 'Airport', 'Public', 'Private' ]; ?>
            <select name="location_type" class="form-control selectpicker" required>
                <option value="" >Please select your location type</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt == $data['location_type']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }

                ?>
            </select>
    </div>  

    <div class="form-group">
        <label>Status * </label>
        <label class="radio-inline">
            <input type="radio" name="status" value="1" <?php echo ($edit &&$data['status'] =='1') ? "checked": "" ; ?> required="required"/> Active
        </label>
        <label class="radio-inline">
            <input type="radio" name="status" value="0" <?php echo ($edit && $data['status'] =='0')? "checked": "" ; ?> required="required" id="female"/> In-Active
        </label>
    </div>
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
