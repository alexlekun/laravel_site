$('document').ready(function(){
		jQuery('#ajaxSubmit').click(function(e){
           e.preventDefault();

           $.ajaxSetup({
		        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}			        		
		       });



           var name = $('#name').val();
           var surname = $('#surname').val();
           var address = $('#address').val();
           var age = $('#age').val();

           $.ajax({
           type:'POST',
           url:'/ajaxrequest',
           data:{name: name, surname: surname, address: address, age: age},
           success:function(data){
              if($.isEmptyObject(data.errors))
              { 
                $(".print-error-msg").css('display','none');
                $('table').css('display', 'table')
                
                $('tr #name').text(data.name);
                $('tr #surname').text(data.surname);
                $('tr #address').text(data.address);
                $('tr #age').text(data.age);
              }
              else
              {
                printErrorMsg(data.errors);
              }
           }

           
        	});
	    });
    function printErrorMsg(error){
            $(".print-error-msg ul").empty();
            $(".print-error-msg").css('display','block');
            $.each( error, function(index, value){
              $(".print-error-msg ul").append('<li>'+ value +'</li>');
            });
           }
	});
              