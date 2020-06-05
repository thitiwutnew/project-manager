<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <title>Gantt View</title>

    <link rel="stylesheet" href="global/vendor/Timeline/style.css?v2" />
   <script>
 
    var app = {};
      app.months_json = ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"];
    </script>

          </head>
<body>
<div id="wrapper" style="min-height: 964px;">
	<div class="content">
		<div class="row">
			
			    <div id="gantt"> </div>
		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" id="jquery-gantt-js" src="https://www.perfexcrm.com/demo/assets/plugins/gantt/js/jquery.fn.gantt.min.js?v=2.3.5"></script>
<script>
	  var gantt_data = [
			      <?php  include('Connnect.php');
						$sql = "SELECT * FROM projects ";
						$stmt = $conn->prepare($sql);
                         $stmt->execute();
                         $count =0;
						 while ($row = $stmt->fetch()) {
                          $count +=1;
                              $start_date = $row['ProjectStartDate'];
                              $start_date = date_create($start_date);
                              $start_date = date_format($start_date, 'd-m-Y');
                              $start_date = strtotime($start_date);
                              $start_date = $start_date * 1000;
                              $end_date = $row['ProjectEndDate'];
                              $end_date = date_create($end_date);
                              $end_date = date_format($end_date, 'd-m-Y');
                              $end_date = strtotime($end_date);
                              $end_date = $end_date * 1000;
											 ?>
	          { name: "<?php echo $count;?>. <?php echo $row['ProjectName']?>",
							desc: "",
							values: [{
								from: <?php echo $start_date;?>,
								to: <?php echo $end_date;?>,
								label: "<?php echo $row['ProjectName']?>", 
								customClass: "ganttGreen"
							}]
						},
        <?php } ?>];		
		$(function(){

			$("#gantt").gantt({
				source: gantt_data,
				itemsPerPage: 25,
				months: app.months_json,
				navigate: 'scroll',
				onRender: function() {
					$('#gantt .leftPanel .name .fn-label:empty').parents('.name').css('background', 'initial');
				}
			});
		});
	</script></body>
</html>