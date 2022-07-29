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
<style>
	.judul {
		background: #f50101;
		background: -webkit-linear-gradient(45deg, #031368, #c4c4c4);
		background: -o-linear-gradient(45deg, #031368, #c4c4c4);
		background: -moz-linear-gradient(45deg, #031368, #c4c4c4);
		background: linear-gradient(45deg, #031368, #c4c4c4);
		width: 70vw;
		padding: 30px;
		margin: auto;
		text-align: center;
		border-radius: 5%;
	}

	a {
		text-decoration: none;
	}

	a:hover {
		text-decoration: underline;
	}

	button {
		border: 0px;
		padding: 5px;
	}

	button:hover {
		background-color: #ccc;
		cursor: pointer;
	}

	.table {
		border-collapse: collapse;
	}

	.table tr th,
	.table tr td {
		padding: 5px;
	}

	/*
Code by YukCoding Tutor
www.yukcoding.id
*/

	/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
	* {
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}

	body,
	html {
		height: 100%;
		font-family: sans-serif;
	}

	/* ------------------------------------ */
	a {
		margin: 0px;
		transition: all 0.4s;
		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		-moz-transition: all 0.4s;
	}

	a:focus {
		outline: none !important;
	}

	a:hover {
		text-decoration: none;
	}

	/* ------------------------------------ */
	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		margin: 0px;
	}

	p {
		margin: 0px;
	}

	ul,
	li {
		margin: 0px;
		list-style-type: none;
	}


	/* ------------------------------------ */
	input {
		display: block;
		outline: none;
		border: none !important;
	}

	textarea {
		display: block;
		outline: none;
	}

	textarea:focus,
	input:focus {
		border-color: transparent !important;
	}

	/* ------------------------------------ */
	button {
		outline: none !important;
		border: none;
		background: transparent;
	}

	button:hover {
		cursor: pointer;
	}

	iframe {
		border: none !important;
	}




	/*//////////////////////////////////////////////////////////////////
[ Utiliti ]*/






	/*//////////////////////////////////////////////////////////////////
[ Table ]*/

	.limiter {
		width: 100%;
		margin: 0 auto;
	}

	.container-table100 {
		width: 100%;
		min-height: 100vh;
		background: #fdfdfd;
		background: -webkit-linear-gradient(45deg, #031368, #c4c4c4);
		background: -o-linear-gradient(45deg, #031368, #c4c4c4);
		background: -moz-linear-gradient(45deg, #031368, #c4c4c4);
		background: linear-gradient(45deg, #031368, #c4c4c4);

		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-wrap: wrap;
		padding: 33px 30px;
	}

	.wrap-table100 {
		width: 100%;
	}

	table {
		border-spacing: 1;
		border-collapse: collapse;
		background: white;
		border-radius: 10px;
		overflow: hidden;
		width: 100%;
		margin: 0 auto;
		position: relative;
	}

	table * {
		position: relative;
	}

	table td,
	table th {
		padding-left: 8px;
	}

	table thead tr {
		height: 60px;
		background: #36304a;
	}

	table tbody tr {
		height: 50px;
	}

	table tbody tr:last-child {
		border: 0;
	}

	table td,
	table th {
		text-align: left;
	}

	table td.l,
	table th.l {
		text-align: right;
	}

	table td.c,
	table th.c {
		text-align: center;
	}

	table td.r,
	table th.r {
		text-align: center;
	}


	.table100-head th {
		font-family: OpenSans-Regular;
		font-size: 18px;
		color: #fff;
		line-height: 1.2;
		font-weight: unset;
	}

	tbody tr:nth-child(even) {
		background-color: #f5f5f5;
	}

	tbody tr {
		font-family: OpenSans-Regular;
		font-size: 15px;
		color: #808080;
		line-height: 1.2;
		font-weight: unset;
	}

	tbody tr:hover {
		color: #555555;
		background-color: #f5f5f5;
		cursor: pointer;
	}



	@media screen and (max-width: 992px) {
		table {
			display: block;
		}

		table>*,
		table tr,
		table td,
		table th {
			display: block;
		}

		table thead {
			display: none;
		}

		table tbody tr {
			height: auto;
			padding: 37px 0;
		}

		table tbody tr td {
			padding-left: 40% !important;
			margin-bottom: 24px;
		}

		table tbody tr td:last-child {
			margin-bottom: 0;
		}

		table tbody tr td:before {
			font-family: OpenSans-Regular;
			font-size: 14px;
			color: #999999;
			line-height: 1.2;
			font-weight: unset;
			position: absolute;
			width: 40%;
			left: 30px;
			top: 0;
		}

		table tbody tr td:nth-child(1):before {
			content: "Nomor";
		}

		table tbody tr td:nth-child(2):before {
			content: "Data Sensor";
		}

		table tbody tr td:nth-child(3):before {
			content: "Waktu";
		}

		table tbody tr td:nth-child(4):before {
			content: "Action";
		}

		table tbody tr td:nth-child(5):before {
			content: "Quantity";
		}

		table tbody tr td:nth-child(6):before {
			content: "Total";
		}

		.column4,
		.column5,
		.column6 {
			text-align: left;
		}

		.column4,
		.column5,
		.column6,
		.column1,
		.column2,
		.column3 {
			width: 100%;
		}

		tbody tr {
			font-size: 14px;
		}
	}

	@media (max-width: 576px) {
		.container-table100 {
			padding-left: 15px;
			padding-right: 15px;
		}
	}


	body {
		font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
	}



	/* dd */
	.footer {
		width: 100%;
		display: flex;
		justify-content: center;
		padding: 10px 0;
	}
</style>

<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100" style="margin-top: 5vh;">
				<div class="judul">
					<h1>Memboemi Cafe</h1>
					<h2>Pencatatan Volume Tandon Air </h2>
				</div>
				<div class="table100" style="margin-top: 25vh">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">No</th>
								<th class="column3">Data Sensor</th>
								<th class="column4">Waktu</th>
								<th class="column1">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							foreach ($sensor as $key => $value) {
								$no++;
							?>
								<tr>
									<td class="column1"><?= $no; ?></td>
									<td class="column3"><?= $value->data_sensor; ?> L</td>
									<td class="column4"><?= date("d-M-Y H:i:s", $value->waktu); ?></td>
									<td class="column1"><a class="btn" href="#" onclick="deletes(<?= $value->id_sensor; ?>)">Delete</a></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="mx-auto footer">
			<span id="power" style="padding-right: 10px;">Powered By</span>
			<a href="https://github.com/kevadamar" target="_blank">IM3 Oreedo</a>
			<b style="padding: 0 10px;">&</b>
			<a href="https://kevadamarg.com" target="_blank">Keva Damar Galih</a>
			<button onclick="logot()">Logout</button>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="/js/main.js"></script>
	<script>
		function logot() {
			window.localStorage.removeItem('login')
			window.location.reload()
		}

		function routto() {
			window.location.href = 'login'
		}

		function deletes(id) {
			console.log(id, '<?php echo $_SERVER['PHP_SELF']; ?>')
			if (confirm("Are you sure you want to delete this?"))
				fetch('<?php echo $_SERVER['PHP_SELF']; ?>'.replace('/tampilan','') + '/delete?id=' + id)
				.then(response => response)
				.then(data => {
					console.log(data, 'k')
					alert('success delete');
					window.location.reload();
				})
		}

		document.getElementById('power').innerHTML = 'Powered By'
		const getLocal = window.localStorage.getItem('login')

		if (!getLocal) {
			routto()
		}
	</script>

</body>

</html>