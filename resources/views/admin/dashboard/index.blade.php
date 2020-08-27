@extends('layouts.app')
@section('title','Dashboard')
@section('content')
    @section('icon')
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gem mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z"/>
      </svg>
    @endsection
@section('pageTitle','Daashboard')
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Jumlah Alumni</div>
              </div>
              <div class="widget-content-right">
                  <div class="widget-numbers text-white"><span>{{ $alumni }}</span></div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Jumlah Pertanyaan</div>
              </div>
              <div class="widget-content-right">
                  <div class="widget-numbers text-white"><span>{{ $pertanyaan }}</span></div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3 widget-content bg-grow-early">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Jumlah Event</div>
              </div>
              <div class="widget-content-right">
                  <div class="widget-numbers text-white"><span>{{ $event }}</span></div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div width="50" height="500" class="mt-4">
              <canvas id="myChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('charts')
        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				
				datasets: [{
					label: 'Jumlah',
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
