<fieldset>
    <div class="form-group">
        <label for="location_name">Location Name *</label>
          <input type="text" name="location_name" value="<?php echo htmlspecialchars($edit ? $data['location_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Location Name" class="form-control" required="required" id = "location_name" >
    </div> 

    <div class="form-group">
        <label for="no_of_slots">No Of Slots *</label>
        <input type="text" name="no_of_slots" value="<?php echo htmlspecialchars($edit ? $data['no_of_slots'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="No Of Slots" class="form-control" required="required" id="no_of_slots">
    </div> 
    <div class="form-group">
        <label for="location_address">Location Address *</label>
        <textarea name="location_address"  placeholder="Location Address" class="form-control" required="required" id="location_address"><?php echo htmlspecialchars($edit ? $data['location_address'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div> 
    <div class="form-group">
        <label for="mobile_no">Mobile Number *</label>
        <input type="text" name="mobile_no" value="<?php echo htmlspecialchars($edit ? $data['mobile_no'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Mobile Number" class="form-control" required="required" id="mobile_no">
    </div>
    <div class="form-group">
        <label for="email">Email *</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($edit ? $data['email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Email" class="form-control" required="required" id="email">
    </div>
     <div class="form-group">
        <label for="amount">Amount (Per Hour) *</label>
        <input type="text" name="amount" value="<?php echo htmlspecialchars($edit ? $data['amount'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Amount" class="form-control" required="required" id="amount">
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
