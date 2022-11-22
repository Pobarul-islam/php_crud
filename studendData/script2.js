$(document).ready(function() {



	$(document).on('click', ".selected", function(e) {
   		e.preventDefault;
		var customer_ID = $(this).attr('attr-CustomerID');
		var customer_Name = $(this).attr('attr-CustomerName');
		 $('._customerID').val(customer_ID);
		 $('._customerName').val(customer_Name);
		 $('#exampleModal').modal('hide');
		//alert(itemText);
		    //var itemValue = $('#insert').find("option:selected").val();

		   // $(product).closest('tr').find('.invoice_product').val(itemText);
		   // $(product).closest('tr').find('.invoice_product_price').val(itemValue);
		
   		//$('#exampleModal').modal({ backdrop: 'static', keyboard: false }).one('click', '#selected', function(e) {
   		//	alert('1');

		//});
	return false;

   	});
});