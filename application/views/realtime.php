<?php
// foreach ($sensor as $key => $value) {
// 	echo $value->data_sensor;
// 	echo "<br>";
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table Database</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">No</th>
								<th class="column3">Data Sensor</th>
								<th class="column4">Waktu</th>
							</tr>
						</thead>
						<tbody id="ds">
						    
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>
	<script>
	function formatdate(p){
	    var d = new Date(parseInt(p));
var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

var date = d.getDate() + " " + month[d.getMonth()] + ", " + d.getFullYear();
var time = d.toLocaleTimeString().toLowerCase();

console.log(date + " at " + time);
return (date + " at " + time)
	}
	    $(document).ready( () => {
	        setInterval(() => {
	            rel();
	        }, 1200);
	    })
	    
	    function rel() {
	        $('#ds').empty();
	        fetch('/index.php/simpan/realtime')
              .then(response => response.json())
              .then(data => {
                  console.log('test',data)
                   let rows = '';
                   data.map((item,idx) => {
                       const waktu = formatdate(item.waktu)
                       rows += '<tr>'+
                                  '<td>'+(idx+1)+'</td>'+
                                  '<td>'+item.data_sensor+'</td>'+
                                  '<td>'+waktu+'</td>'+
                              '</tr>'
                   })
              $('#ds').append(rows);
              });
	    }
	</script>

</body>
</html>