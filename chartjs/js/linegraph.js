$(document).ready(function(){
  $.ajax({
    url : "http://localhost:8080/miniIA/chartjs/followersdata.php",
    type : "GET",
    success : function(data){
      console.log(data);

      var day = [];
      //var totalCal = [];
      var weight = [];

      for(var i in data) {
        day.push(data[i].day);
        //totalCal.push(data[i].totalCal);
        weight.push(data[i].weight);
      }
      var chartdata = {
        labels: day,
        datasets: [
          /*{
            label: "total calories",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor: "rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: totalCal
          },*/
          {
            label: "weight",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(29, 202, 255, 0.75)",
            borderColor: "rgba(29, 202, 255, 1)",
            pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
            pointHoverBorderColor: "rgba(29, 202, 255, 1)",
            data: weight
          },
        ]
      };

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata
      });
    },
    error : function(data) {

    }
  });
});
