
<label>Time Server : </label>
<input type="text" name="result" id="result" style="width:250px;">


<script type="text/javascript">
  var source = new EventSource("idex.php");
  source.onmessage = function(event) //Callback ketika sever mengirim event
  {
    document.getElementById("result").value = event.data;
    console.log(event.data)
  };
  // source.addEventListener("message", function(event) {
  //   console.log(event.data);
  //   document.getElementById("result").value = event.data;
  // }, false);
</script>