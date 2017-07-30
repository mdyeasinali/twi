/**
 * Created by BOSS on 7/21/2017.
 */

$(".button-collapse").sideNav();

$('#notifications-box .dropdown-button').dropdown({
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        hover: false, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
    }
);

$('.leftside-navigation').collapsible();