var num;

//the array artworks holds artist objects
var artist = [
  {
  name: "Leonardo Da Vinci",
  desc: "An Italian man who was known for his invention, painting, sculpting, architecture, science, music, mathematics, engineering, literature, anatomy, geology, astronomy, botany, writing, history, and cartography.",
  dateBirth: "April 15, 1452",
  dateDeath: "May 2, 1519",
  living: "Italy",
  genre: "Renaissance",
  famousWork: "Mona Lisa",
  artistImage:"vinci.jpg"
},
{
  name: "Vincent Van Gogh",
  desc: "A Dutch man, who is among the most famous and influential figures in the history of Western art ",
  dateBirth: "March 30, 1853",
  dateDeath: "July 29, 1890",
  living: "Zundert",
  genre: "Modern Art",
  famousWork: "Starry Night",
  artistImage:"gogh.jpg"
},
{
  name: "Caspar David Friedrich ",
  desc: "A German man, the 19th-century German Romantic landscape painter, generally considered the most important German artist of his generation",
  dateBirth: "September 5, 1774",
  dateDeath: "May 7, 1840",
  living: "Dresden",
  genre: "Romanticism",
  famousWork: "The Wanderer above the Sea of Fog",
  artistImage:"friedrich.jpg"
},
{
  name: "Jacques-Louis David",
  desc: "A French man.",
  dateBirth: "August 30, 1748",
  dateDeath: "December 29, 1825",
  living: "France",
  genre: "Neoclassicism",
  famousWork: "Napoleon Crossing the Alps",
  artistImage:"david.jpg"
},
{
  name: "Edvard Munch",
  desc: "A Norwegian man., as well as a printmaker",
  dateBirth: "December 12, 1863",
  dateDeath: "January 23, 1944",
  living: "Oslo",
  genre: "Modern Art",
  famousWork: "The Scream",
  artistImage:"munch.jpg"
}
];

//This function gets called when the user selects an artist from the form
function selectArtist(sel) {

num=sel;

//change the css to make small divs visible by default
document.getElementById("infoSmall").style.border="solid";
document.getElementById("imgSmall").style.display="block";
document.getElementById("infoSmall").style.display="block";
document.getElementById("imgLarge").style.display="none";
document.getElementById("infoLarge").style.display="none";

//puts artist array data into infoSmall div by using inner html
document.getElementById('infoSmall').innerHTML=  "<a href='javascript: bigArtist(artist[num].name,artist[num].desc,artist[num].dateBirth,artist[num].dateDeath,artist[num].living,artist[num].genre,artist[num].famousWork,artist[num].artistImage);'>"+artist[sel].name+"</a>"+"<br>"+artist[sel].desc;

//puts artist image data into imgSmall by using image path in the array 
var imgPath='images/'+artist[sel].artistImage;
document.getElementById('imgSmall').innerHTML='<img src='+imgPath+" class='small'>"
}
