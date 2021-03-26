jQuery(document).ready(function () {
    QueenOfTheWorkaround = {
        Creator: 'Ramona Eid',
        Supporter: 'Tara Kincade'
    };

    jQuery('#menu-project-filter a, #menu-type-filter a, #menu-system-filter a').on('click', function (e) {
        if (jQuery('#ajax-result-container')) {
            var category = '.' + jQuery(this).html().toLowerCase().replace(/\s/g, '-');
            jQuery('div.col').hide();
            var galleries = jQuery(category).show();
            var len = jQuery(galleries).length;
            var columns = 3;
            var padding = '';
            jQuery('div.ramona').remove();
            jQuery(galleries).each(function () {
                if (jQuery(this).parent().is('div.col-container')) {
                    jQuery(this).unwrap();
                }
            });

            for (i = 0; i < len; i += 3) {
                // https://stackoverflow.com/questions/3366529/wrap-every-3-divs-in-a-div
                galleries.slice(i, i + 3).wrapAll('<div class="col-container noborder"></div>')
            }

            if (len % 3 === 2) {
                padding += '<div class="col noborder threecol ramona">';
                padding += '<div class="project-link">';
                padding += '</div>';
                padding += '</div>';
            } else if (len % 3 === 1) {
                padding += '<div class="col noborder threecol ramona">';
                padding += '<div class="project-link">';
                padding += '</div>';
                padding += '</div>';
                padding += '<div class="col noborder threecol ramona">';
                padding += '<div class="project-link">';
                padding += '</div>';
                padding += '</div>';
            }
            jQuery(category).last().after(jQuery(padding));

            // var etop = jQuery('#ajax-result-container').offset().top;
            var etop = jQuery('#main').offset().top;
            jQuery('html, body').animate({
                scrollTop: etop
            }, 500);
            return false;
        }

    });


});