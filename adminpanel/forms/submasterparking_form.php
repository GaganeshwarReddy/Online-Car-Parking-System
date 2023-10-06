<fieldset>
    <div class="form-group">
        <label for="master_table_id">Location Name *</label>
         
            <select name="master_table_id" class="form-control selectpicker" required>
                <option value="" >Please select your location type</option>
                <?php
                foreach ($rows as $opt) {
                    if ($edit && $opt['id'] == $data['master_table_id']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['id'].'"' . $sel . '>' . ($opt['location_name'] .', '.$opt['location_type']). '</option>';
                }

                ?>
            </select>
    </div> 

    <div class="form-group">
        <label for="distance">Distance (KM) *</label>
        <input type="text" name="distance" value="<?php echo htmlspecialchars($edit ? $data['distance'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Distance" class="form-control" required="required" id="distance">
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
