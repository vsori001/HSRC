Rollimage = new Array();



Rollimage[0] = new Image( 754, 200 )

Rollimage[0].src = "../img/inside_hsrc_sized.jpg"



Rollimage[1] = new Image( 754, 200 )

Rollimage[1].src = "../img/inside_hsrc_sized_hover.jpg"



function SwapOut()

{

		document.Rupert.src = Rollimage[1].src;

		return true;

}





function SwapBack()

{

		document.Rupert.src = Rollimage[0].src;

		return true;

}