<!DOCTYPE html>
<html lang="hr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/png" href="pictures/logoIcon.png">
	<link rel="stylesheet" type="text/css" href="style/contact.css">
	<link rel="stylesheet" type="text/css" href="style/header_footer.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">

	<title>Contact</title>
</head>
<body>
	<header id="headerTop">
		<div id="logoContainer">
			<a href="index.php"><img id="logo" src="pictures/logo.png"></a>
		</div>
			<div id="headerBottom">
				<a href="index.php#descriptionWrapper">O nama</a>
				<a href="index.php#about">Naše usluge</a>
				<a href="index.php#featuresWrapper">Karakteristike</a>
				<a href="index.php#sliderWrapper">Aplikacija</a>
			</div>
			<div id="hamburger">
				<div id="hamburgerTop" class="hamburgerClosed"></div>
				<div id="hamburgerMiddle" class="hamburgerClosed"></div>
				<div id="hamburgerBottom" class="hamburgerClosed"></div>
			</div>
		</header>
			<div id="mobileMenu" class="mobileMenuClosed">
				<a href="index.php" class="mobileLinks">Početna</a>
				<a href="index.php#descriptionWrapper" class="mobileLinks">O nama</a>
				<a href="index.php#about" class="mobileLinks">Naše usluge</a>
				<a href="index.php#featuresWrapper" class="mobileLinks">Karakteristike</a>
				<a href="index.php#sliderWrapper" class="mobileLinks">Aplikacija</a>
			</div>
		<form action="PHPMailer/mail.php" method="POST">
			<label id="nameLbl">Ime i prezime</label>
			<input type="text" name="name" id="name" onfocus="displayFocusedElement()" required>
			<label id="emailLbl">Email</label>
			<input type="email" name="email" id="email" onfocus="displayFocusedElement()" required>
			<label id="subjectLbl">Naslov zahtjeva</label>
			<input type="text" name="subject" onfocus="displayFocusedElement()" id="subject">
			<label id="messageLbl">Opis zahtjeva</label>
			<textarea name="content" rows="2" onfocus="displayFocusedElement()" id="message" required></textarea>
			<input type="submit" name="sbmtBtn" value="Pošalji" id="btn">
		</form>
	
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

			var getNameLbl = document.getElementById("nameLbl");
			var getEmailLbl = document.getElementById("emailLbl");
			var getSubjectLbl = document.getElementById("subjectLbl");
			var getMessageLbl = document.getElementById("messageLbl");

			var getName = document.getElementById("name");
			var getEmail = document.getElementById("email");
			var getSubject = document.getElementById("subject");
			var getMessage = document.getElementById("message");

			const labels = document.querySelectorAll("label");

			const allLbls = [getNameLbl, getEmailLbl, getSubjectLbl, getMessageLbl];
			const allTxts = [getName, getEmail, getSubject, getMessage];
			


			for(let label of labels){
				label.addEventListener("click", inputGetsFocus); 
			}

			getMessage.addEventListener("click", textAreaGetsFocus); 

						
			function textAreaGetsFocus(){
				getMessageLbl.style.fontSize = "60%"; 
				getMessageLbl.style.lineHeight = "22px"; 
				getMessageLbl.style.top = "0"; 
				getMessage.focus();

				const allOtherTxts = [getName, getEmail, getSubject];
				const allOtherLbls = [getNameLbl, getEmailLbl, getSubjectLbl];

				for(var i = 0; i < allOtherTxts.length; i++){
					if(allTxts[i].value == ""){
						allOtherLbls[i].style.fontSize = "100%";
						allOtherLbls[i].style.top = "22px"; 
					}
				}
			}

			function focusedLabel(labelId){
				labelId.style.fontSize = "60%";
				labelId.style.lineHeight = "22px";
				labelId.style.top = "0"; 
			}

			function unfocusedLabel(labelId){
				if(getMessage.value.length < 1){
					labelId.style.fontSize = "100%"; 
					labelId.style.top = "22px";
				}
			}


			function displayFocusedElement(){
				var focusedOne = document.activeElement.id; 
				
				switch(focusedOne){
				case "name":
					inputLosesFocus(getNameLbl);
					break;

				case "email":
					inputLosesFocus(getEmailLbl);
					focusedLabel(getEmailLbl);
					break;

				case "subject":
					inputLosesFocus(getSubjectLbl);
					focusedLabel(getSubjectLbl);
					break;

				case "message":
					inputLosesFocus(getMessageLbl);
					focusedLabel(getMessageLbl); 
					getMessage.addEventListener("keydown", (event) => {if(event.key == "Tab") unfocusedLabel(getMessageLbl);}); 
					break;  
				}
			}


			function inputGetsFocus(){
				this.style.fontSize = "60%";
				this.style.lineHeight = "22px";
				this.style.top = "0"; 
				
				switch(this){
					case getNameLbl:
					getName.focus();
					inputLosesFocus(this);
					break;

					case getEmailLbl:
					getEmail.focus();
					inputLosesFocus(this);
					break;

					case getSubjectLbl:
					getSubject.focus();
					inputLosesFocus(this);
					break;

					case getMessageLbl:
					getMessage.focus();
					inputLosesFocus(this);
					break; 
				}
			}

			function inputLosesFocus(obj){
				for(var i = 0; i < allLbls.length; i++){
					if(obj != allLbls[i]){
						if(allTxts[i].value == ""){
							allLbls[i].style.fontSize = "100%";
							allLbls[i].style.top = "22px";
						}
					}
				}
			}


			(function(){
				for(let i = 0; i < allTxts.length; i++){
					allTxts[i].value = ""; 
				}
			})(); 

	</script>
</body>
</html>