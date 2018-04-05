var num;

//the array artworks holds artwork objects
var artworks = [
  {
  name: "Mona Lisa",
  desc: "The famous painting of a woman.",
  price: 100,
  dateCreation: "1503",
  paintType: "Oil",
  dimensions: "77cm by 53cm",
  location: "Louvre",
  artist: "Leonardo Da Vinci",
  genre: "Portrait",
  artImage:"mona.jpg"


},
{
  name: "The Starry Night",
  desc: "A depiction of Van Gogh's window view from his asylum.",
  price: 150,
  dateCreation: "June 1889",
  paintType: "Oil",
  dimensions: "74cm by 92cm",
  location: "Museum of Modern Art",
  artist: "Vincent Van Gogh",
  genre: "Landscape Painting",
  artImage:"starry.jpg"

},
{
  name: "Wanderer above the Sea of Fog",
  desc: "Depicts a figure standing atop a cliff above a foggy expanse.",
  price: 200,
  dateCreation: "1818",
  paintType: "Oil",
  dimensions: "95cm by 75cm",
  location: "Kunsthalle Hamburg",
  artist: "Caspar David Friedrich",
  genre: "Romanticism",
  artImage:"wanderer.jpg"

},
{
  name: "Napoleon Crossing the Alps",
  desc: "Depicts Napoleon crossing the Alps atop his horse.",
  price: 180,
  dateCreation: "1801",
  paintType: "Oil",
  dimensions: "2.6m by 2.21m",
  location: "Chateau de Malmaison",
  artist: "Jacques-Louis David",
  genre: "Romanticism",
  artImage:"alps.jpg"

},
{
  name: "The Scream",
  desc: "A figure in agony against an orange sky.",
  price: 100,
  dateCreation: "1893",
  paintType: "Oil, tempera, pastel, crayon",
  dimensions: "91cm by 73.5cm",
  location: "National Gallery (Oslo)",
  artist: "Edvard Munch",
  genre: "Modern",
  artImage:"scream.jpg"
}
];

//This function gets called when the user selects an artwork from the form
function selectArt(sel) {
	num=sel;

//change the css to make small divs visible by default
document.getElementById("infoSmall").style.border="solid";
document.getElementById("imgSmall").style.display="block";
document.getElementById("infoSmall").style.display="block";
document.getElementById("imgLarge").style.display="none";
document.getElementById("infoLarge").style.display="none";

//puts artworks array data into infoSmall div by using inner html
document.getElementById('infoSmall').innerHTML= "<a href='javascript: bigArt(artworks[num].name,artworks[num].desc,artworks[num].price,artworks[num].dateCreation,artworks[num].paintType,artworks[num].dimensions,artworks[num].location,artworks[num].artist,artworks[num].genre,artworks[num].artImage);'>"+artworks[sel].name+"</a>"+"<br>"+artworks[sel].desc + "<br>"+artworks[sel].price;

//puts artworks image data into imgSmall by using image path in the array
var imgPath='images/'+artworks[sel].artImage;
document.getElementById('imgSmall').innerHTML='<img src='+imgPath+" class='small'>"
}

//returns the price of the selected artwork
function getArtPrice(sel) {
	return artworks[sel].price;
}

//returns the name of the selected artwork
function getArtName(sel) {
	return artworks[sel].name;
}
