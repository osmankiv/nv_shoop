document.addEventListener(
  "DOMContentLoaded",
  function () {
    var btn = document.querySelector(".btn");
    var result =
      document.getElementById("result");

    // Function to update the result
    function updateResult() {
      var computedStyle =
        window.getComputedStyle(btn);
      result.innerHTML = `calc(<b>${computedStyle.borderRadius}</b>)`;
    }

    // Update the result when the page loads
    updateResult();
  }
);
