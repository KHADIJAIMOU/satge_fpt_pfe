@extends('auth.admin.base')
@section('title', 'Tableau de Bord')
@section('content')

<section class="content">
  <h1>{{$dateRange}} v</h1>

    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row" >
        <div class="col-lg-4 col-4">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$nbRapports}}<sup style="font-size: 20px"> Rapports</sup></h3>

              <p>les rapports</p>
            </div>
            <div class="icon">
                <i class="fa-regular fa-file"></i>            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-4">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$users}}<sup style="font-size: 20px"> Utilisateurs</sup></h3>

              <p>les Utilisateurs</p>
            </div>
            <div class="icon">
                <i class="fa-regular fa-user"></i>            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        {{-- <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> 
          </div>
        </div>
        <!-- ./col --> --}}
        <div class="col-lg-4 col-4">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>-<sup style="font-size: 20px"> ----------------------</sup></h3>

              <p>--------------------</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <!-- ./col -->
       {{-- <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
  
                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          --}}
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        {{-- <section class="col-lg-12 connectedSortable"> --}}
          <!-- Custom tabs (Charts with tabs)-->
          {{-- <div class="card bg-gradient-white">
            <div class="card-header border-0">
              <h3 class="card-title">
                <i class="fas fa-th mr-1"></i>
                Sales Graph1
              </h3>
              <div class="card-body">
                <canvas id="myChart0" width="400" height="200"></canvas>
            </div> --}}
            <!-- /.card-body -->
            
          {{-- </div> --}}
          <!-- /.card -->
             <!-- /.card -->
             {{-- Yart4" width="400" height="400"></canvas> --}}
              {{-- </div> --}}
              <!-- /.card-body -->
              
            {{-- </div>
           
           
        </section> --}}
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
          <form id="dashboard-form" action="{{ route('admin.dashboard') }}" method="post">
            @csrf
          <div class="form-group">
            <label>Date range:</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="far fa-calendar-alt"></i>
                </span>
              </div>
              <input type="text" class="form-control float-right" id="reservation" name="reservation">
              <button type="submit"> ok</button>
            </div>
                
                </div>
          </form>
  <!-- solid sales graph -->
          <div class="card bg-gradient-white">
            <div class="card-header border-0">
              
              <h1 class="card-title">
                <h3>  <i class="fas fa-th mr-1"></i>                   Nombre d'absences Par Date.
                </h3>
              
            </h1>
              <div class="card-body">
                <canvas id="myChart1" width="400" height="200"></canvas>
            </div>
            <!-- /.card-body -->
            
          </div>
          <!-- /.card -->
        </section>
        <center>
        <section class="col-lg-12 connectedSortable mt-1">
            <div class="card bg-gradient-white">
              <div class="card-header border-0">
                <h1 class="card-title">
                    <h3>  <i class="fas fa-th mr-1"></i>   Suivi d'avis "Programme Nutritional de class interieur".</h3>
                  
                </h1>
              </div>
              <div class="row">
                <div class="col-lg-6">
                   <i> <h4>Respect Programme Nutritional</h4></i>
                  <canvas id="myChart2" width="200" height="100"></canvas>
                </div>
                <div class="col-lg-6">
                    <i> <h4>Quality</h4></i>

                  <canvas id="myChart3" width="200" height="100"></canvas>
                </div>
                <div class="col-lg-6">
                    <i> <h4>Quantity</h4></i>

                    <canvas id="myChart5" width="200" height="100"></canvas>
                  </div>
              </div>
            </div>
            
          </section>
          
        </center>
        
      </div>

        
@endsection
@section('scripts')
<script>
  const reservationInput = document.querySelector('#reservation');

reservationInput.addEventListener('change', () => {
  const form = document.querySelector('#dashboard-form');
  form.submit();
});
  // const ctx0 = document.getElementById('myChart0').getContext('2d');
  // const myChart0 = new Chart(ctx0, {
  //   type: "line",
  //   data: {
  //     labels: [50,60,70,80,90,100,110,120,130,140,150],
  //     datasets: [{
  //       fill: false,
  //       lineTension: 0,
  //       backgroundColor: "rgba(0,0,255,1.0)",
  //       borderColor: "rgba(0,0,255,0.1)",
  //       data: [7,8,8,9,9,9,10,11,14,14,15],
  //     }]
  //   },
  //   options: {
  //     legend: {display: false},
  //     scales: {
  //       yAxes: [{ticks: {min: 6, max:16}}],
  //     }
  //   }
  // });
  const ctx1 = document.getElementById('myChart1').getContext('2d');
  var primairePercentage = 0;
var lyceePercentage = 0;
var collegePercentage = 0;
var btsPercentage = 0;
var primaire =  {{$primaire}};
var lycee=  {{$lycee}};
var college =  {{$college}};
var bts=  {{$bts}};
var total = {{$total}};
if (total !==0) {
  primairePercentage = Math.round(((primaire/total)*100),2);
  lyceePercentage = Math.round(((lycee/total)*100),2);
  collegePercentage = Math.round(((college/total)*100),2);
  btsPercentage =Math.round(((bts/total)*100),2);
}
const myChart1 = new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: ['Primaire', 'SECONDAIRE QUALIFIANT', 'SECONDAIRE COLLEGIAL', 'BTS'],
    datasets: [{
      label: 'Absences Primaire',
      data: [primairePercentage, 0, 0, 0],
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1
    }, {
      label: 'Absences SECONDAIRE QUALIFIANT',
      data: [0, lyceePercentage, 0, 0],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }, {
      label: 'Absences SECONDAIRE COLLEGIAL',
      data: [0, 0,collegePercentage, 0],
      backgroundColor: 'rgba(255, 206, 86, 0.2)',
      borderColor: 'rgba(255, 206, 86, 1)',
      borderWidth: 1
    }, {
      label: 'Absences BTS',
      data: [0, 0, 0, btsPercentage],
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1
    }]
  },
  options: {
    legend: {
      display: true,
      labels: {
        fontSize: 14,
        fontColor: 'black'
      }
    }
  }
});

  const ctx2 = document.getElementById('myChart2').getContext('2d');
const myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: [
    'insuffisant',
    'assez faible',
    'faible',
    'passable',
    'assez bien',
    'bien',

  ],      
  datasets: [{
    label: 'My First Dataset',
   
         data: [{{$insuffisantR}},{{ $assezfaibleR}},{{$faibleR}},{{$passableR}},{{$assezbienR}},{{$bienR}}],
  backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 205, 86)',
      'rgb(514, 162, 235)',
      'rgb(255, 205, 6)',
      'rgb(255, 5, 86)',
      'rgb(25, 205, 86)',


    ],
    hoverOffset: 4
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
const ctx3 = document.getElementById('myChart3').getContext('2d');
const myChart3 = new Chart(ctx3, {
    type: 'doughnut',
    data: {
      labels: [
    'insuffisant',
    'assez faible',
    'faible',
    'passable',
    'assez bien',
    'bien',

  ],      
  datasets: [{
    label: 'My First Dataset',
   
         data: [{{$insuffisantquality}},{{ $assezfaiblequality}},{{$faiblequality}},{{$passablequality}},{{$assezbienquality}},{{$bienquality}}],
  backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 205, 86)',
      'rgb(514, 162, 235)',
      'rgb(255, 205, 6)',
      'rgb(255, 5, 86)',
      'rgb(25, 205, 86)',


    ],
    hoverOffset: 4
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
$('#reservation').daterangepicker()

const ctx5 = document.getElementById('myChart5').getContext('2d');
const myChart5 = new Chart(ctx5, {
    type: 'doughnut',
    data: {
      labels: [
    'insuffisant',
    'assez faible',
    'faible',
    'passable',
    'assez bien',
    'bien',

  ],      
  datasets: [{
    label: 'My First Dataset',
   
         data: [{{$insuffisantquantity}},{{ $assezfaiblequantity}},{{$faiblequantity}},{{$passablequantity}},{{$assezbienquantity}},{{$bienquantity}}],
  backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 205, 86)',
      'rgb(514, 162, 235)',
      'rgb(255, 205, 6)',
      'rgb(255, 5, 86)',
      'rgb(25, 205, 86)',


    ],
    hoverOffset: 4
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
const ctx4 = document.getElementById('myChart4').getContext('2d');
const myChart4 = new Chart(ctx4, {
  type: "line",
  data: {
    labels: [100,200,300,400,500,600,700,800,900,1000],
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});

  </script>
  
@endsection