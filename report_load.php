<?php
require "connect.php";
$sql = "SELECT CarID FROM car";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$total=count($rows);

$sql = "SELECT CarID FROM car where CategoryID='1'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$category1=count($rows);

$sql = "SELECT CarID FROM car where CategoryID='2'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$category2=count($rows);

$sql = "SELECT CarID FROM car where CategoryID='3'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$category3=count($rows);

$p1=$category1/$total;
$p2=$category2/$total;
$p3=$category3/$total;

$sql = "SELECT User_ID FROM user";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$usernumber=count($rows);

$sql = "SELECT User_ID FROM user where UserType=0";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$custnumber=count($rows);

$sql = "SELECT User_ID FROM user where UserType=1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$adminnumber=count($rows);

$sql = "SELECT User_ID FROM user where UserType=2";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$staffnumber=count($rows);

$cusetper=$custnumber/$usernumber;
$adminper=$adminnumber/$usernumber;
$staffper=$staffnumber/$usernumber;

$sql = "SELECT BookingID FROM booking where status=1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$accept=count($rows);

$sql = "SELECT BookingID FROM booking where status=2";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$reject=count($rows);

$sql = "SELECT BookingID FROM booking where status=3";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt->setFetchMode(PDO::FETCH_ASSOC);  
$cancel=count($rows);
?>
<script>// car pie chart
var data = [{
  values:  [<?php echo $p1 ?>, <?php echo $p2?>, <?php echo $p3?>],
  labels: ['Standards', 'Special', 'Premium'],
  type: 'pie'
}];
Plotly.newPlot('Carcategory', data, {}, {showSendToCloud:true});
</script>

<script>//car bullet chart
var data = [
  {
    type: "indicator",
    mode: "number+gauge+delta",
    gauge: { shape: "bullet" },
    delta: { reference: 8 },
    value: <?php echo $total; ?>,
    domain: { x: [0, 1], y: [0, 1] },
    title: { text: ""}
  }
];
var layout = { width: 600, height: 250 };
Plotly.newPlot('carnumber', data, layout);
</script>

<script>// car bar chart
var trace1 = {
  x: [<?php echo $accept; ?>],
  y: ['Booking'],
  name: 'Accepted booking',
  orientation: 'h',
  marker: {
    color: 'rgba(55,128,191,0.6)',
    width: 1
  },
  type: 'bar'
};

var trace2 = {
  x: [<?php echo $reject; ?>],
  y: ['Booking'],
  name: 'Rejected booking',
  orientation: 'h',
  type: 'bar',
  marker: {
    color: 'rgba(255,153,51,0.6)',
    width: 1
  }
};
var trace3 = {
  x: [<?php echo $cancel; ?>],
  y: ['Booking'],
  name: 'User cacel',
  orientation: 'h',
  type: 'bar',
  marker: {
    color: 'rgba(255, 99, 71, 1)',
    width: 1
  }
};

var data = [trace1, trace2,trace3];

var layout = {
  title: 'Colored Bar Chart',
  barmode: 'stack'
};

Plotly.newPlot('carbar', data, layout);
</script>

<script>//user bullet chart
var data = [
  {
    type: "indicator",
    mode: "number+gauge+delta",
    gauge: { shape: "bullet" },
    delta: { reference: 6 },
    value: <?php echo $usernumber; ?>,
    domain: { x: [0, 1], y: [0, 1] },
    title: { text: ""}
  }
];
var layout = { width: 600, height: 250 };
Plotly.newPlot('usernumber', data, layout);
</script>

<script>//user bar chart
var data = [{
  x: ['Customer', 'Admin', 'Staff'],
  y: [<?php echo $custnumber ?>, <?php echo $adminnumber ?>, <?php echo $staffnumber ?>],
  type: 'bar'
}];

Plotly.newPlot('userbar', data, {}, {showSendToCloud:true});
</script>

<script>//user pie chart
var data = [{
  values:  [<?php echo $cusetper ?>, <?php echo $adminper ?>, <?php echo $staffper ?>],
  labels: ['Customer', 'Admin', 'Staff'],
  type: 'pie'
}];
Plotly.newPlot('userpie', data, {}, {showSendToCloud:true});
</script>


<script>
 $("#carnumber").on("click", function () {
$("#carpart").show();
$("#userpart").hide();
})
$("#usernumber").on("click", function () {
$("#carpart").hide();
$("#userpart").show();
})
 
</script>