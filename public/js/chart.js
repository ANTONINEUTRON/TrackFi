var xAxisLabel;
var yAxisLabel;

async function showChart(transactionHistory) {
  //Get date range
  xAxisLabel = getDateRange(transactionHistory);
  //Get amount
  yAxisLabel = getTransactionAmt(transactionHistory);



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
      // labels: [
      //   "5",
      //   "10",
      //   "15",
      //   "20",
      //   "25",
      //   "30",
      //   "35",
      //   "40",
      //   "45",
      //   "50",
      //   "52",
      //   "60",
      //   "67",
      //   "70",
      // ],
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
              return value+" Algo";
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



function getTransactionAmt(transactionHistory){//Returns list
  var transactionsList = []; //to contains object that will show points
  var dateAndAmountObj = getDateAndAmountPair(transactionHistory);

  for(var i = 0; i < xAxisLabel.length; i++){
    var xDate = xAxisLabel[i];
    for(var j = 0; j < dateAndAmountObj.length; j++){
      var dateAndAmt = dateAndAmountObj[j];
      if(dateAndAmt.date == xDate){
        transactionsList.push({x: dateAndAmt.date, y: dateAndAmt.amount})
      }
    }

    // if(transactionsList.length == xAxisLabel)
  }

  return transactionsList;
}

function getDateAndAmountPair(transactionHistory){
  var listOfAmtAndDate = [];
  for(var i = 0; i<transactionHistory.length; i++){
    var trx = transactionHistory[i];
    //get date
    var dte = new Date(trx["round-time"] * 1000);
    var ddate = getDateFormat(dte);
    //get amount
    var amt = trx["payment-transaction"].amount/1000000;
    //save as object to list
    listOfAmtAndDate.push({date: ddate, amount: amt});
  }

  console.log("PaiRS "+JSON.stringify(listOfAmtAndDate,null,4));
  return listOfAmtAndDate;
}
    
function getDateRange(transactionHistory){
  var listOfDate = [];

  var initTrans = transactionHistory[transactionHistory.length-1];
  var startTimeStamp = initTrans["round-time"];
  // console.log("List length "+transactionHistory.length+" ==START "+startTimeStamp+" ACTUAL="+new Date(startTimeStamp *1000));

  var finalTrans = transactionHistory[0];
  var endTimeStamp = finalTrans["round-time"];
  // console.log(" ==END "+endTimeStamp+" ACTUAL="+new Date(endTimeStamp *1000));

  var startDate = new Date(startTimeStamp * 1000);
  // console.log("start "+startDate);
  var endDate = new Date();
  // console.log("End "+endDate);
  for(var dt = new Date(startDate); dt<= new Date(endDate); dt.setDate(dt.getDate()+1)){
    var dte = new Date(dt);
    listOfDate.push(getDateFormat(dte));
  }
  console.log("List of  Date -"+listOfDate.toString());
  return listOfDate.slice(Math.max(transactionHistory.length - 20, 0));
}

function getDateFormat(dte){
  return dte.getDate()+"/"+(dte.getMonth()+1)+"/"+dte.getFullYear();
}