$(document).ready(function(){
	$(document).on('click', ".selected", function(e){
		e.preventDefault;
		
		var customer_ID = $(this).attr('attr-CustomerId');
		var customer_Name = $(this).attr('attr-CustomerName');
		$('._customerId').val(customer_ID);
		$('._customerName').val(customer_Name);
		$('#exampleModel').Model('hide');
		
		
		
		return false;
	});
});