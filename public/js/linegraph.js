
$(document).ready(function() {
    $.ajax({
        url: "http://localhost/iot-assignment/api/getpost.php",
        type: "GET",
        success: function(data) {
            console.log(data)
            var id = [];
            var timestamp = [];
            var temperature = [];
            var device = [];

            for(var i in data) {
                id.push("Id" + data[i].ID);
                timestamp.push(data[i].timestamp);
                temperature.push(data[i].Temperature);
                device.push(data[i].device);
            }

            var chartdata = {
                labels: device,
                datasets: [
                    {
                        label: "Temperature chart",
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: "rgba(59, 89, 152, 0.75)",
                        borderColor: "rgba(59, 89, 152, 1)",
                        pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
                        pointHoverBorderColor: "rgba(59, 89, 152, 1)",
                        data: temperature
                    }
                ]
            };

            var ctx = $("#mycanvas");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error: function(data) {

        }
    })
})