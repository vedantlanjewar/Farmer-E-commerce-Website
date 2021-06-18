
function drop(){
    if(document.getElementById("p1").style.border!="none"){
    document.getElementById("p1").style.border="none";
    arr=document.getElementsByClassName("dropdown")
    for(i=0;i<arr.length;i++){
        arr[i].style.visibility="visible";
    }

    document.getElementsByClassName("categories")[0].style.boxShadow="1px 0px 10px -5px black"
    }
    else{
        document.getElementById("p1").style.border="1px solid black";
        arr=document.getElementsByClassName("dropdown")
    for(i=0;i<arr.length;i++){
        arr[i].style.visibility="hidden";
    }
    document.getElementsByClassName("categories")[0].style.border="none";
    document.getElementsByClassName("categories")[0].style.boxShadow="none"
    }
} 
var slide=1
function rslide(){
    if(slide==1){
    document.getElementById("slideimage").src="images/2.jpg";
    slide=2
    }
    else if(slide==2){
        document.getElementById("slideimage").src="images/3.jpg";
    slide=3 
    }
    else if(slide==3){
        document.getElementById("slideimage").src="images/1.jpg";
    slide=1 
    }
}

function lslide(){
    if(slide==1){
    document.getElementById("slideimage").src="images/3.jpg";
    slide=3
    }
    else if(slide==2){
        document.getElementById("slideimage").src="images/1.jpg";
    slide=1 
    }
    else if(slide==3){
        document.getElementById("slideimage").src="images/2.jpg";
    slide=2 
    }
}
var arraystore=[0,1];

function border(number){
    
    if(number==1){
    document.getElementById("secondlink1").style.borderBottom="2px solid green";
    document.getElementById("secondlink2").style.borderBottom="none";
    document.getElementById("secondlink3").style.borderBottom="none";
    document.getElementById("secondlink4").style.borderBottom="none";
    var arraystore=document.getElementsByClassName("column Fruits");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="block";
    }
    var arraystore=document.getElementsByClassName("column Vegetable");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="block";
    }
    var arraystore=document.getElementsByClassName("column Grains");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="block";
    }
    }
    else if(number==2){
    
    document.getElementById("secondlink2").style.borderBottom="2px solid green";
    document.getElementById("secondlink1").style.borderBottom="none";
    document.getElementById("secondlink3").style.borderBottom="none";
    document.getElementById("secondlink4").style.borderBottom="none";
    var arraystore=document.getElementsByClassName("column Fruits");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="block";
    }
    var arraystore=document.getElementsByClassName("column Vegetable");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="none";
    }
    var arraystore=document.getElementsByClassName("column Grains");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="none";
    }}
    else if(number==3){
    
    document.getElementById("secondlink3").style.borderBottom="2px solid green";
    document.getElementById("secondlink2").style.borderBottom="none";
    document.getElementById("secondlink1").style.borderBottom="none";
    document.getElementById("secondlink4").style.borderBottom="none";
    var arraystore=document.getElementsByClassName(" column Vegetable");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="block";
    }
    var arraystore=document.getElementsByClassName("column Fruits");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="none";
    }
    var arraystore=document.getElementsByClassName("column Grains");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="none";
    }}
    else if(number==4){
    
    document.getElementById("secondlink4").style.borderBottom="2px solid green";
    document.getElementById("secondlink2").style.borderBottom="none";
    document.getElementById("secondlink3").style.borderBottom="none";
    document.getElementById("secondlink1").style.borderBottom="none";
    var arraystore=document.getElementsByClassName("column Grains");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="block";
    }
    var arraystore=document.getElementsByClassName(" column Vegetable");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="none";
    }
    var arraystore=document.getElementsByClassName("column Fruits");
    for(i=0;i<arraystore.length;i++){
        arraystore[i].style.display="none";
    }
}
}


// function wishlistadd(){
//     var wishvalue=Number(document.getElementsByClassName("wishcounter")[0].innerText);
//     document.getElementsByClassName("wishcounter")[0].innerText=wishvalue+1;
    
// }
// function cartlistadd(){
//     var cartvalue=Number(document.getElementsByClassName("cartcounter")[0].innerText);
//     document.getElementsByClassName("cartcounter")[0].innerText=cartvalue+1;
    
// }

function resetcount(){
    document.getElementsByClassName("wishcounter")[0].innerText=0;
    document.getElementsByClassName("cartcounter")[0].innerText=0;
}
