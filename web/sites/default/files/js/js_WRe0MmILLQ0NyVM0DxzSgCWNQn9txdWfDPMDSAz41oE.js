/* @license GNU-GPL-2.0-or-later https://www.drupal.org/licensing/faq */
(function($,Drupal,once){'use strict';Drupal.behaviors.webformElementMore={attach:function(context){$(once('webform-element-more','.js-webform-element-more',context)).each(function(event){var $more=$(this);var $a=$more.find('a').first();var $content=$more.find('.webform-element-more--content');$a.attr({'aria-expanded':false,'aria-controls':$content.attr('id')});$a.parent().on('click',toggle).on('keydown',function(event){if(event.which===32||event.which===13)toggle(event);});function toggle(event){var expanded=($a.attr('aria-expanded')==='true');$a.attr('aria-expanded',!expanded);if(expanded){$more.removeClass('is-open');$content.slideUp();}else{$more.addClass('is-open');$content.slideDown();}event.preventDefault();}});}};})(jQuery,Drupal,once);;
