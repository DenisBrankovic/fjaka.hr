	var getMobileMenu = document.getElementById("mobileMenu"); 
	var getHamburger = document.getElementById("hamburger");
	var getMobileLinks = document.getElementsByClassName("mobileLinks");
	var getSvg = document.getElementById("contactLink");

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

		contactLinkColors("purple", "orange", "yellow");

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