<!DOCTYPE html>
<html lang="en">

<head>
	<title>Table Database</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->

	<!--===============================================================================================-->
</head>
<style>
	.judul {

		font-family: "Open Sans", sans-serif;
		object-fit: contain;
		font-size: medium;
		color: #fff;
		text-align: left;
		border: 1px solid;
		color: black;
		background: rgba(255, 255, 255, 0.4);
		width: 40vw;
		padding: 10px;
		letter-spacing: 2px;
		border-radius: 6px;
		box-shadow: 1px 12px 55px -8px rgb(0 0 0 / 79%);
		-webkit-box-shadow: 1px 12px 55px -8px rgb(0 0 0 / 79%);
		-moz-box-shadow: 1px 12px 55px -8px rgba(0, 0, 0, 0.79);
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
		background-color: red;
		cursor: pointer;
	}

	.table {
		border-collapse: collapse;
	}

	.table tr th,
	.table tr td {
		padding: 0px;
	}

	* {
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}

	body,
	html {
		/* height: 80%; */
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
		display: none;
		outline: none;
		border: none !important;
	}

	textarea {
		display: none;
		outline: none;
	}

	textarea:focus,
	input:focus {
		border-color: flex !important;
	}

	/* ------------------------------------ */
	button {
		outline: none !important;
		border: none;

	}

	button:hover {
		cursor: pointer;
	}


	/*//////////////////////////////////////////////////////////////////
[ Utiliti ]*/






	/*//////////////////////////////////////////////////////////////////
[ Table ]*/

	.limiter {
		width: 100%;
		margin: 0 center;
		font-family: "Open Sans", sans-serif;

		object-fit: contain;

	}

	.container-table100 {
		width: 100%;
		min-height: 96vh;
		font-family: "Open Sans", sans-serif;

		object-fit: contain;


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
		height: 40px;
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
			display: block;
		}

		table tbody tr {
			height: auto;
			padding: 10px 0;
		}

		table tbody tr td {
			padding-left: 40% !important;
			margin-bottom: 10px;
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
			
			left: 0px;
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
			font-size: 15px;
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
		justify-content: right;
		color: black;
		position: absolute;
	}

	.header {

		width: 100%;
		display: flex;
		justify-content: right;
		position: absolute;

	}

	.wrapper {
		position: absolute;
		top: 0;
		z-index: -10;
		width: 100%;
		height: 100vh;
	}

	.wrappers {
		top: 0;
		margin: auto;
		position: relative;
		width: 50vw;
		height: 100%;
	}

	/* Extra small devices (phones, 600px and down) */
	@media only screen and (max-width: 600px) {
		.wrappers {
			width: 100vw;
		}

		table thead tr {
			height: 100px;
			padding: 5px;
		}

		.judul {
			width: 100%;
		}
	}

	/* Small devices (portrait tablets and large phones, 600px and up) */
	@media only screen and (min-width: 600px) {
		.wrappers {
			width: 70vw;
		}

		table thead tr {
			height: 100px;
			padding: 5px;
		}

		.judul {
			width: 100%;
		}
	}

	/* Medium devices (landscape tablets, 768px and up) */
	@media only screen and (min-width: 768px) {
		.wrappers {
			width: 65vw;
		}

		table thead tr {
			height: 100px;
			padding: 5px;
		}

		.judul {
			width: 100%;
		}
	}

	/* Large devices (laptops/desktops, 992px and up) */
	@media only screen and (min-width: 992px) {
		.wrappers {
			width: 60vw;
		}
	}

	/* Extra large devices (large laptops and desktops, 1200px and up) */
	@media only screen and (min-width: 1200px) {
		.wrappers {
			width: 50vw;
		}
	}
</style>

<body>

	<div class="wrappers">
		
	</div>
			<div class="mx-auto header">
				<button onclick="logot()">
					<h3>Logout</h3>
				</button>
			</div>
		<div class="limiter">
			<img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjWzM0wQLbylRGzF1q8OVLOIJZFC-B4H6-WVqk7oJf8_HFZSp_K5Df2OPfZwAzbDSUr3fBmNN3PTRMULffOaQDDWfLMS6enCsW9qcbPE95qiElHfSS6riHyGXHuoqD6CuuGnqW1vnZ_2sNTZVuvy2VuvyaBJ5jGdYPjOqpRFFm5QjRA2X0H3AirmQ/w1600/lokasi-harga-menu-memboemi-coffee-tigaraksa-tangerang.jpg" class="wrapper" />
			<div class="container-table100">
				<div class="wrap-table100" style="margin-top: 5vh;">
					<div class="judul">
						<!-- <img src="https://drive.google.com/uc?export=view&id=1O6iXALNY1x1-CYTB56Lzg3hEVnr5hRXw"> -->
						<h1>Memboemi Cafe</h1>
						<h2>Pencatatan Volume Tandon Air </h2>
					</div>
					<div class="table100" style="margin-top: 5vh">
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
				fetch('<?php echo $_SERVER['PHP_SELF']; ?>'.replace('/tampilan', '') + '/delete?id=' + id)
				.then(response => response)
				.then(data => {
					console.log(data, 'k')
					alert('success delete');
					window.location.reload();
				})
		}


		const getLocal = window.localStorage.getItem('login')

		if (!getLocal) {
			routto()
		}

		window.onload = function() {
			var backgroundImg = ["https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjWzM0wQLbylRGzF1q8OVLOIJZFC-B4H6-WVqk7oJf8_HFZSp_K5Df2OPfZwAzbDSUr3fBmNN3PTRMULffOaQDDWfLMS6enCsW9qcbPE95qiElHfSS6riHyGXHuoqD6CuuGnqW1vnZ_2sNTZVuvy2VuvyaBJ5jGdYPjOqpRFFm5QjRA2X0H3AirmQ/w1600/lokasi-harga-menu-memboemi-coffee-tigaraksa-tangerang.jpg",
				"https://i0.wp.com/blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhSqBc6S27kZeYtDXUAH5wVLnO7K2vBN_DyIsRc24HO95xUikqywKyWcxEw6syVhPtNEMh-9HwARa0B8E5BhLXdmWnjgeRkcUEvykzJQaevTuNJCn8lZUQu8Qcit-d64lrxXkaHTie2rF6hpPfrJzYcQZyqGXx8Xa6Xlyke64OGZTg0QIK3HBJdwQ/w640-h640/memboemi-coffee-and-resto-tigaraksa-tangerang.jpg?resize=640%2C640&ssl=1"
			]

			setInterval(changeImage, 2000);

			function changeImage() {
				var i = Math.floor((Math.random() * 2));

				document.querySelector('.wrapper').src = backgroundImg[i];

			}
		}
	</script>

</body>

</html>