<?php
	
	if(isset($_POST["sbmtBtn"])){
		setcookie("language", "croatian", time() + 31536000);  
	}
	
	if(isset($_COOKIE["language"])){
		if($_COOKIE["language"] == "english"){
			header("location: en.php"); 
		}
	}	
?>

<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style/homePage.css">
	<link rel="stylesheet" type="text/css" href="style/header_footer.css">

	<link rel="shortcut icon" type="image/png" href="pictures/logoIcon.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">

	<title>Fjaka - Mobilna Aplikacija za Čišćenje Kuće, Apartmana, Ville, Sobe, Poslovnih Prostora, Brodova i ostalih</title>
	<style>
		*{
			box-sizing: border-box;
		}
	</style>
</head>
<body>
	<div id="top">
		<header id="headerTop">
			<form class="languageBtn" action="en.php" method="POST">
				<input type="submit" name="sbmtBtn" class="engBtn" value=""/>
			</form>
			<div id="logoContainer">
					<a href="#"><img id="logo" src="pictures/logo.png"></a>
				</div>
			<div id="headerBottom">

				<a href="#descriptionWrapper">O nama</a>
				<a href="#about">Naše usluge</a>
				<a href="#featuresWrapper">Karakteristike</a>
				<a href="#sliderWrapper">Aplikacija</a>
			</div>
			<div id="hamburger">
				<div id="hamburgerTop" class="hamburgerClosed"></div>
				<div id="hamburgerMiddle" class="hamburgerClosed"></div>
				<div id="hamburgerBottom" class="hamburgerClosed"></div>
			</div>
		</header>
			<div id="mobileMenu" class="mobileMenuClosed">
				<a href="#" class="mobileLinks">
					<form class="languageBtnMobile" action="en.php" method="POST">
						<input type="submit" name="sbmtBtn" class="engBtn" value=""/>
					</form>
				</a>
				<a href="#" class="mobileLinks">Početna</a>
				<a href="#descriptionWrapper" class="mobileLinks">O nama</a>
				<a href="#about" class="mobileLinks">Naše usluge</a>
				<a href="#featuresWrapper" class="mobileLinks">Karakteristike</a>
				<a href="#sliderWrapper" class="mobileLinks">Aplikacija</a>
			</div>
		<div id="svgContainer">
				<a href="contact.php">
					<img id="cleaningLadyIcon" src="pictures/cleaningLady.png">
				</a>
				<svg>
					<a href="contact.php"><polygon id="contactLink" points="0,0 600,0 600,400"/></a>
				</svg>
				<a href="contact.php" id="contactText">Registracija za čistačice</a>
		</div>
		<div id="topWrapper">
			<div id="topLeft">
				<img id="smartphone" src="pictures/phoneEdited.png">
			</div>
			<div id="topRight">
				<h1 id="title">Mi smo fjaka.hr</h1>
				<p class="topWrapperText">Preuzmite aplikaciju i naručite bilo koju uslugu čišćenja.</p>
				<p class="topWrapperText">Od poslovnih i stambenih prostora, školskih i sportskih objekata do plovila.</p>
				<p class="topWrapperText">Sve vrste čišćenja, profesionalno i efikasno, uz primjenu savremenih metoda.</p>
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
			<h1>O nama</h1>
			<div id="descriptionContainerTop">
				<p>Fjaka.hr je servis za pružanje usluga čišćenja. Nudimo jedinstvenu uslugu u Hrvatskoj, mogućnost naručivanja svih vrsta čišćenja putem mobilne aplikacije. Podržana na Android i iOS uređajima, besplatna i jednostavna za korištenje, fjaka.hr će vam učiniti dostupnom vrhunsku uslugu svih vrsta čišćenja. Sve što je potrebno uraditi je, poslije jednostavne registracije, zakazati termin i naše uslužno i profesionalno osoblje dolazi u dogovoreno vrijeme.<br>
				Bilo da vam je potrebno čišćenje poslovnog prostora, apartmana i soba za iznajmljivanje, školskih prostorija ili sportskih sala, čišćenje svih vrsta tepiha, etisona i drugih podnih prostirki ili pranje automobila, samo otvorite Fjaka aplikaciju, odaberite datum i vrijeme koje vam odgovara i posao možete smatrati obavljenim.<br></p>
				<img id="descriptionTopImg" src="pictures/cleaningLadyMain.png">
			</div>
			<div class="descriptionContainer">
				<img src="pictures/renovation.jpg">
				<p>Upravo ste obavili renoviranje poslovnog prostora, i pred vama je ogroman posao čišćenja prostorija, a svaki izgubljeni radni sat znači gubitak novca? Odaberite termin u vašoj Fjaka aplikaciji i, dok naše ekipe obavljaju raščišćavanje, vi se možete posvetiti organizaciji posla.</p>
			</div>
			<div class="descriptionContainer" id="descContMiddle">
				<p>Čini vam se da se prozori i velike staklene površine na vašim prostorijama prljaju brže nego što stižete da ih očistite? Angažujte Fjaka servis za čišćenje i pripremite se da budete oduševljeni!</p>				
				<img src="pictures/windows.jpg">
			</div>
			<div class="descriptionContainer" id="descContMiddleMobile">
				<img src="pictures/windows.jpg">
				<p>Čini vam se da se prozori i velike staklene površine na vašim prostorijama prljaju brže nego što stižete da ih očistite? Angažujte Fjaka servis za čišćenje i pripremite se da budete oduševljeni!</p>				
			</div>
			<div class="descriptionContainer">
				<img src="pictures/think.jpg">
				<p>Da li ste ikada pokušali da izračunate koliko ste radnih sati, dana i mjeseci utrošili na održavanje i šta ste sve za to vrijeme mogli postići? Možda jedna nova mobilna aplikacija neće predstavljati revoluciju u vašem poslovanju, ali će vam svakako pružiti više vremena da revoluciju sami kreirate.</p>
			</div>
		</div>
		<div id="about">
			<h1>Naše usluge</h1>
			<div class="servicesWrapper">
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/house.png"  alt="icon">
					</div>
						<div class="description">Čišćenje kuće</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/apartment.png" alt="icon">
					</div>
						<div class="description">Čišćenje apartmana</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/villa.png" alt="icon">
					</div>
						<div class="description">Čišćenje vile</div>
					</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/room.png" alt="icon">
					</div>
						<div class="description">Čišćenje soba</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/office.png" alt="icon">
					</div>
						<div class="description">Čišćenje ureda</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/boat.png" alt="icon">
					</div>
						<div class="description">Čišćenje plovila</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/general.png" alt="icon">
					</div>
						<div class="description">Dubinsko čišćenje</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/wall.png" alt="icon">
					</div>
						<div class="description">Čišćenje stropova i zidova</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/oven.png" alt="icon">
					</div>
						<div class="description">Čišćenje pećnice</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/carpet.png" alt="icon">
					</div>
						<div class="description">Čišćenje tepiha</div>
					</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/spring.png" alt="icon">
					</div>
						<div class="description">Proljetno čišćenje</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/renovation.png" alt="icon">
					</div>
						<span class="description">Čišćenje nakon preuređenja</span>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/window.png" alt="icon">
					</div>
						<div class="description">Čišćenje prozora</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/school.png" alt="icon">
					</div>
						<div class="description">Čišćenje škole</div>
				</div>
				<div class="serviceContainer">
					<div class="service">
						<img src="pictures/cleaningIcons/gym.png" alt="icon">
					</div>
						<div class="description" style="padding-top: 7px;">Čišćenje sportskih dvorana</div>
				</div>
			</div>
		</div>
	<div id="middleOne">
			<h1>Karakteristike</h1>
		<div id="featuresWrapper">
			<div class="features">
				<h2>Jednostavnost</h2>
				<p>Intuitivan i moderan interface, kreiran po mjeri korisnika, pruža optimalan balans jednostavnosti i funkcionalnosti.</p>
			</div>
			<div class="features">
				<h2>Brzina</h2>
				<p>Izrađena u skladu s najnovijim programskim trendovima, aplikacija pruža maksimalno korisničko iskustvo. Jednostavna instalacija, 
				brzina, atraktivan dizajn.</p>
			</div>
			<div class="features">
				<h2>Sigurnost</h2>
				<p>Uz primjenu svih standarda privatnosti i zaštite podataka, Fjaka.hr korisniku nudi potpunu transparentnost i kontrolu nad resursima telefona koje aplikacija koristi.</p>
			</div>
			<div class="features">
				<h2>Redovna nadogradnja</h2>
				<p>Naš tim programera konstantno radi na unapređenju aplikacije, kako na polju funkcionalnosti, tako i na polju sigurnosti.</p>
			</div>
			<div class="features">
				<h2>Podrška</h2>
				<p>Ukoliko imate bilo kakvih poteškoća sa instalacijom ili korištenjem, naši operateri za podršku vam stoje na raspolaganju.</p>
			</div>
			<div class="features">
				<h2>Kompatibilnost</h2>
				<p>Fjaka.hr je dostupna na Android i iOS uređajima, uz mogućnost preuzimanja direktno s telefona ili s kompjutera putem naše web stranice.</p>
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
		<h2>Uhvatila vas je popodnevna fjaka, a čeka vas brdo posla?<br>Preuzmite aplikaciju i pružite sebi odmor koji zaslužujete!</h2>
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
			var getSvg = document.getElementById("contactLink");

			var mobileMenuIsClosed = true;
			
			getHamburger.addEventListener("click", openMobileMenu);

			//Contact link in the upper right corner is a svg element and its stylisation is partly done in CSS, partly in this function 
			
			function contactLinkColors(baseColor, textColor, onHoverColor){
					let getCleaningLadyIcon = document.getElementById("cleaningLadyIcon");
					let getContactText = document.getElementById("contactText");

					getSvg.style.fill = baseColor;
					getCleaningLadyIcon.onmouseover = () => {getSvg.style.fill = onHoverColor;};
					getContactText.onmouseover = () => {getSvg.style.fill = onHoverColor;};
					getContactText.style.color = textColor;
					getSvg.onmouseover = () => {getSvg.style.fill = onHoverColor}; 
					getSvg.onmouseout = () => {getSvg.style.fill = baseColor;};
				}
								
				contactLinkColors("#E60013", "white", "darkorange");

				

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

				/* The triangle in the corner is a svg element, which is placed inside a square shaped div(id = svgContainer). Its sides match the size of the
				 parent div's width and height. On window resize the function measures the current div's width and height by calling the offsetWidth and offsetHeight
				 properties and adjusts the svg dimensions to always match the sides of its parent element. */

				function resize(){
								
					const svgContainer = document.getElementById("svgContainer");

					if(svgContainer){
						var containerWidth = svgContainer.offsetWidth;
						var containerHeight = svgContainer.offsetHeight;

						getSvg.points[1].x = containerWidth;
						getSvg.points[2].x = containerWidth; 
						getSvg.points[2].y = containerHeight;
					}
				}
						
				resize(); 
				window.onresize = resize; 	
								

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