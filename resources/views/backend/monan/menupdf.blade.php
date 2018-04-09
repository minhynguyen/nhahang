<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
    <link rel="stylesheet" href="{{ asset ('theme/menu/js/vendor/jquery-1.11.2.min.js') }}">
    <link rel="stylesheet" href="{{ asset ('theme/menu/js/vendor/bootstrap.min.js') }}">
    <link rel="stylesheet" href="{{ asset ('theme/menu/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('theme/menu/css/bootstrap.min.css') }}">
  
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <meta charset="utf-8">
    <style type="text/css">
    	body{
    		font-family: 'Dancing Script', cursive;
    		background: #F6B410;
    		padding: 30px;
    	}
    	.col-border{
    		border-right: dashed;
    	}
    	.img-ava{
    		padding-bottom: 20px;
    		border-bottom: dashed;
    	}
    	.img-ava-top{	
    		padding-top: 20px;
    	}
    	.w3-right-align{
    		text-align: right;
    	}
    	.w3-left-align{
    		text-align: left;
    	}
    	.w3-center{
    		text-align: center;
    	}
    	.cost::before {
    		content: ""
    	}
    </style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-border">
			<div class="img-ava">
				<h1 class="w3-center">MENU NHÀ HÀNG MÓN VIỆT</h1>
				<h1 class="w3-center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h1>
			</div>
			@foreach ($dsmonan as $ma)
			<div class="name_tittle">
				<h1><b>{{$ma->lma_ten}}</b></h1>
			</div>
			<div class="row img-ava">
				<div class="col-lg-7 w3-left-align ">
					
					<h3>{{$ma->ma_ten}}</h3>
					
				</div>
				<div class="col-lg-5 w3-right-align">
					<h3 class="cost">{{$ma->ma_dongia}} VNĐ</h3>
					<div class="img-ava img-ava-top">
						<img class="img-responsive" height="100px" width="100px" src="{{ asset('upload/' . $ma->ma_hinhanh)}}">
					</div>
				</div>
			</div>
			
			@endforeach
			<div class="img-ava">
				<h1 class="w3-center">MENU NHÀ HÀNG MÓN VIỆT</h1>
				<h1 class="w3-center">RẤT HÂN HẠNH PHỤC VỤ QUÝ KHÁCH</h1>
			</div>
			
			
		</div>
		
		
</div>
</body>
</html>