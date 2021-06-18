  
function showSlides() 
{ 
    var i; 
  
    // get the array of divs' with classname image-sliderfade 
    var slides = document.getElementById("top"); 
      
    var dots = document.getElementsByClassName("text");  
    
    slides.style.display = "none"; 
    
   
     // increase by 1, Global variable 
    slideIndex++;  
   
     // check for boundary 
    if (slideIndex >= 4)  
    { 
        slideIndex = 1; 
    } 
   
    if (slideIndex=1)
    {   
        slides.style.display="block";
        slides.style.backgroundImage= "linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(../images/nandhu-kumar-c0rewZey4RU-unsplash.jpg)"; 
        dots[0].innerHTML="This is text one";
    }
    if (slideIndex=2)
    {
        slides.style.display="block";
        slides.style.backgroundImage= "linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(../images/megan-thomas-xMh_ww8HN_Q-unsplash.jpg)"; 
        dots[0].innerHTML="This is text two";
    }
    if (slideIndex=3)
    {
        slides.style.display="block";
        slides.style.backgroundImage= "linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(../images/raphael-rychetsky-li9JfUHQfOY-unsplash.jpg)"; 
        dots[0].innerHTML="This is text three";
    }

     
  
    // Change image every 2 seconds 
    setTimeout(showSlides, 1500);  
} 