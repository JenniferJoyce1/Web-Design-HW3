<select class="form-select" id="eName" name="eName">
<?php
while ($eventItem = $eventList->fetch_assoc())
{
?>
  <option value="<?php echo $eventItem['Event_ID']; ?>"><?php echo $eventItem['Event_Name']; ?></option>
<?php
}
?>
</select>
