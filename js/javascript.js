var i = 0;


function add_cart(id) {


	var item = document.getElementById(id);

	var item_name = document.getElementById('item_name' + id + '').innerHTML;  //item name
	var item_sell = document.getElementById('item_sell' + id + '').innerHTML;// item seel
	var image0 = document.getElementById('image0').innerHTML;//item img 




	if (id != null) {// x = id item in databes
		/////////// add num of item in the cart/////
		var acartnum = document.getElementById('cart_num');
		i++;//	acartnum.innerHTML=i;
		acartnum.setAttribute('value', i);
		//////////////add items in the cart [ craate options}//////////
		var itemcart = document.querySelector('.heading1');
		var itemscart = document.createElement('option');
		heading1.appendChild(itemscart);
		/////////end of craate options /////
		//////add name and seel and imd in option carts///

		itemscart.innerHTML = item_name + '--' + item_sell + '' + image0;			  // option contant
		

	}
	else (

		alert('sorry cant add the itme now :( ----- id =' + id)
	)


	////////// end add items in the cart [//////////



}

function buy() {
	var seccfull_masseg = document.createElement('div');
	seccfull_masseg.setAttribute('class', 'heading');
	seccfull_masseg.innerHTML = 'seccfull_masseg';

	//alert(seccfull_masseg);





}

let text = localStorage.getItem("OsmanDataAsJSON");
let obj = JSON.parse(text);
let copy_riten = document.getElementById("copy_riten");
//copy_riten.innerHTML = obj.name;


