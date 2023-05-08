$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
        
		var first=$('#caravan_name'+id).text();

		$('#edit').modal('show');
		$('#caravan_name').val(first);
	
        $('#id').val(id);
	});
});