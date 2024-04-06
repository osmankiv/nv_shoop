	var i=0;

	//8888888888
	

	//8888888888
	
	
	
	function add_cart(x)
	{
		
	
	
		var itemnameincart1 =document.getElementById('card1');  //item name
		var itemnameincart1a =document.getElementById('card1a');// item seel
		var itemnameincart1b =document.getElementById('card1b');//item img 
		var test1 = itemnameincart1.innerHTML; //test1= item name
		var test1a = itemnameincart1a.innerHTML; //test1= item sell
		var test1b = itemnameincart1b.innerHTML;// item img 
		
		

		var itemnameincart2 =document.getElementById('card2');  //item name
		var itemnameincart1a =document.getElementById('card2a');// item seel
		var test2 = itemnameincart2.innerHTML; //test2= item name
		var test2a = itemnameincart1a.innerHTML; //test2a= item sell
		
		var itemnameincart3 =document.getElementById('card3');  //item name
		var itemnameincart1a =document.getElementById('card3a');// item seel
		var test3 = itemnameincart3.innerHTML; //test3= item name
		var test3a = itemnameincart1a.innerHTML; //test3aa= item sell
		





		var itemnameincart4 =document.getElementById('card4');  //item name
		var itemnameincart1a =document.getElementById('card4a');// item seel
		var test4= itemnameincart4.innerHTML; //test4= item name
		var test4a = itemnameincart1a.innerHTML; //test4a= item sell

		
				
		
		/////////// add num of item in the cart/////
		var acartnum = document.getElementById('cart_num');
		
	//	acartnum.innerHTML=i;
		i++;
		acartnum.setAttribute('value',i);
		//alert(i);
		//////////////add items in the cart [ craate options}//////////
		var itemcart = document.querySelector('.heading1');
		var itemscart = document.createElement('option');
		heading1.appendChild(itemscart);
		/////////end of craate options /////
		//////add name and seel and imd in option carts///

		if (x == 1  ) 
		{
			itemscart.innerHTML= test1  +'----'+ test1a;			  // option contant 

		} 
		else if(x == 2)
		{
			itemscart.innerHTML= test2  +'----'+ test2a ;			  // option contant

		}
		else if(x == 3)
		{
			itemscart.innerHTML= test3  +'----'+ test3a;			  // option contant

		}
		else if(x == 4)
		{
			itemscart.innerHTML= test4  +'----'+ test4a;			  // option contant

		}
		else(
			alert('sorry cant add the itme now :(')
			)
		
		////////// end add items in the cart [//////////
		


	}

	function buy()
	{
		alert("done");
}

let text = localStorage.getItem("testJSON");
let obj = JSON.parse(text);
document.getElementById("demo").innerHTML = obj.name;
	
