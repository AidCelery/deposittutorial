<html>
	<head>
		<title>
			IGProAid Online Shop
		</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			* 	{
				box-sizing: border-box;
				}
				
			body{
				font-family: Times New Roman;
				margin: 0;
				background-image: url("A2.jpg");
						background-repeat: no-repeat;
						background-attachment: fixed;
						background-size: 1360px 1080px;
						padding: 10px;
						color: white;
						border: 5px solid gray;
				}
				
			.header	{
					padding: 30px;
					text-align: center;
					
					color: black;
					}
			
			ul 	{
				list-style-type: none;
				margin: 0;
				padding: 10;
				overflow: hidden;
				background-color: gray;
				}
			li 	{
				float: left;
				}
			li a, .dropbtn 	{
							display: inline-block;
							color: white;
							text-align: center;
							padding: 14px 82px;
							text-decoration: none;
							}
			li a:hover, .dropdown:hover .dropbtn 	{
													background-color: red;
													}
			li.dropdown {
						display: inline-block;
						}
			.dropdown-content 	{
								display: none;
								position: absolute;
								background-color: lightblue;
								min-width: 160px;
								box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
								z-index: 1;
								}
			.dropdown-content a {
								color: black;
								padding: 12px 76px;
								text-decoration: none;
								display: block;
								text-align: center;								
								}
			.dropdown-content a:hover	{background-color: gray}
			.dropdown:hover .dropdown-content 	{
												display: block;
												}
			.welcome	{
						background-color: gray;
						}
			.onsale	{
					
					}
			#rig{
				max-width:900px;
				margin:0 auto;
				padding:0;
				font-size:0;
				list-style:none;
				background-color:#ffffff;
				}
			#rig li {
					display: inline-block;
					*display:inline;/*for IE6 - IE7*/
					width:25%;
					vertical-align:middle;
					box-sizing:border-box;
					margin:0;
					padding:0;
					}
        
			/* The wrapper for each item */
			.rig-cell 	{
						/*margin:12px;
						box-shadow:0 0 6px rgba(0,0,0,0.3);*/
						display:block;
						position: relative;
						overflow:hidden;
						}
        
			/* If have the image layer */
			.rig-img{
					display:block;
					width: 100%;
					height: auto;
					border:none;
					transform:scale(1);
					transition:all 1s;
					}

			#rig li:hover .rig-img 	{
									transform:scale(1.05);
									}
        
			/* If have the overlay layer */
			.rig-overlay{
						position: absolute;
						display:block;
						top: 0;
						left: 0;
						bottom: 0;
						right: 0;
						margin: auto;
						background: #3DC0F1 url(img/link.png) no-repeat center 20%;
						background-size:50px 50px;
						opacity:0;
						filter:alpha(opacity=0);/*For IE6 - IE8*/
						transition:all 0.6s;
						}
			#rig li:hover .rig-overlay	{
										opacity:0.8;
										}

			/* If have captions */
			.rig-text 	{
						display:block;
						padding:0 30px;
						box-sizing:border-box;
						position:absolute;
						left:0;
						width:100%;
						text-align:center;
						text-transform:capitalize;
						font-size:18px;
						font-weight:bold;
						font-family: 'Oswald', sans-serif;
						font-weight:normal!important;
						top:40%;
						color:white;
						opacity:0;
						filter:alpha(opacity=0);/*For older IE*/
						transform:translateY(-20px);
						transition:all .3s;
						}
			#rig li:hover .rig-text {
									transform:translateY(0px);
									opacity:0.9;
									}

			@media (max-width: 9000px) 	{
										#rig li {
												width:25%;
												}
										}

			@media (max-width: 700px) 	{
										#rig li {
												width:33.33%;
												}
										}

			@media (max-width: 550px) 	{
										#rig li {
												width:50%;
												}
										}
			.sign-button{
						float: right;
						}
			.footer {
					padding: 5px;
					text-align: center;
					background: gray;
					}
			@media screen and (max-width: 700px)	{
													.row, .navbar	{   
																	flex-direction: column;
																	}
													}	
													
		</style>
	</head>
	<body>		
		<!-- Header -->
		<div class="header">
		<img src = "IGPro.png">
		<br><br>
		<center>
		<button><a href="register.php"><font color=black>Sign Up</font></a></button>     <button><a href="login.php"><font color=black>Log In</font></a></button>
		</center>
		</div>
		
		<hr color=none>
		
		<!-- Navigation Bar -->
		<ul>
		<li><a href="index.php"><b>HOME</b></a></li>
		<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn"><b>PRODUCTS</b></a>
		<div class="dropdown-content">
			<a href="phones.php">Phones</a>
			<a href="bspeakers.php">Bluetooth Speakers</a>
			
		</div>
		<li><a href="AboutUs.php"><b>ABOUT US</b></a></li>
		<li><a href="ContactUs.php"><b>CONTACT US</b></a></li>
		</li>
		</ul>
		
		<!-- Body -->
		<div class="welcome">
		<center>
		<hr color=none>
		<h1>Welcome to IGProAid's Online Shop!</h1>
		<hr color=none>
		</center>
		</div>
		
		<div class="onsale">
		<hr color=red>
		<h2><center>PHONES ON SALE!</center></h2>
		<ul id="rig">
		<li>
        <a class="rig-cell" href="oppoa3s.php">
            <img class="rig-img" src="a3s.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Oppo A3s 32GB/3GB Red Edition</span>
        </a>
		</li>
		<li>
        <a class="rig-cell" href="lg.php">
            <img class="rig-img" src="g7.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">LG G7 Thin Q 128GB/6GB Variant</span>
        </a>
		</li>
		<li>
        <a class="rig-cell" href="iphonex.php">
            <img class="rig-img" src="iphonex.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">iPhone X 256GB Black</span>
        </a>
		</li>
		<li>
        <a class="rig-cell" href="nex.php">
            <img class="rig-img" src="nex.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Vivo Nex S 128GB/8GB Red</span>
        </a>
		</li>
		<li>
        <a class="rig-cell" href="j7pro.php">
            <img class="rig-img" src="j7pro.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Samsung J7 Pro 32GB/3GB Gold</span>
        </a>
		</li>
		<li>
        <a class="rig-cell" href="mate20.php">
            <img class="rig-img" src="mate20.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Huawei Mate 20 X 128GB/6GB Emerald Green</span>
        </a>
		</li>
		<li>
        <a class="rig-cell" href="findx.php">
            <img class="rig-img" src="findx.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Oppo Find X 256GB/6GB Bordeux Red</span>
        </a>
		</li>
		<li>
        <a class="rig-cell" href="s8.php">
            <img class="rig-img" src="s8.jpg">
            <span class="rig-overlay"></span>
            <span class="rig-text">Samsung Galaxy S8 64GB/6GB Midnight Black</span>
        </a>
		</li>
		</ul>
		</div>
		<hr color=red>
		<hr color=none>
		<!-- Footer -->
		<div class="footer">
		<h5><b>Copyrights &copy2018 - 2019. All Rights Reserved.</b></h5>
		</div>
	</body>
</html>