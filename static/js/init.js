/**
 * Created by BOSS on 7/21/2017.
 */

$(".button-collapse").sideNav();
$('select').material_select();

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

function showToast(option) {
    console.log(option);
    var col = option.color ? option.color : 'black';
    if (option.status){
        return Materialize.toast(option.msg, 4000, col, function(){
            $.ajax({
                url: '/admin/hide_nofy',
                type: 'POST',
                data: {dc: true},
                success: function (resp) {
                    console.log(resp);
                }
            });
        });
    }
}

// function genTree(uid) {
//     $.ajax({
//         url: '/admin/getTree',
//         type: 'POST',
//         data: {id: uid},
//         success: function (resp) {
//             var thedata = JSON.parse(resp);
//             console.log(thedata);
//             var orData = [];
//
//             $.each(thedata, function (key, item) {
//                 orData.push({
//                     'description': item.description,
//                     'tooltip': item.tooltip,
//                     'children': JSON.parse(item.children)
//                 });
//             });
//
//             console.log(orData);
//
//             $('#memberTree').hortree({
//                 data: [
//                     {
//                         description: "Element ROOT",
//                         children: [
//                             {
//                                 description: "Element 1",
//                                 children: [
//                                     {
//                                         description: "Element 1.1",
//                                         children: []
//                                     },
//                                     {
//                                         description: "Element 1.2",
//                                         children: [
//                                             {
//                                                 description: "Element 1.2.1",
//                                                 children: []
//                                             }
//                                         ]
//                                     }
//                                 ]
//                             },
//                             {
//                                 description: "Element 2",
//                                 children: [
//                                     {
//                                         description: "Element 2.1 with tooltip",
//                                         tooltip: "Hey I'm a tooltip",
//                                         children: []
//                                     },
//                                     {
//                                         description: "Element 2.2",
//                                         children: []
//                                     }
//                                 ]
//                             },
//                             {
//                                 description: "Element 3",
//                                 children: [
//                                     {
//                                         description: "Element 3.1",
//                                         children: []
//                                     },
//                                     {
//                                         description: "Element 3.2",
//                                         children: []
//                                     },
//                                     {
//                                         description: "Element 3.3",
//                                         children: [
//                                             {
//                                                 description: "Element 3.3.1",
//                                                 children: []
//                                             },
//                                             {
//                                                 description: "Element 3.3.2",
//                                                 children: []
//                                             }
//                                         ]
//                                     }
//                                 ]
//                             }
//                         ]
//                     }
//                 ]
//             });
//         }
//     });
// }


$(function() {
    $("table").treetable();

});