
	var increase_quantity = function(pid){
		var quantity = parseInt($('#qty_'+pid).text())+1;
		var price = parseFloat($('#purchase_'+pid).text());
		var subtotal = price*quantity;
		$('#qty_'+pid).text(quantity);
		$('#subtotal_'+pid).text(subtotal);
		$('#totalprice').text(totalprice);
		var totalprice = 0;
		$('.subtotal').each(function(){
			totalprice = totalprice+parseFloat($(this).text());
		})
		$('#totalprice').text(totalprice);
		$.ajax({
			url:'manage.php',
			type:'post',
			data:{'product_id':pid,'quantity':quantity,'type':'addtocart'},
			success:function(result){
				var res = JSON.parse(result);
				console.log(res);
				if(res.success == true){
					$('#cart_count').text(res.cart);
					$elm.removeClass('buy').addClass('added');
					$elm.text('Added to cart');
					console.log(res.message);
				}
				else{
					alert(res.message);
				}
			}
		})
		console.log('price:'+price+',quantity:'+quantity+',subtotal:'+subtotal+',totalprice:'+totalprice);
	}


	var decrese_quantity = function(){
		var quantity = parseInt($('#quantity').var())-1;
		if(quantity == 0){
			return false;
		}
		var subtotal = parseFloat($('#price').var())*quantity;
		$('#quantity').var(quantity);
		$('#subtotal').var(subtotal);
		$('#totalprice').var(totalprice);
		var totalprice = 0;
		$('.subtotal').each(function(){
			totalprice = totalprice+parseFloat($(this).text());
		})
		$('#totalprice').text(totalprice);
		$.ajax({
			url:'manage.php',
			type:'post',
			data:{'product_id':pid,'quantity':quantity,'type':'addtocart'},
			success:function(result){
				var res = JSON.parse(result);
				console.log(res);
				if(res.success == true){
					$('#cart_count').text(res.cart);
					$elm.removeClass('buy').addClass('added');
					$elm.text('Added to cart');
					console.log(res.message);
				}
				else{
					alert(res.message);
				}
			}
		})
		console.log('quantity:'+quantity+',subtotal:'+subtotal+',totalprice:'+totalprice);
	}


