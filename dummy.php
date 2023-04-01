<!DOCTYPE html>
<html>
  <head>
    <title>Dynamic Form Example</title>
    <style>
      .input-field {
        display: block;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <form>
      <label for="num-inputs">Select Number of Inputs:</label>
      <select id="num-inputs">
        <option value="0" selected disabled>Select an option</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
      <div id="input-container"></div>
      <button type="submit">Submit</button>
    </form>

    <script>
      const numInputsSelect = document.getElementById("num-inputs");
      const inputContainer = document.getElementById("input-container");

      numInputsSelect.addEventListener("change", (event) => {
        const numInputs = event.target.value;

        // Clear existing inputs
        inputContainer.innerHTML = "";

        // Generate new inputs
        for (let i = 0; i < numInputs; i++) {
          const inputField = document.createElement("input");
          inputField.type = "text";
          inputField.name = `input-${i}`;
          inputField.placeholder = `Input ${i + 1}`;
          inputField.classList.add("input-field");
          inputContainer.appendChild(inputField);
          const lineBreak = document.createElement("br");
          inputContainer.appendChild(lineBreak);
        }
      });
    </script>
  </body>
</html>
