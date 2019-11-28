<!DOCTYPE html>
<html lang="en">
<head>
<title>jQuery Get the Value of an Input Text Box</title>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
    // Get value on button click and show alert
    $("#myBtn").click(function(){
        var str = $("#myInput").val();
        var a=$("#a").val();
        alert(str+a);
    });
});
</script>
</head>
<body>
    <input type="text" id="myInput" required>
    <input type="text" id="a" required>
    <button type="button" id="myBtn">Show Value</button>
</body>
</html>