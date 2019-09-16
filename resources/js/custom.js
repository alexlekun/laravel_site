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

           printErrorMsg(msg){
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").attr('hidden', 'false');
            $.each( msg, function(index, value){
              $(".print-error-msg").find("ul").append('<li>'+ value +'</li>');
            });
           }
        	});
	    });
	});
              