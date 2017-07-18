$(document).ready(function(){
    $.ajax({
        url: "http://esgi-aire.lan/assets/Chart.js/data.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var username = [];
            var id = [];

            for(var i in data) {
                username.push("User" + data[i].id);
                id.push(data[i].id);
            }

            var chartdata = {
                labels: username,
                datasets : [
                    {
                        label: 'User id',
                        backgroundColor: 'rgba(200, 200, 200, 0.75)',
                        borderColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                        hoverBorderColor: 'rgba(200, 200, 200, 1)',
                        data: id
                    }
                ]
            };

            var ctx = $("#mygraph");

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