// Bar chart - mygraph1 -  Type de compte user

$(document).ready(function(){
    $.ajax({
        url: window.location.origin+"/assets/Chart.js/compte.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var compte = [];
            var nbr = [];

            for(var i in data) {
                compte.push("Compte : " + data[i].status);
                nbr.push(data[i].nbr);
            }

            var chartdata = {
                labels: compte,
                datasets : [
                    {
                        label: 'Nombre',
                        backgroundColor: 'rgba(0, 91, 255, 0.9)',
                        data: nbr
                    }
                ]
            };

            var ctx = $("#mygraph1");
            var optionsmygraph1 = {
                title : {
                    display : true,
                    position : "top",
                    text : "Nombre d'utilisateurs par type de compte",
                    fontSize : 20,
                    fontColor : "#111"
                },
                legend : {
                    display : true,
                    position : "bottom"
                }
            };
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata,
                options : optionsmygraph1
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});

// Doughnut - mygraph2 - Nombre d'articles par Category
$(document).ready(function(){

    $.ajax({
        url: window.location.origin+"/assets/Chart.js/category.php",
        type : "GET",
        success : function(data) {

            console.log(data);
            var nbr = [];
            var len = data.length;

            for (var i = 0; i < len; i++) {
                    nbr.push(data[i].nbr);
            }

            var ctx1 = $("#mygraph2");
            var data1 = {
                labels : ["Blog", "Music", "News", "Autres"],
                datasets : [
                    {
                        // label : "",
                        data : nbr,
                        backgroundColor : [
                            "#0000FF",
                            "#00BFFF",
                            "#87CEEB",
                            "#BBD2E1",
                            "#2E8B57"
                        ],
                        borderWidth : [1, 1, 1, 1, 1]
                    }
                ]
            };

            var options1 = {
                title : {
                    display : true,
                    position : "top",
                    text : "Nombre d'articles par Catégorie",
                    fontSize : 20,
                    fontColor : "#111"
                },
                legend : {
                    display : true,
                    position : "bottom"
                }
            };

            var chart1 = new Chart( ctx1, {
                type : "doughnut",
                data : data1,
                options : options1
            } );

        },
        error : function(data) {
            console.log(data);

        }
    });

// Bar chart - mygraph3  - Type de fichier dans Mediafile
    $(document).ready(function(){
        $.ajax({
            url: window.location.origin+"/assets/Chart.js/mediafile.php",
            method: "GET",
            success: function(data) {
                console.log(data);
                var type = [];
                var nbr = [];

                for(var i in data) {
                    type.push("Type : " + data[i].type);
                    nbr.push(data[i].nbr);
                }

                var chartdata = {
                    labels: type,
                    datasets : [
                        {
                            label: 'Nombre total',
                            backgroundColor: 'rgba(0, 91, 255, 0.9)',
                            data: nbr
                        }
                    ]
                };

                var ctx = $("#mygraph3");
                var optionsmygraph3 = {
                    title : {
                        display : true,
                        position : "top",
                        text : "Nombre de Type de fichier dans Mediafile",
                        fontSize : 20,
                        fontColor : "#111"
                    },
                    legend : {
                        display : true,
                        position : "bottom"
                    }
                };
                var barGraph = new Chart(ctx, {
                    type: 'bar',
                    data: chartdata,
                    options : optionsmygraph3
                });
            },
            error: function(data) {
                console.log(data);
            }
        });
    });

    // Bar - mygraph4 -
// $(document).ready(function(){
//     $.ajax({
//         url: window.location.origin+"/assets/Chart.js/category.php",
//         method: "GET",
//         success: function(data) {
//             console.log(data);
//             var compte = [];
//             var nbr = [];
//
//             for(var i in data) {
//                 compte.push("Type : " + data[i].type);
//                 nbr.push(data[i].nbr);
//             }
//
//             var chartdata = {
//                 labels: compte,
//                 datasets : [
//                     {
//                         label: 'Nombre',
//                         backgroundColor: 'rgba(0, 91, 255, 0.9)',
//                         data: nbr
//                     }
//                 ]
//             };
//
//             var ctx = $("#mygraph2");
//             var barGraph = new Chart(ctx, {
//                 type: 'bar',
//                 data: chartdata
//             });
//         },
//         error: function(data) {
//             console.log(data);
//         }
//     });
// });
});