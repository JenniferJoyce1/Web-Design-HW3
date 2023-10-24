<select class="form-select" id="iid" name="iid">
<?php
while ($attendeeItem = $attendeeList->fetch_assoc())
{
?>
  <option value="<?php echo $attendeeItem['Attendee_ID']; ?>"><?php echo $attendeeItem['Attendee_FirstName']; ?></option>
<?php
}
?>
</select>
