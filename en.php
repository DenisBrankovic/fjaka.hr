<?php
		
	if(isset($_POST["sbmtBtn"])){
		setcookie("language", "english", time() + 31536000); 
	}
	
	if(isset($_COOKIE["language"])){ 
		if($_COOKIE["language"] == "croatian"){
			header("location: index.php"); 
		}
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style/homePage.css">
	<link rel="stylesheet" type="text/css" href="style/header_footer.css">

	<link rel="shortcut icon" type="image/png" href="pictures/logoIcon.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">

	<title>Fjaka - Cleaning services mobile app for houses, apartments, villas, rooms, business premises, boats and others</title>
	<style>
		*{
			box-sizing: border-box;
		}
	</style>
</head>
<body>
	<div id="top">
		<header id="headerTop">
			<form class="languageBtn" action="index.php" method="POST">
				<input type="submit" name="sbmtBtn" class="croBtn" value=""/>
			</form>
			<div id="logoContainer">
					<a href="#"><img id="logo" src="pictures/logo.png"></a>
				</div>
			<div id="headerBottom">
				
				<a href="#descriptionWrapper">About</a>
				<a href="#about">Our Services</a>
				<a href="#featuresWrapper">Features</a>
				<a href="#sliderWrapper">App</a>
			</div>
			<div id="hamburger">
				<div id="hamburgerTop" class="hamburgerClosed"></div>
				<div id="hamburgerMiddle" class="hamburgerClosed"></div>
				<div id="hamburgerBottom" class="hamburgerClosed"></div>
			</div>
		</header>
			<div id="mobileMenu" class="mobileMenuClosed">
				<a href="#" class="mobileLinks">
					<form class="languageBtnMobile" action="index.php" method="POST">
						<input type="submit" name="sbmtBtn" class="croBtn" value=""/>
					</form>
				</a>
				<a href="#" class="mobileLinks">Home</a>
				<a href="#descriptionWrapper" class="mobileLinks">About</a>
				<a href="#about" class="mobileLinks">Our Services</a>
				<a href="#featuresWrapper" class="mobileLinks">Services</a>
				<a href="#sliderWrapper" class="mobileLinks">App</a>
			</div>
		<div id="topWrapper">
			<div id="topLeft">
				<img id="smartphone" src="pictures/phoneEdited.png">
			</div>
			<div id="topRight">
				<h1 id="title">We are fjaka.hr</h1>
				<p class="topWrapperText">Download the app and order a cleaning service.</p>
				<p class="topWrapperText">We offer all kinds of cleaning services, from house or office cleaning to cleaning schools, gyms or boats.</p>
				<div class="downloadContainer">
					<a href="https://www.apple.com/app-store/" target="_blank">
						<div class="downloadLinks">
							<div class="appStoreContainer">
								<img class="appStore" src="pictures/appleIcon.png" alt="appleIcon">
							</div>
							<span>APP STORE</span>
						</div>
					</a>
					<a href="https://play.google.com/store/games?hl=en&gl=US" target="_blank">
						<div class="downloadLinks">
							<div class="appStoreContainer">
								<img class="googlePlay" src="pictures/playStore.png">
							</div>
							<span>PLAY STORE</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
		<div id="descriptionWrapper">
			<h1>About Us</h1>
			<div id="descriptionContainerTop">
				<p>Fjaka.hr is a cleaning service company. Download our mobile app and simply order any kind of cleaning service you may need. The app is supported by Android and iOS devices. Free and easy to use, fjaka.hr will bring professional and high quality cleaning service to your doorstep. All you need to do is complete a simple registration, make an appointment and our teams will be at your place at the scheduled time doing the work at the highest level. <br>
				Whether you need to have your offices or apartment cleaned, or you need the cleaning of school premises or gym, we have you covered. Whether it’s time to have your carpet cleaned or you’ve been postponing getting your car to a carwash because you just can’t seem to get the time to do it, simply open the Fjaka app, pick a date and time and you can consider the job done.</p>
				<img id="descriptionTopImg" src="pictures/cleaningLadyMain.png">
			</div>
			<div class="descriptionContainer">
				<img src="pictures/renovation.jpg">
				<p>You’ve just finished renovating your offices and you’re looking at several days of arduous cleaning work, knowing that every day spent on cleaning will be a business day lost? Select a date and time in your Fjaka app and have our teams do the work while you to focus on your business planning.</p>
			</div>
			<div class="descriptionContainer" id="descContMiddle">
				<p>Does cleaning windows and big glass surfaces seem like a never ending job? Order our services and prepare to be amazed!</p>
				<img src="pictures/windows.jpg">
			</div>
			<div class="descriptionContainer">
				<img src="pictures/think.jpg">
				<p>Have you ever tried to calculate how many hours, days and months you’ve spent on cleaning and maintenance work and how much more you could have accomplished during all that lost time? One new mobile app may not be able to revolutionise your business, but it can definitely offer you some extra time you need to do it yourself.</p>
			</div>
		</div>
		<div id="about">
			<h1>Our Services</h1>
			<div class="servicesWrapper">
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/house.png"  alt="icon">
					</div>
						<div class="description">House Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/apartment.png" alt="icon">
					</div>
						<div class="description">Apartment Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/villa.png" alt="icon">
					</div>
						<div class="description">Villa Cleaning</div>
					</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/room.png" alt="icon">
					</div>
						<div class="description">Room Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/office.png" alt="icon">
					</div>
						<div class="description">Office Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/boat.png" alt="icon">
					</div>
						<div class="description">Boat Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/general.png" alt="icon">
					</div>
						<div class="description">Deep Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/wall.png" alt="icon">
					</div>
						<div class="description">Walls and Ceiling Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/oven.png" alt="icon">
					</div>
						<div class="description">Oven Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/carpet.png" alt="icon">
					</div>
						<div class="description">Carpet Cleaning</div>
					</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/spring.png" alt="icon">
					</div>
						<div class="description">Spring Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/renovation.png" alt="icon">
					</div>
						<span class="description">Cleaning After Renovation</span>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/window.png" alt="icon">
					</div>
						<div class="description">Window Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/school.png" alt="icon">
					</div>
						<div class="description">School Cleaning</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/gym.png" alt="icon">
					</div>
						<div class="description" style="padding-top: 7px;">Gym Cleaning</div>
				</div>
			</div>
		</div>
	<div id="middleOne">
			<h1>Features</h1>
		<div id="featuresWrapper">
			<div class="features">
				<h2>Attractive UI</h2>
				<p>Modern, intuitive interface, perfectly tuned to meet the user needs, creates an optimal balance between the simplicity of controls and efficient functionalities.</p>
			</div>
			<div class="features">
				<h2>Speed</h2>
				<p>Developed by the latest programming standards, the app offers a smooth user experience, simple installation process, speed and an attractive design.</p>
			</div>
			<div class="features">
				<h2>Security</h2>
				<p>With all the privacy and personal data protection standard implemented, Fjaka.hr offers transparency and full control over the phone resources that the app uses.</p>
			</div>
			<div class="features">
				<h2>Regular Updates</h2>
				<p>Our team of developers constantly work on finding ways to improve the performance, design and security of the app.</p>
			</div>
			<div class="features">
				<h2>Support</h2>
				<p>Should any kind of difficulties installing and using the app arise, our support team is always at your disposal.</p>
			</div>
			<div class="features">
				<h2>Compatibility</h2>
				<p>Fjaka.hr is compatible with Android and iOS devices and may be downloaded directly to smartphones or from our website.</p>
			</div>
		</div>
	</div>
	<div id="middleTwo">
		<h1>Fjaka App</h1>
		
		<div id="sliderWrapper">
			<span class="sliderArrows">&#139</span>
			<span class="sliderArrows">&#155</span>
			<div id="slider">
				<img class="screenShot" src="pictures/nature.jpg">
				<img class="screenShot" src="pictures/natureWarm.jpg">
				<img class="screenShot" src="pictures/winter.jpg">
				<img class="screenShot" src="pictures/meadow.jpg">
				<img class="screenShot" src="pictures/windmill.jpg">
				<img class="screenShot" src="pictures/theSmile.jpg">
				<img class="screenShot" src="pictures/horse.jpg">
				<img class="screenShot" src="pictures/tomatoes.jpg">
				<img class="screenShot" src="pictures/wineGlasses.jpg">
				<img class="screenShot" src="pictures/trees.jpg">
			</div>
		</div>
	</div>
	<div id="bottom">
		<h2>The afternoon slump got you and there is still heaps of work to be done?<br>Download the app and take that well deserved siesta!</h2>
		<div id="bottomLogoContainer">
			<img id="logoBottom" src="pictures/logoTxt.png">
		</div>
		<div class="downloadContainer">
			<a href="https://www.apple.com/app-store/" target="_blank">
				<div class="downloadLinks">
					<div class="appStoreContainer">
						<img class="appStore" src="pictures/appleIcon.png" alt="appleIcon">
					</div>
					<span>APP STORE</span>
				</div>
			</a>
			<a href="https://play.google.com/store/games?hl=en&gl=US" target="_blank">
				<div class="downloadLinks">
					<div class="appStoreContainer">
						<img class="googlePlay" src="pictures/playStore.png">
					</div>
					<span>PLAY STORE</span>
				</div>
			</a>
		</div>
	</div>
	<footer>
		<div id="logoContainerFooter" class="footerInner">
			<img id="logoFooter" src="pictures/logoIcon.png">
		</div>
		<div id="address" class="footerInner">
			<span id="companyNameFooter">FJAKA</span>
			Petra Petrovića 55<br>
			10000 Zagreb<br>
			Hrvatska<br>
		</div>
		<div id="socialNetworksContainer" class="footerInner">
			<a href="https://facebook.com" target="_black"><img src="pictures/facebook.png"></a>
			<a href="https://instagram.com" target="_black"><img src="pictures/instagram.png"></a>
			<a href="https://linkedin.com" target="_black"><img src="pictures/linkedIn.png"></a>
			<a href="https://twitter.com" target="_black"><img src="pictures/twitter.png"></a>
		</div>
	</footer>
	<script>
			var getMobileMenu = document.getElementById("mobileMenu"); 
			var getHamburger = document.getElementById("hamburger");
			var getMobileLinks = document.getElementsByClassName("mobileLinks");
			
			var mobileMenuIsClosed = true;
			
			getHamburger.addEventListener("click", openMobileMenu);

			// If mobile menu and hamburger is closed it opens them by assigning / removing the corresponding CSS classes

			function openMobileMenu(){
					if(mobileMenuIsClosed == true){
						getMobileMenu.classList.remove("mobileMenuClosed");
						getMobileMenu.classList.add("mobileMenuOpen");
						mobileMenuIsClosed = false;
						hamburgerSwitch(); 
					}else if(mobileMenuIsClosed == false){
						getMobileMenu.classList.remove("mobileMenuOpen");
						getMobileMenu.classList.add("mobileMenuClosed");
						mobileMenuIsClosed = true;
						hamburgerSwitch();

					}
				}

			// Switches the hamburger between open and closed states by assigning and removing the corresponding CSS classes

				function hamburgerSwitch(){
					var getHamburgerTop = document.getElementById("hamburgerTop");
					var getHamburgerMiddle = document.getElementById("hamburgerMiddle");
					var getHamburgerBottom = document.getElementById("hamburgerBottom");

					getHamburgerMiddle.style.opacity = "0"; 

					if(mobileMenuIsClosed == false){
						getHamburgerTop.classList.add("hamburgerTopOpen");
						getHamburgerBottom.classList.add("hamburgerBottomOpen");
						getHamburgerMiddle.style.opacity = "0";
					}else if(mobileMenuIsClosed == true){
						getHamburgerTop.classList.remove("hamburgerTopOpen");
						getHamburgerBottom.classList.remove("hamburgerBottomOpen");
						getHamburgerMiddle.style.opacity = "1"; 
					}
				}

				//Closes the mobile menu and hamburger when one of the mobile menu links is selected

				(function(){for(var mobileLink of getMobileLinks){
						mobileLink.onclick = () => {
							getMobileMenu.classList.remove("mobileMenuOpen");
							getMobileMenu.classList.add("mobileMenuClosed"); 
							mobileMenuIsClosed = true;
							hamburgerSwitch();
						}
					}
				})();			
				

				// Screen shot slider

				var getArrows = document.getElementsByClassName("sliderArrows");
				var getScreenShots = document.getElementsByClassName("screenShot");
				var l = 0;	
				
				
				getArrows[1].onclick = ()=>{
					l++;
					for(var screenShot of getScreenShots){
						if(l == 0){screenShot.style.left = "0px";}
						if(l == 1){screenShot.style.left = "-740px";}
						if(l == 2){screenShot.style.left = "-1480px";}
						if(l == 3){screenShot.style.left = "-2220px";}
						if(l == 4){screenShot.style.left = "-2960px";}
						if(l > 4){l = 4;}
					}
				}

				getArrows[0].onclick = ()=>{
					l--; 
				for(var screenShot of getScreenShots){
						if(l == 0){screenShot.style.left = "0px";}
						if(l == 1){screenShot.style.left = "-740px";}
						if(l == 2){screenShot.style.left = "-1480px";}
						if(l == 3){screenShot.style.left = "-2220px";}
						if(l < 0){l = 0;}
					}
				}
	</script>
</body>
</html>