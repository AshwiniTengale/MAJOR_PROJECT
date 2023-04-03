<label for="response">Are there any co-authors present</label>
<select id="response" onchange="showTextBox()">
  <option value="">--Select an option--</option>
  <option value="yes">Yes</option>
  <option value="no">No</option>
</select>
<div id="textbox" style="display:none">
  <label for="feedback">Coauthor's Name </label>
  <input type="text" id="feedback" name="feedback">
</div>

<script>
function showTextBox() {
  var response = document.getElementById("response");
  var textbox = document.getElementById("textbox");
  if (response.value == "yes") {
    textbox.style.display = "block";
  } else {
    textbox.style.display = "none";
  }
}
</script>
