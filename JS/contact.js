// SUBMIT FORM VALIDATION
$("form").on("submit", function (e) {
    e.preventDefault();
    var name = $("#name").val();
    alert(
      "Hi" + " " + name + ",\nThanks for the feedback. " + "\nBy i-Wakili Advocates Company. " 
    );
    document.querySelector("form").reset();
  });