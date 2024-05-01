// Switchery
		var elems = Array.prototype.slice.call(document.querySelectorAll('.switch-btn'));
		$('.switch-btn').each(function() {
			new Switchery($(this)[0], $(this).data());
		});

		// Bootstrap Touchspin
		$("input[id='demo_vertical2']").TouchSpin({
			verticalbuttons: true,
			// verticalupclass: 'fa fa-plus',
			// verticaldownclass: 'fa fa-minus'
		});
		$("input[id='demo3']").TouchSpin();
		$("input[id='demo1']").TouchSpin({
			min: 0,
			max: 100,
			step: 0.1,
			decimals: 2,
			boostat: 5,
			maxboostedstep: 10,
			postfix: '%'
		});
		$("input[id='demo2']").TouchSpin({
			min: 0,
			max: 1000000000,
			stepinterval: 50,
			maxboostedstep: 10000000,
			prefix: 'MAD'
		});
		$("input[id='demo3_22']").TouchSpin({
			
		});
		$("input[id='demo3_233']").TouchSpin({
			
		});
		$("input[id='demo5']").TouchSpin({
			prefix: "pre",
			postfix: "post"
		});