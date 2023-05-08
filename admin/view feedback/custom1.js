$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
        
		var first=$('#customer_name'+id).text();
		var file2=$('#email'+id).text();
        var file3=$('#phone'+id).text();
        var file4=$('#gender'+id).text();
		var file7=$('#date'+id).text();
		var file7=$('#date'+id).text();
		var description=$('#description'+id).text();
		var needstoimprove=$('#needstoimprove'+id).text();
		
		$('#edit').modal('show');
		$('#caravan_name').val(first);
		$('#email').val(file2);
        $('#phone').val(file3);
		$('#gender').val(file4);
		$('#date').val(file7);
		$('#description').val(description);
		$('#needstoimprove').val(needstoimprove);
        $('#id').val(id);
	});
});