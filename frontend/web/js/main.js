jQuery(document).ready(function(){
    

    jQuery(document).on('change', '#appeal-birth_country_id', function(){
        $.get('/kus/regions?sp_country_id='+jQuery(this).val(), function(data){
            jQuery('#appeal-sp_id').html(data);
            jQuery('#appeal-sp_id').trigger('change');
        });
    });

    jQuery(document).on('change', '#appeal-birth_region_id', function(){
        $.get('/kus/districts?birth_region_id='+jQuery(this).val(), function(data){
            jQuery('#appeal-sp_id').html(data);
        });
    });

    jQuery(document).on('change', '#appeal-birth_district_id', function(){
        $.get('/kus/places?birth_district_id='+jQuery(this).val(), function(data){
            jQuery('#appeal-sp_id').html(data);
        });
    });

    

    jQuery(document).click(function(){ jQuery('.specialViewArea').hide() })
    
});