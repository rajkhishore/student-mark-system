
<?php
session_start();
$data = $_SESSION['data'];
if($data==true)
 {

 }
 else 
   {
    echo "<script>window.location.href='index.php';</script>";
   } 
?>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body class="bg-info">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="C:\Users\HP\node_modules\chart.js\dist\Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha256-nZaxPHA2uAaquixjSDX19TmIlbRNCOrf5HO1oHl5p70=" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-md navbar-hover bg-hover fixed-top ">
        <div id="my-nav" class="collapse navbar-collapse d-flex ">
                      <center> <div class="mx pl-5"><h3 class="text-info"> <?php echo $data['F_name']; ?> Dashboard</h3></div></center>
        </div>
    </nav>
    <div class="">
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><div class="container" style="height:300px; width:500px; margin:80px;"><canvas id="chart"></canvas></div></li>
    </ul>
    
    <script>
        
        var chart = document.getElementById('chart');
        Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#755';
        var stuChart = new Chart(chart, {
            type: 'pie',
            data: {
                labels: ['IT401', 'IT402', 'IT403', 'IT404', 'IT405', 'IT406'],
                datasets: [{
                    data: ['<?php echo $data['m1']; ?>', '<?php echo $data['m2']; ?>', '<?php echo $data['m3']; ?>', '<?php echo $data['m4']; ?>', '<?php echo $data['m5']; ?>', '<?php echo $data['m6']; ?>'],
                    backgroundColor : ['#5cd68f','#d65249','#5cd68f','#d65249','#5cd68f','#d65249'],    
                    borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'            
                }],
            },
            
        });
        
    </script>

</body>

</html>