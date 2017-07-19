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

            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});

$(document).ready(function(){
    $.ajax({
        url: window.location.origin+"/assets/Chart.js/category.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var compte = [];
            var nbr = [];

            for(var i in data) {
                compte.push("Type : " + data[i].type);
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

            var ctx = $("#mygraph2");

            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});