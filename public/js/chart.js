var xAxisLabel;
var yAxisLabel;

async function showChart(transactionHistory) {
  //Get date range
  xAxisLabel = getTransactionDate(transactionHistory);//getDateRange(transactionHistory);
  //Get amount
  yAxisLabel = getDateAndAmountPair(transactionHistory);


  
  //getting min val to use for mobile and large screens
  let width = window.innerWidth;

  // let minVal = "0"
  // if (width <= 400) {
  //   minVal = '50'
  // }
  // else {
    let minVal = 0
  // }
  //chartjs section
  var ctx = document.getElementById("myChart").getContext("2d");
  var gradient = ctx.createLinearGradient(0, 0, 0, 300);
  gradient.addColorStop(0, 'rgba(0, 255, 187, 1)');
  gradient.addColorStop(1, 'rgba(5, 5, 5, 0.8)');

  var myChart = new Chart(ctx, {

    type: "line",
    data: {
      // this labels are the x-axis values of chart
      labels: xAxisLabel,//Declared in the main html
      datasets: [

        {
          //this are the y-axis chart value
          data: yAxisLabel,
          // [
          //   1000, 3000, 2000, 5000, 1000, 5000, 3000, 2000, 5000, 1000, 5000,
          //   3000, 2000, 5000,
          // ],
          yAxisID: "y",

          borderColor: ["#7bfff8"],
          borderWidth: 4,
          fill: true,
          tension: 0.4,
          backgroundColor: gradient,
          pointRadius: 5,
          pointBorderWidth: 3,
          pointBorderColor: '#81e9f7',
          pointBackgroundColor: 'white'

        },
      ],
    },
    options: {
      //optional legend display, set to true to show
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        // y-axis label setup
        y: {
          beginAtZero: true,
          type: "linear",
          position: "right",
          grid: {

            borderColor: 'white',
            tickColor: 'white'
          },
          ticks: {
            callback: function (value, index, ticks) {
              return value+" "+selectedCurr;
            },
            color: 'white'
          }
        },
        //x-asis label setup
        x: {
          grid: {

            borderColor: 'white',
            tickColor: 'white'
          },
          ticks: {
            color: 'white'
          },
          //minimum value gotten from screen width
          min: minVal

        },

      },
      maintainAspectRatio: false,
      //chart animation    
      animation: {
        delay: 500,
        duration: 3000,
        easing: "easeInOutBack"
      },

    },
  });
}



function getDateAndAmountPair(transactionHistory){
  var listOfAmtAndDate = [];
  for(var i = transactionHistory.length - 1; i>=0; i--){
    var trx = transactionHistory[i];
    //get date
    var dte = new Date(trx["round-time"] * 1000);
    var ddate = getDateFormat(dte);
    //get amount
    var amt = (trx["payment-transaction"].amount/1000000)*MULTIPLIER;
    //save as object to list
    listOfAmtAndDate.push({x: ddate, y: amt});
  }

  return listOfAmtAndDate.slice(Math.max(transactionHistory.length - 17, 0));
}

function getTransactionDate(transactionHistory){
  let arrOfDates = [];
  for(var i=transactionHistory.length-1; i>=0; i--){
    let element = transactionHistory[i];
    let datee = new Date(element["round-time"]*1000);
    arrOfDates.push(getDateFormat(datee));
  }
  return arrOfDates.slice(Math.max(transactionHistory.length - 17, 0));
}

function getDateFormat(dte){
  return dte.getDate()+"/"+(dte.getMonth()+1)+"/"+dte.getFullYear();
}