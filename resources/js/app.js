require('./bootstrap');
const btn=document.querySelector('.mobile-menu-button');
const menu=document.querySelector('.mobile-menu');


btn.addEventListener('click',()=>{
    menu.classList.toggle("hidden");
});


// for (var i=0;i<latlng.length;i++){
// var coords=latlng[i].latitude +' '+latlng[i].longitude
// console.log(coords)
// }
for(let i=0;i<latlng.length;i++){
  var lng=parseFloat(latlng[i].longitude);
  var lat=parseFloat(latlng[i].latitude);
}



// Google maps api 
let map;
function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: lat, lng: lng },
      zoom: 15,
    });



    for (let i = 0; i < latlng.length; i++) {
latlng.forEach(function(location){
let lati=location.latitude
let lngi=location.longitude
var test=new google.maps.LatLng(lati, lngi)
const marker = new google.maps.Marker({
  position: test,
  map: map,
});
})





    

 
     
    }
  







  }
  
initMap();