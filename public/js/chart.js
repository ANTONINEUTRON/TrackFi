var xAxisLabel;
var yAxisLabel;

async function showChart(transactionHistory, address, balance) {
  //Get date range
  xAxisLabel = getTransactionDate(transactionHistory);//getDateRange(transactionHistory);
  //Get amount
  yAxisLabel = getDateAndBalPair(transactionHistory, address, balance);//TODO WORK HERE


  
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

function getDateAndBalPair(transactionHistory,address,balance){
  let today = getDateFormat(new Date());
  let listOfBalAndDate = [{x: today, y: balance}];

  for(var i = 0; i < transactionHistory.length; i++){
    let trx = transactionHistory[i];
    //get date
    let dte = new Date(trx["round-time"] * 1000);
    let ddate = getDateFormat(dte);
    //get amount
    var amt = (trx["payment-transaction"].amount/1000000)*MULTIPLIER;
    //Calculate balance
    let prevBalance = listOfBalAndDate[listOfBalAndDate.length - 1].y;
    let balAtMoment = 0;
    if(trx["payment-transaction"].receiver == address){
      balAtMoment = prevBalance - amt;
    }else{
      balAtMoment = prevBalance + amt;
    }
    listOfBalAndDate.push({x: ddate, y: balAtMoment});
  }
  return listOfBalAndDate.reverse();
}

function getTransactionDate(transactionHistory){
  let arrOfDates = [];
  for(var i=transactionHistory.length-1; i>=0; i--){
    let element = transactionHistory[i];
    let datee = new Date(element["round-time"]*1000);
    arrOfDates.push(getDateFormat(datee));
  }
  return arrOfDates;
}

function getDateFormat(dte){
  return dte.getDate()+"/"+(dte.getMonth()+1)+"/"+dte.getFullYear();
}