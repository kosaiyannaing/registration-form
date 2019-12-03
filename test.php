<!DOCTYPE html>
<html lang="en">
<head>
<title>jQuery Get the Value of an Input Text Box</title>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
    // Get value on button click and show alert
    $("#myBtn").click(function(){
        $("#hello").html($("#world").html());
        $("#world").html("ok");
    });
});
</script>
</head>
<body>
    <div id="hello">Hello</div>
    <div id="world">World</div>
    <button type="button" id="myBtn">Show Value</button>

</body>
</html>
