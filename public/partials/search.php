<div class="search" id="search"><script>window.PetAdoption = {
    domain : "<?php echo get_option('pet_adoption_domain'); ?>",
    contactInfo : {
        tel : "<?php echo get_option('pet_adoption_tel'); ?>",
        email : "<?php echo get_option('pet_adoption_email'); ?>",
        web : "<?php echo get_option('pet_adoption_web'); ?>"
    }
};</script><div class="search-heading"><h1 class="search-heading__text"></h1></div><div class="search-preview"><div class="search-preview__wrap"></div></div><div class="search-cta"><h2 class="search-cta__text"><span><?php _e("Ready to adopt?", "boilerplate"); ?></span> <a href="tel:<?php echo get_option('pet_adoption_tel'); ?>"><?php echo get_option('pet_adoption_tel'); ?></a></h2></div><div class="search__wrap"><form class="search__form" action="#!"><div class="image"><div class="image__placeholder"></div></div><div class="instructions"><h5 class="instructions__heading"><?php _e("Instructions", "boilerplate"); ?></h5><p class="instructions__content"><?php echo get_option('pet_adoption_instructions'); ?></p></div><div class="search-fields"><div class="search-fields__wrap"><div class="advanced-options"><div class="advanced-options__wrap"><div class="toggle toggle--advanced-options"><a class="toggle__link" href="#"><?php _e("Advanced Options", "boilerplate"); ?></a></div><div class="advanced-options-view"><button class="remodal-close" data-remodal-action="close"></button><div class="advanced-options-view__wrap"></div><button class="remodal-cancel" data-remodal-action="cancel"><?php _e("Cancel", "boilerplate"); ?></button><button class="remodal-confirm" data-remodal-action="confirm"><?php _e("OK", "boilerplate"); ?></button></div></div></div><div class="field field--species species"><select class="field__select input-species" name="species"><option value="cat">cat</option><option value="dog">dog</option></select></div></div></div><div class="button button--submit"><input class="button__input" type="submit" value="Search"></div></form></div><div class="search-chips"></div><div class="search-results"><div class="search-results__wrap"></div></div></div>