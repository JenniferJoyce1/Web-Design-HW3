<select class="form-select" id="pName" name="pName">
<?php
while ($plannerItem = $plannerList->fetch_assoc())
{
?>
  <option value="<?php echo $plannerItem['Planner_ID']; ?>"><?php echo $plannerItem['Planner_Name']; ?></option>
<?php
}
?>
</select>
