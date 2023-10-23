<select class="form-select" id="gName" name="gName">
<?php
while ($guestItem = $guestList->fetch_assoc())
{
?>
  <option value="<?php echo $guestItem['Guest_ID']; ?>"><?php echo $guestItem['Guest_Name']; ?></option>
<?php
}
?>
</select>
