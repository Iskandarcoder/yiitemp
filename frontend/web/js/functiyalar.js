//
function getMonth($n){
 if($n=='01')  return "ßíâàðü";
 if($n=='02')  return "Ôåâðàëü";
 if($n=='03')  return "Ìàðò";
 if($n=='04')  return "Àïðåëü";
 if($n=='05')  return "Ìàé";
 if($n=='06')  return "Èþíü";
 if($n=='07')  return "Èþëü";
 if($n=='08')  return "Àâãóñò";
 if($n=='09')  return "Ñåíòÿáðü";
 if($n=='10')  return "Îêòÿáðü";
 if($n=='11')  return "Íîÿáðü";
 if($n=='12')  return "Äåêàáðü";
}
//
function selectRegion($id,$n){
        var id_country =$id ;
        var sel_n=$n;      
        if(id_country != 0){
                $.ajax({
                        type: "POST",
                        url: "/uz/action/ajax.base.php",
                        data: { action: 'showRegionForInsert', id_country: id_country },
                        cache: false,
                        success: function(responce){
                        if (sel_n==1)  //Tu`gilgan joy uchun
                        {
                        	$('select[name="rayon1"]').html(responce);
//					$("input[name='tugjoy_eng']").val(selectRegionEng(id_country));
                       	}
                       	else               //Yashash joy uchun
                       	{
           //              	$("input[name='adress_uz']").val("");
                        	$('select[name="rayon2"]').html(responce);
         //	$("input[name='adress_uz']").val($.trim($("#oblast2 option:selected").text()));
                       		}
                        }
                });
        };
 };
function selectCity($id,$n){
        var id_region = $id; 
        var sel_n=$n;    
        var str_l='';
        if($('select[name="rayon2"]').val()==0)
            $("input[name='adress_uz']").val('');
        $.ajax({
                type: "POST",
                url: "/uz/action/ajax.base.php",
                data: { action: 'showCityForInsert', id_region: id_region },
                cache: false,
                success: function(responce){
                if (sel_n==1)
                {
                	$('select[name="selectPlaces"]').html(responce);
                	Street($id);
                	$("input[name='adress_uz']").val("");
                	str_l=$.trim($("#oblast2 option:selected").text());
      	if ($('select[name="rayon2"]').val()!=0)
               	str_l=str_l+', '+$.trim($("#rayon2 option:selected").text());
      	if ($('select[name="selectPlaces"]').val()!=0)
      	      	str_l=str_l+', '+$.trim($("#selectPlaces option:selected").text());
        if ($('select[name="selectStreet"]').val()!=0)
              	str_l=str_l+', '+$.trim($("#selectStreet option:selected").text());
         if($('#home').val() != '')
                str_l=str_l+', '+$.trim($('#home').val())+'-uy';   	
         if($('#korpus').val() != '')
                str_l=str_l+', '+$.trim($('#korpus').val())+'-korpus';   	
        if($('#flat').val() != '')
                str_l=str_l+', '+$.trim($('#flat').val())+'-xonadon';   	                
                	$("input[name='adress_uz']").val(str_l);
                		$("input[name='adress_uz']").removeClass('error').addClass('not_error');
             //  	$("input[name='adress_uz']").css('background-color','#FFFFFF');
                }
                 }
        });
};
function Street($id){
        var id_place = $id; 
        var str_l='';
        $.ajax({
                type: "POST",
                url: "/uz/action/ajax.base.php",
                data: { action: 'showStreetForInsert',  id_place:  id_place },
                cache: false,
                success: function(responce){
                $('select[name="selectStreet"]').html(responce);
                }
        });
        };
function showStreet(){
   var str_l='';
                $("input[name='adress_uz']").val("");
               	str_l=$.trim($("#oblast2 option:selected").text());
               	str_l=str_l+', '+$.trim($("#rayon2 option:selected").text());
     if ($('select[name="selectPlaces"]').val()!=0)
            	str_l=str_l+', '+$.trim($("#selectPlaces option:selected").text());
      if ($('select[name="selectStreet"]').val()!=0)      	
               	str_l=str_l+', '+$.trim($("#selectStreet option:selected").text());
               	      if($('#home').val() != '')
                str_l=str_l+', '+$.trim($('#home').val())+'-uy';   	
         if($('#korpus').val() != '')
                str_l=str_l+', '+$.trim($('#korpus').val())+'-korpus';   	
        if($('#flat').val() != '')
                str_l=str_l+', '+$.trim($('#flat').val())+'-xonadon';   
               	$("input[name='adress_uz']").val(str_l);
               		$("input[name='adress_uz']").removeClass('error').addClass('not_error');
           //    	$("input[name='adress_uz']").css('background-color','#FFFFFF');
};
function showPlaces(){
  var str_l='';
                $("input[name='adress_uz']").val("");
               	str_l=$.trim($("#oblast2 option:selected").text());
              	str_l=str_l+', '+$.trim($("#rayon2 option:selected").text());
      if ($('select[name="selectPlaces"]').val()!=0)
            	str_l=str_l+', '+$.trim($("#selectPlaces option:selected").text());          	
      if ($('select[name="selectStreet"]').val()!=0)
               	str_l=str_l+', '+$.trim($("#selectStreet option:selected").text());
               	      if($('#home').val() != '')
                str_l=str_l+', '+$.trim($('#home').val())+'-uy';   	
         if($('#korpus').val() != '')
                str_l=str_l+', '+$.trim($('#korpus').val())+'-korpus';   	
        if($('#flat').val() != '')
                str_l=str_l+', '+$.trim($('#flat').val())+'-xonadon';   
               	$("input[name='adress_uz']").val(str_l);
               		$("input[name='adress_uz']").removeClass('error').addClass('not_error');
           //    	$("input[name='adress_uz']").css('background-color','#FFFFFF');
};
function showHome(){
   var str_l='';
                $("input[name='adress_uz']").val("");
              	str_l=$.trim($("#oblast2 option:selected").text());
              	str_l=str_l+', '+$.trim($("#rayon2 option:selected").text());
		if ($('select[name="selectPlaces"]').val()!=0)
            		str_l=str_l+', '+$.trim($("#selectPlaces option:selected").text());
               	if ($('select[name="selectStreet"]').val()!=0)
	               	str_l=str_l+', '+$.trim($("#selectStreet option:selected").text());
	        if ($('input[name="home"]').val()!='')       	
               	str_l=str_l+", "+$('input[name="home"]').val()+'-uy';
               	if($('#korpus').val() != '')
                str_l=str_l+', '+$.trim($('#korpus').val())+'-korpus';   	
                if($('#flat').val() != '')
                str_l=str_l+', '+$.trim($('#flat').val())+'-xonadon';   	
               	$("input[name='adress_uz']").val(str_l);
               	$("input[name='adress_uz']").removeClass('error').addClass('not_error');
         //      	$("input[name='adress_uz']").css('background-color','#FFFFFF');
};
//
  function proverka_date(id,val){
var $el = $('#' + id); 
 if( val.length==0 || val.substring(0,2)>31 || val.substring(0,2)=='00'||
             val.substring(3).substring(0,2)>12||val.substring(3).substring(0,2)=='00'||
                                 val.substring(6)<1930)
 {    $el.removeClass('not_error').addClass('error');
        $el.val( '');
     //    $el.css('background-color','#FFEFEF');
}
  else
     {  
  	$el.removeClass('error').addClass('not_error');
      //   $el.css('background-color','#FFFFFF');
     }
  }
   function proverka_spisok(id,val){
var $el = $('#' + id); 
 if( val.length==0)
 {
    $el.removeClass('not_error').addClass('error');
        $el.val( '');
     //    $el.css('background-color','#FFEFEF');
}
  else
     {  
  	$el.removeClass('error').addClass('not_error');
     //    $el.css('background-color','#FFFFFF');
     }
     }
  // 
   function MyAlert(text,caption) {
    $("#dialog").text(text); 
    	$("#dialog").dialog({
          autoOpen: false,
          title: caption,
          maxWidth:500,  
          modal: true, 
          buttons: {
              "OK": function() { $(this).dialog("close"); }}
         });
    $("#dialog").dialog("open");	
	} 
//
function selectCountry($id){
        var id_place = $id;
        if ($id!=182)
        {
          $("#oblast ").attr("disabled", "disabled");
  	  $("#rayon1").attr("disabled", "disabled"); 	
        $.ajax({
                type: "POST",
                url: "/uz/action/ajax.base.php",
                data: { action: 'showCountryForInsert',  id_place:  id_place },
                cache: false,
                success: function(responce){$("input[name='tugjoy_Lat']").val(responce);
                selectCountryLat(id_place);
                }
        });
        }
        else
        {
           $("#oblast ").removeAttr("disabled");
  	  $("#rayon1").removeAttr("disabled");
  	  $("input[name='tugjoy_lat']").val('');	
  	   $("select[name='oblast']").val('0');	
  	    	$("select[name='oblast']").removeClass('not_error').addClass('error');
             //  	$("select[name='oblast']").css('background-color','#FFEFEF');
       }
};
function selectCountryLat($id){
        var id_place = $id;
        $.ajax({  
                type: "POST",
                url: "/uz/action/ajax.base.php",
                data: { action: 'showCountryForInsert',  id_place:  id_place },
                cache: false,
                success: function(responce){
                	$("input[name='tugjoy_lat']").val(responce); 
                $("select[name='oblast']").removeClass('error').addClass('not_error');
               	$("select[name='oblast']").css('background-color','#FFFFFF');
                	}
        });
 };
function selectRegionLat($id){
        var id_place = $id;
        if ($id!=0)
        {
        $.ajax({
                type: "POST",
                url: "/uz/action/ajax.base.php",
                data: { action: 'showRegionLat',  id_place:  id_place },
                cache: false,
                success: function(responce){$("input[name='tugjoy_lat']").val(responce); }
        });
        }
        else
        {
       $("input[name='tugjoy_lat']").val('');
       $("input[name='tugjoy_eng']").val('');
       }

};
function selectRegionEng($id){
        var id_place = $id;
        if ($id!=0)
        {
        $.ajax({
                type: "POST",
                url: "/uz/action/ajax.base.php",
                data: { action: 'showRegionEng',  id_place:  id_place },
                cache: false,
                success: function(responce){$("input[name='tugjoy_eng']").val(responce); }
        });
        }
        else
        {
       $("input[name='tugjoy_lat']").val('');
       $("input[name='tugjoy_eng']").val('');
       }

};
function getcountry($div_id){
	var ndiv=$div_id;
	var str_l='';
	if (ndiv!=0)
        {

        $.ajax({
                type: "POST",
                url: "/uz/action/ajax.base.php",
                data: { action: 'showCountry',  id_place:  ndiv },
                cache: false,
                success: function(responce){ ($('select[name="for_strana"]').val(responce));}
                });
        }
        return str_l;
// 	$("input[name='tugjoy_eng']").val(responce); } return str_l;



};
//
 
  function InstNext(act)  {
 	link2="location.href=?action=".act;      
  if ($('#chk_inst').is(':checked'))
      {  
      $("#next").attr("onClick",link2);
      $('#next').attr('disabled',false);                         /*Далее кнопкасини очиш*/
       }
     else
     {
     	  $('#next').attr('disabled','disabled');                /*Далее кнопкасини ёпиш*/
     }
  }
//
  function User_Session()
  {
      if($('#ses_name').val()!='')
      {
        $('#klient span').html($('#ses_name').val());
        $('#klient').show();
        $('#Chiqish').show();
        $('#Kirish').hide();
        
         $('#RO_eslat').hide();
        //$('#RO_eslat').replaceWith($('.add_comm'));
        $('.add_comm').show(); 
        $('#eslat').show();
        }
        else
        {
   	$('#klient span').html('');
        $('#klient').hide();
        $('#Chiqish').hide();
        $('#Kirish').show();
        
         $('#RO_eslat').show();
        // $('.add_comm').replaceWith($('#RO_eslat'));
        $('.add_comm').hide(); 
        $('#eslat').hide();
        }
  }      
     
   
  /*  $('#email_addr').blur(function() {
        if($(this).val() != '') {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            //   /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
            if(!pattern.test($(this).val())){
            MyAlert("Elektron pochta manzilida xato bor!","Ogohlantirish");
            }  
            }
  }*/
  /*$(function(){
$('#test_form').submit(function(e){
//отменяем стандартное действие при отправке формы
e.preventDefault();
//берем из формы метод передачи данных
var m_method=$(this).attr('method');
//получаем адрес скрипта на сервере, куда нужно отправить форму
var m_action=$(this).attr('action');
//получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
//то есть в стандартном формате передачи данных формы
var m_data=$(this).serialize();
$.ajax({
type: m_method,
url: m_action,
data: m_data,
success: function(result){
$('#test_form').html(result);
}
});
});
});*/
/*
(function($) {
  $.fn.autosubmit = function() {
    this.submit(function(event) {
      event.preventDefault();
      var form = $(this);
      $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize()
      }).done(function(data) {
        // Optionally alert the user of success here...
      }).fail(function(data) {
        // Optionally alert the user of an error here...
      });
    });
    return this;
  }
})(jQuery)

Add a data-autosubmit attribute to your form tag and you can then do this:
HTML

<form action="/blah" method="post" data-autosubmit>
  <!-- Form goes here -->
</form>

JS

$(function() {
  $('form[data-autosubmit]').autosubmit();
});*/
/*
  $('#formElem').submit(function(event) {
    event.preventDefault(); 
    var form = $(this);
    $.ajax({
      type: form.attr('method'),
      url: "upSert.php",
      data: form.serialize(),
      		target: '#htmlTarget',
		beforeSerialize: beforeSerialize,
		beforeSubmit:  showRequest,
		success: showResponse
    })
    /*.done(function(data) {
      // Optionally alert the user of success here...
    }).fail(function(data) {
      // Optionally alert the user of an error here...
    });
  });
});*/