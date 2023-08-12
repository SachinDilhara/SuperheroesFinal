function showSupermanDetails() {
 var detailsDiv = document.getElementById("superman-details");
  if (detailsDiv.style.display === "none") {
    var dynamicContent = "<p>Superman is a superhuman with incredible strength, speed, and the ability to fly. He is known as the Man of Steel and fights for truth, justice, and the American way.</p><p>Superman's alter ego is Clark Kent, a mild-mannered journalist working at the Daily Planet. He uses his superpowers to protect Metropolis from various threats, including supervillains like Lex Luthor and Doomsday.</p>";
    
    detailsDiv.innerHTML = dynamicContent;
    detailsDiv.style.display = "block";
  } else {
    detailsDiv.style.display = "none";
  }
}

function showWonderWomanDetails() {
  var detailsDiv = document.getElementById("wonderWomanDetails");
  if (detailsDiv.style.display === "none") {
    var dynamicContent = "<p>Wonder Woman is a superheroine appearing in comic books published by DC Comics. She is a warrior princess of the Amazons and possesses superhuman strength, agility, and combat skills. She also has the ability to fly and wield the Lasso of Truth, which compels anyone caught in it to tell the truth.</p>";
    
    detailsDiv.innerHTML = dynamicContent;
    detailsDiv.style.display = "block";
  } else {
    detailsDiv.style.display = "none";
  }
}

function showHulkDetails() {
  var detailsDiv = document.getElementById("hulkDetails");
  if (detailsDiv.style.display === "none") {
    var dynamicContent = "<p>Hulk is a fictional character appearing in comic books published by Marvel Comics. He is known for his incredible strength and invulnerability. The character was created by Stan Lee and Jack Kirby.Hulk's alter ego is Bruce Banner, a scientist who transforms into the Hulk when exposed to gamma radiation. The Hulk possesses immense physical power and becomes stronger as his anger increases. Despite his monstrous appearance, the Hulk often fights alongside other superheroes to protect the innocent and battle against supervillains.</p>";
    
    detailsDiv.innerHTML = dynamicContent;
    detailsDiv.style.display = "block";
  } else {
    detailsDiv.style.display = "none";
  }
}

var i = 0; 			
var images = [];	
var time = 3000;	
	 

images[0] = "batman1.jpg";
images[1] = "batman2.jpg";
images[2] = "batman3.jpg";



function changeImg(){
	document.slide.src = images[i];


	if(i < images.length - 1){
	  
	  i++; 
	} else { 
		
		i = 0;
	}

	
	setTimeout("changeImg()", time);
}



function validForm() {
  var name = document.custom_form.name;
  var email = document.custom_form.email;
  var number = document.custom_form.number;
  var message = document.custom_form.message;

  if (name.value == "") {
    name.nextElementSibling.style.display = "block";
    name.style.border = "1px solid #f00";
  } else {
    name.nextElementSibling.style.display = "none";
    name.style.border = "1px solid transparent";
  }

  if (
    !email.value.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) ||
    email.value == ""
  ) {
    email.nextElementSibling.style.display = "block";
    email.style.border = "1px solid #f00";
  } else {
    email.nextElementSibling.style.display = "none";
    email.style.border = "1px solid transparent";
  }

  if (number.value == "" || !/^\d{10}$/.test(number.value)) {
    number.nextElementSibling.style.display = "block";
    number.style.border = "1px solid #f00";
  } else {
    number.nextElementSibling.style.display = "none";
    number.style.border = "1px solid transparent";
  }

  if (message.value == "") {
    message.nextElementSibling.style.display = "block";
    message.style.border = "1px solid #f00";
  } else {
    message.nextElementSibling.style.display = "none";
    message.style.border = "1px solid transparent";
  }


  if (
    name.value != "" &&
    email.value.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) &&
    number.value != "" &&
    /^\d{10}$/.test(number.value) &&
    message.value != ""
  ) {
   
    alert("Submit successful!");

 
    document.custom_form.reset();
  }

  return false;
}




function validForm() {
  var name = document.custom_form.name;
  var email = document.custom_form.email;
  var number = document.custom_form.number;
  var message = document.custom_form.message;

  var valid = true;

  if (name.value === "") {
    name.nextElementSibling.style.display = "block";
    name.style.border = "1px solid #f00";
    valid = false;
  } else {
    name.nextElementSibling.style.display = "none";
    name.style.border = "1px solid transparent";
  }

  if (!email.value.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) || email.value === "") {
    email.nextElementSibling.style.display = "block";
    email.style.border = "1px solid #f00";
    valid = false;
  } else {
    email.nextElementSibling.style.display = "none";
    email.style.border = "1px solid transparent";
  }

  if (number.value === "" || !/^\d{10}$/.test(number.value)) {
    number.nextElementSibling.style.display = "block";
    number.style.border = "1px solid #f00";
    valid = false;
  } else {
    number.nextElementSibling.style.display = "none";
    number.style.border = "1px solid transparent";
  }

  if (message.value === "") {
    message.nextElementSibling.style.display = "block";
    message.style.border = "1px solid #f00";
    valid = false;
  } else {
    message.nextElementSibling.style.display = "none";
    message.style.border = "1px solid transparent";
  }

  if (valid) {
    // The form is valid, submit it
    alert("Submit successful!");
    document.custom_form.reset();
  }

  return valid;
}

function validateReg() {
  var First_Name = document.custom_form.First_Name;
  var Last_Name = document.custom_form.Last_Name;
  var email = document.custom_form.Email;
  var user_name = document.custom_form.User_Name;
  var password = document.custom_form.Password;

  if (First_Name.value == "") {
    First_Name.nextElementSibling.style.display = "block";
    First_Name.style.border = "1px solid #f00";
  } else {
    First_Name.nextElementSibling.style.display = "none";
    First_Name.style.border = "1px solid transparent";
  }

  if (
    !email.value.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) ||
    email.value == ""
  ) {
    email.nextElementSibling.style.display = "block";
    email.style.border = "1px solid #f00";
  } else {
    email.nextElementSibling.style.display = "none";
    email.style.border = "1px solid transparent";
  }

  if (user_name.value == "") {
    user_name.nextElementSibling.style.display = "block";
    user_name.style.border = "1px solid #f00";
  } else {
    user_name.nextElementSibling.style.display = "none";
    user_name.style.border = "1px solid transparent";
  }

  if (password.value == "") {
    password.nextElementSibling.style.display = "block";
    password.style.border = "1px solid #f00";
  } else {
    password.nextElementSibling.style.display = "none";
    password.style.border = "1px solid transparent";
  }

  if (
    First_Name.value != "" &&
    email.value.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) &&
    user_name.value != "" &&
    password.value != ""
  ) {
    // Form is valid, allow submission
    return true;
  } else {
    // Form has errors, prevent submission
    return false;
  }
}



function showTooltip(tooltipId) {
  const tooltip = document.getElementById(tooltipId);
  tooltip.style.visibility = 'visible';
}

function hideTooltip(tooltipId) {
  const tooltip = document.getElementById(tooltipId);
  tooltip.style.visibility = 'hidden';
}


function isInViewport(element) {
  var rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}


function triggerFadeInOnScroll() {
  var images = document.querySelectorAll('.fade-in');
  images.forEach(function (image) {
    if (isInViewport(image)) {
      image.style.opacity = 0;
      fadeIn(image);
    }
  });

  function fadeIn(image) {
    var opacity = parseFloat(image.style.opacity);
    if (opacity < 1) {
      opacity += 0.1; 
      image.style.opacity = opacity;
      requestAnimationFrame(function () {
        fadeIn(image);
      });
    }
  }
}


window.addEventListener('scroll', triggerFadeInOnScroll);


document.addEventListener('DOMContentLoaded', function() {
  var navLinks = document.querySelectorAll('nav ul li a');

  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener('click', smoothScroll);
  }

  function smoothScroll(e) {
    e.preventDefault();
    var targetId = this.getAttribute('href');
    var targetPosition = document.querySelector(targetId).offsetTop;
    var startPosition = window.pageYOffset;
    var distance = targetPosition - startPosition;
    var duration = 1000; 

    var start = null;
    window.requestAnimationFrame(step);

    function step(timestamp) {
      if (!start) start = timestamp;
      var progress = timestamp - start;
      window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
      if (progress < duration) window.requestAnimationFrame(step);
    }

    
    function easeInOutCubic(t, b, c, d) {
      t /= d / 2;
      if (t < 1) return c / 2 * t * t * t + b;
      t -= 2;
      return c / 2 * (t * t * t + 2) + b;
    }
  }
});

