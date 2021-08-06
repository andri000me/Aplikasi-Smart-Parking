<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/master.css'?>">

    <!-- memanggil font awesome -->
    <script src="https://kit.fontawesome.com/a4b3d6e215.js" crossorigin="anonymous"></script>

    <!-- memanggil bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
    	.full_btn{
    		width: 100%;
    	}
    </style>
</head>

<body>
	<div class="container">
        <div class="row mb-3 mt-3">
            <div class="col-1">
                <i class="fas fa-parking fa-2x"></i>
            </div>

            <div class="col mb-4">
                <h2 class="fw-bold fs-1">Area Parkir</h2>
            </div>

			<h5>Parkir Kosong = 10</h5>
			<h5>Total Parkir = 14</h5>

			<!-- baris 1 -->
			<div class="row mb-3 mt-3">
				<div class="col-6">
					<button type="button" class="btn btn-light border rounded-pill full_btn">A-1</button>
				</div>
				<div class="col-6">
					<button type="button" class="btn btn-light border rounded-pill full_btn">B-1</button>
				</div>
			</div>

			<!-- baris 2 -->
			<div class="row mb-3">
				<div class="col-6">
					<button type="button" class="btn btn-danger border rounded-pill full_btn">A-2</button>
				</div>
				<div class="col-6">
					<button type="button" class="btn btn-danger border rounded-pill full_btn">B-2</button>
				</div>
			</div>

			<!-- baris 3 -->
			<div class="row mb-3">
				<div class="col-6">
					<button type="button" class="btn btn-light border rounded-pill full_btn">A-3</button>
				</div>
				<div class="col-6">
					<button type="button" class="btn btn-light border rounded-pill full_btn">B-3</button>
				</div>
			</div>

			<!-- baris 4 -->
			<div class="row mb-3">
				<div class="col-6">
					<button type="button" class="btn btn-danger border rounded-pill full_btn">A-4</button>
				</div>
				<div class="col-6">
					<button type="button" class="btn btn-light border rounded-pill full_btn">B-4</button>
				</div>
			</div>

			<!-- baris 5 -->
			<div class="row mb-3">
				<div class="col-6">
					<button type="button" class="btn btn-light border rounded-pill full_btn">A-5</button>
				</div>
				<div class="col-6">
					<button type="button" class="btn btn-light border rounded-pill full_btn">B-5</button>
				</div>
			</div>

			<!-- baris 6 -->
			<div class="row mb-3">
				<div class="col-6">
					<button type="button" class="btn btn-light border rounded-pill full_btn">A-6</button>
				</div>
				<div class="col-6">
					<button type="button" class="btn btn-light border rounded-pill full_btn">B-6</button>
				</div>
			</div>

			<!-- baris 7 -->
			<div class="row mb-3">
				<div class="col-6">
					<button type="button" class="btn btn-light border rounded-pill full_btn">A-7</button>
				</div>
				<div class="col-6">
					<button type="button" class="btn btn-danger border rounded-pill full_btn">B-7</button>
				</div>
			</div>
        </div>
		</div>
	</div>
</body>
</html>