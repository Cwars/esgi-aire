$(document).ready(function(){
    $.ajax({
        url: window.location.origin+"/assets/Chart.js/data.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var type = [];
            var id = [];

            for(var i in data) {
                type.push("Type : " + data[i].id);
                id.push(data[i].id);
            }

            var chartdata = {
                labels: type,
                datasets : [
                    {
                        label: 'Nombre',
                        backgroundColor: 'rgba(200, 200, 200, 0.75)',
                        borderColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                        hoverBorderColor: 'rgba(200, 200, 200, 1)',
                        data: id
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