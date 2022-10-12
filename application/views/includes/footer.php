       <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="<?php echo base_url();?>" target="_blank">sample </a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url();?>assets/vendor/global/global.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/select2/js/select2.full.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins-init/select2-init.js"></script>
	
	<!-- Apex Chart -->
	<!-- <script src="<?php echo base_url();?>assets/vendor/apexchart/apexchart.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.bundle.min.js"></script> -->

	<!-- Datatable -->
	<script src="<?php echo base_url();?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins-init/datatables.init.js"></script>
	<!-- Chart piety plugin files -->
    <script src="<?php echo base_url();?>assets/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="<?php echo base_url();?>assets/js/dashboard/dashboard-1.js"></script>
	
	<script src="<?php echo base_url();?>assets/vendor/owl-carousel/owl.carousel.js"></script>
	<!-- momment js is must -->
	<script src="<?php echo base_url();?>assets/vendor/moment/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- pickdate -->
	<script src="<?php echo base_url();?>assets/vendor/pickadate/picker.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/pickadate/picker.time.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/pickadate/picker.date.js"></script>
	<!-- Pickdate -->
	<script src="<?php echo base_url();?>assets/js/plugins-init/pickadate-init.js"></script>

	
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/dlabnav-init.js"></script>
	<script src="<?php echo base_url();?>assets/js/demo.js"></script>
    <script src="<?php echo base_url();?>assets/js/styleSwitcher.js"></script>
	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		jQuery(document).ready(function(){
			setTimeout(function(){
				dlabSettingsOptions.version = 'dark';
				new dlabSettings(dlabSettingsOptions);
			},1500)
		});
		

		
	</script>
<script>
 $(function(){
		var labele = [];
		var datas =[];
	$.ajax({
            url:"<?php echo base_url().'graph/';?>",
            type:"get",
            dataType:"json",
            success:function(response){
				//console.log(response.results);
				response.results.forEach((a)=>{
					labele.push(a.model);
					datas.push(a.tripConsumption);
					myChart.update();
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
                //console.log(textStatus, errorThrown);
            }

        });
console.log(labele);

	const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labele,
        datasets: [{
            label: 'Fuel Consumption per truck',
            data: datas,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

	$("#statusType").change(function () {		  
              var selectedText = $(this).find("option:selected").text();       
			  var bookingId = $(this).attr('id');
        alert(tripId);
			switch (selectedText) {
				case "En-Route":
					
					$("#odometer_end").prop('disabled', true);
					$("#odometer_end").hide();
					break;

				case "Arrived":
					
					$("#odometer_end").prop('disabled', false);
					$("#odometer_end").show();
					
				break;
			
				default:
					break;
			}

     })



    $(".status").change(function () {		  
              var selectedText = $(this).find("option:selected").text();
              var requestValue = $(this).val();
			  var bookingId = $(this).attr('id');
        //alert("im in"+requestValue+selectedText+bookingId);
      
          $.ajax({
                url:"<?php echo base_url().'update-bookingstatus/';?>"+bookingId,
                type:"POST",
				data:{selectedText:selectedText,requestValue:requestValue},
                dataType:"json",
                success:function(response){
					console.log(response.data);
                },error: function(jqXHR, textStatus, errorThrown) {
							    console.log(jqXHR.responseText);
						      //console.log(textStatus, errorThrown);
						}
            
          });
     })

 })
 </script>
</body>
</html>