<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Aggregate calculator</h2>
  <!-- <form class="needs-validation" novalidate> -->
    <div class="form-group">
      <label for="mmark">Matric marks:</label>
      <input type="text" class="form-control" id="mmark" placeholder="Matric marks" name="mmark" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="fmark">Fsc Marks:</label>
      <input type="text" class="form-control" id="fmark" placeholder="Enter Fsc Marks" name="fmark" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
  
    <div class="form-group">
      <label for="tmark">Test Marks:</label>
      <input type="text" class="form-control" id="tmark" placeholder="Enter Test Marks" name="tmark" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
  <!-- </form> -->

  <input type="text" class="form-control" id="total" placeholder="" name="" disabled>
</div>



<script>
$("#submit").on("click",function()
{
var data = 
{
matric : $("#mmark").val(),
fsc : $("#fmark").val(),
test : $("#tmark").val()
};
$.ajax({
				url: "partials/agregate.php",
				type: "POST",
				data: data,
				success: function(res){
					console.log(res)
          $("#total").val(res);
				}
			});
});
</script>
</body>
</html>
