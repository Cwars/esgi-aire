// Bar chart - mygraph1 -  Type de compte user

$(document).ready(function(){
    $.ajax({
        // Récupère des données en ajax
        url: window.location.origin+"/views/back/dashboard/compte.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var nbr = [];
            var label = [];

            for(var i in data) {
                nbr.push(data[i].nbr);
                // Récupère le nombre total par status
                label[i] = data[i].status;
                // Récupère les nom de status
            }

            var datamygraph1 = {
                labels: label,
                // Le label définit les différents nom des status
                datasets : [
                    {
                        data: nbr,
                        // Récupére le nombre total de type de compte
                        label: "Nombre total d'utilisateur",
                        backgroundColor: 'rgba(0, 91, 255, 0.9)'
                    }
                ]
            };

            var ctx = $("#mygraph1");
            // Graph appelé dans un canvas avec ID

            var optionsmygraph1 = {
                title : {
                    display : true,
                    position : "top",
                    text : "Nombre d'utilisateurs par type de compte",
                    fontSize : 20,
                    fontColor : "#110"
                },
                legend : {
                    display : true,
                    position : "bottom"
                }
            };

            // Rajoute d'options au graphe

            var myGraph1 = new Chart(ctx, {
                type: 'bar',
                data: datamygraph1,
                options : optionsmygraph1
            });
            // On déssine le graphe avec les différentes données
        },
        error: function(data) {
            console.log(data);
        }
    });
});

// Doughnut - mygraph2 - Nombre d'articles par Category

$(document).ready(function(){
    $.ajax({
        url: window.location.origin+"/views/back/dashboard/category.php",
        type : "GET",
        success : function(data) {
            console.log(data);
            var nbr = [];
            var label = [];
            var len = data.length;

            for (var i = 0; i < len; i++) {
                nbr.push(data[i].nbr);
                label[i] = data[i].type;
            }

            var ctx1 = $("#mygraph2");
            var datamygraph2 = {
                labels : label,
                datasets : [
                    {
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

            var optionsmygraph2 = {
                title : {
                    display : true,
                    position : "top",
                    text : "Nombre d'articles par Catégorie",
                    fontSize : 20,
                    fontColor : "#110"
                },
                legend : {
                    display : true,
                    position : "bottom"
                }
            };

            var myGraph2 = new Chart( ctx1, {
                type : "doughnut",
                data : datamygraph2,
                options : optionsmygraph2
            } );

        },
        error : function(data) {
            console.log(data);
        }
    });

// Bar chart - mygraph3  - Type de fichier dans Mediafile

    $(document).ready(function(){
        $.ajax({
            url: window.location.origin+"/views/back/dashboard/mediafile.php",
            method: "GET",
            success: function(data) {
                console.log(data);
                var nbr = [];
                var label = [];

                for(var i in data) {
                    nbr.push(data[i].nbr);
                    label[i] = data[i].type;
                }

                var chartdata = {
                    labels: label,
                    datasets : [
                        {
                            data: nbr,
                            label: "Nombre total de fichier",
                            backgroundColor: 'rgba(0, 91, 255, 0.9)'
                        }
                    ]
                };
                var ctx = $("#mygraph3");
                var optionsmygraph3 = {
                    title : {
                        display : true,
                        position : "top",
                        text : "Nombre de Type de fichier dans Mediafile",
                        fontColor : "#110",
                        fontSize : 20
                    },
                    legend : {
                        display : true,
                        position : "bottom"
                    }
                };
                var myGraph3 = new Chart(ctx, {
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
});