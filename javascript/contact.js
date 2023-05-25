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