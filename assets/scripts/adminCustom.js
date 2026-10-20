$(document).ready(function() {

    let deployButton = $('.admin-menu-deploy-arrow');

    deployButton.click(function() {
        console.log('click');
        $(this).toggleClass('active');
        $(this).css('transform', !$(this).hasClass('active') ? 'rotate(90deg)' : 'rotate(0deg)');
        slideToggle($(this).closest('.admin-menu-item').find('.admin-submenu-container'));
    });
    
    slideToggle = function(element) {
        if (element.css('display') === 'none') {
            element.slideDown(300);
        } else {
            element.slideUp(300);
        }
    };

    slideDown = function(element) {
        if (element.css('display') === 'none') {
            element.slideDown(300);
        }
    };
});