@extends('layouts.user.app')
@section('title','Alumni')
@section('content')
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="d-flex">
                        <div>
                            <h4>Grafik outcome alumni</h4>
                            <hr style="border-bottom:1px solid black">
                        </div>
                    </div>
                    <div width="900" height="900" class="mt-4">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    @section('charts')
        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				
				datasets: [{
					label: '# of Votes',
					data: [
                        {!!json_encode($kuliah)!!},
                        {!!json_encode($bekerja)!!},
                        {!!json_encode($menganggur)!!}, 
                        {!!json_encode($dll)!!}, 
                    ],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(122, 99, 255, 0.2)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(122, 99, 255, 1)',
					],
					borderWidth: 1
                }],
                labels: ["Kuliah", "Bekerja", "Menganggur", "Dll"],
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
  
        </script>   
    @endsection
@endsection