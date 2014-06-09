//PENGUIN NEWS 


		
$('document').ready(function() {

//FADE IN/FADE OUT 
	$('#').fadeIn(5000, function() {
		$('#').fadeOut(25000);
	});			
		
//end fade in/out

//variables
var myDate = new Date();
var date = document.getElementById('date');

date.innerHTML = myDate.toLocaleDateString();

//industry news array
var inews= [];
inews[0] = "<strong>Short ribs</strong> sausage boudin ground round biltong bresaola bacon rump tenderloin pork loin <strong>drumstick</strong>. Chicken short ribs boudin tongue, jowl tail shankle chuck leberkas strip steak turducken beef ribs jerky ribeye ground round. Pancetta bacon shank jerky. Ball tip strip steak leberkas, swine turducken ham shankle meatloaf short ribs pork belly capicola boudin flank. Short ribs t-bone pig biltong swine sausage. Spare ribs rump ribeye jowl kevin beef ground round kielbasa leberkas.";
inews[1] = "Frankfurter corned beef fatback, tenderloin ground round filet mignon pork belly pork rump doner beef ribs hamburger jowl chuck meatloaf. Ground round boudin rump ball tip bacon frankfurter pancetta leberkas sirloin ribeye. Meatball swine andouille short loin shankle turkey salami strip steak prosciutto sausage pork loin pork belly capicola beef. Hamburger kielbasa pork belly, beef ribs pork biltong sirloin tongue. Boudin t-bone hamburger, leberkas kielbasa tongue beef ribs pastrami flank pork loin bacon drumstick prosciutto.";
inews[2] = "Jerky ribeye salami flank turkey, kevin filet mignon boudin shank ground round short loin tenderloin spare ribs jowl. Jowl corned beef strip steak leberkas pork belly. Sirloin tongue bacon venison, rump andouille jerky boudin salami shankle. Flank <strong>meatball</strong> boudin, sirloin kevin doner andouille t-bone chicken. Prosciutto bacon ham jowl ham hock ball tip kielbasa short ribs, drumstick boudin. Pastrami flank salami sirloin. Salami beef ribs, swine flank ground round filet mignon jowl pork loin brisket tri-tip corned beef prosciutto. ";
inews[3] = "Jowl cow ground round bacon capicola meatball chuck short loin prosciutto. Bacon shoulder kielbasa pork chop cow ball tip pastrami. Kevin pork chop pork belly strip steak boudin. Pork belly andouille rump, pork chop pig beef ribs shank salami hamburger sirloin bresaola ham flank pancetta ground round. Short loin pork kielbasa pork loin turducken sirloin tongue brisket pork chop meatloaf. T-bone flank ribeye, drumstick kevin boudin beef tip swine cow. Beef meatball ribeye fatback rump, doner chuck t-bone corned beef sausage swine pastrami salami spare ribs.";
	
var newpara = document.getElementById('inews');
	
//random number generator
function genRandNum(){
	return Math.floor(Math.random() * (4) + 1);
}

//generate random industry news	
function updateINews(){
	var interval = genRandNum();
	newpara.innerHTML = inews[interval-1];
}
updateINews();
setInterval(updateINews,10000);

//editor news array
var enews= [];
enews[0] = "Cheesecake cheesecake caerphilly. Smelly cheese cow boursin lancashire croque monsieur st. agur blue cheese cheesy feet st. agur blue cheese. Jarlsberg cheese strings macaroni cheese fromage boursin macaroni cheese manchego cheesy feet. Bocconcini halloumi cut the cheese feta cheese strings cheeseburger cheesy feet pepper jack. Roquefort everyone loves bocconcini fromage frais say cheese when the cheese comes out everybody's happy croque monsieur cheese slices. Feta cheesy grin stinking bishop cauliflower cheese.";
enews[1] = "Fromage frais when the cheese comes out everybody's happy cheese triangles. Babybel babybel brie <strong>say cheese</strong> boursin croque monsieur port-salut cream cheese. Pecorino croque monsieur cream cheese parmesan gouda parmesan melted cheese who moved my cheese. Cheese on toast macaroni cheese dolcelatte cheese and wine when the cheese comes out everybody's happy brie cut the cheese swiss. Babybel dolcelatte cream cheese queso bavarian bergkase cheese and wine stinking bishop cut the cheese.";
enews[2] = "Cheese and biscuits manchego say cheese. Cheese and biscuits cheese strings stinking bishop cheesy feet halloumi who moved my cheese pepper jack stilton. Feta the big cheese cheesy feet port-salut cheesy feet feta paneer smelly cheese. Cheesy feet cheese slices chalk and cheese cheeseburger goat bocconcini babybel swiss. Caerphilly cheesy grin rubber cheese halloumi pecorino pepper jack bocconcini mozzarella. Cut the cheese cheese strings swiss roquefort cheesy grin cheesy feet fromage the big cheese. Cheesecake.";
enews[3] = "Manchego macaroni cheese ricotta. Parmesan everyone loves roquefort ricotta hard cheese cheese on toast cottage cheese mozzarella. Croque monsieur fondue smelly cheese emmental cheeseburger caerphilly cheese slices the big cheese. Bavarian bergkase cream cheese bavarian bergkase cottage cheese dolcelatte manchego cream cheese cheese and wine. Mascarpone fromage frais fondue cheese and wine cheesecake red leicester cheesy feet everyone loves. Bavarian bergkase chalk and cheese lancashire emmental edam jarlsberg cheese slices.";
	
var newpar = document.getElementById('enews');
	
//generate random editor news	
function updateENews(){
	var interval = genRandNum();
	newpar.innerHTML = enews[interval-1];
}

updateENews();
setInterval(updateENews,12000);

//image array
var penpics = []
penpics[0] = "<img src='images/penguin1.png' alt='image of a Clark Penguin'>"
penpics[1] = "<img src='images/penguin2.png'alt='image of a Clark Penguin'>"
penpics[2] = "<img src='images/penguin3.png'alt='image of a Clark Penguin'>"
penpics[3] = "<img src='images/penguin4.png'alt='image of a Clark Penguin'>"

var newImage1 = document.getElementById('image1')
var newImage2 = document.getElementById('image2')
var newImage3 = document.getElementById('image3')
var newImage4 = document.getElementById('image4')

//generate random images
function updateImages(){
	var interval = genRandNum();
	newImage1.innerHTML = penpics[interval-1];
	var interval = genRandNum();
	newImage2.innerHTML = penpics[interval-1];
	var interval = genRandNum();
	newImage3.innerHTML = penpics[interval-1];
	var interval = genRandNum();
	newImage4.innerHTML = penpics[interval-1];
}

updateImages();
setInterval(updateImages,15000)

//penguinscope array
var scope = [];
scope[0] = "When he could eat no more, the old man sighed, wiped his hands on his naked legs, and gazed out over the sea. With the content of a full stomach, he waxed reminiscent.";
scope[1] = "A few seconds after midnight the crowd in the Chertsey road, Woking, saw a star fall from heaven into the pine woods to the northwest. It had a greenish colour, and caused a silent brightness like summer lightning. This was the second cylinder.";
scope[2] = "Alice was not much surprised at this, she was getting so used to queer things happening. While she was looking at the place where it had been, it suddenly appeared again.";
scope[3] = "But with his gaze fixed upon the dim and distant horizon, Ahab seemed not to mark this wild bird; nor, indeed, would any one else have marked it much, it being no uncommon circumstance; only now almost the least heedful eye seemed to see some sort of cunning meaning in almost every sight.";
	
var newparag = document.getElementById('scope');
	
//generate random penguinscope	
function updateScope(){
	var interval = genRandNum();
	newparag.innerHTML = scope[interval-1];
}

updateScope();
setInterval(updateScope,20000);

}); //END PENGUIN NEWS STUFF