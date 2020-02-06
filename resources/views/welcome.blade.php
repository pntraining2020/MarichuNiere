<!DOCTYPE html>
<html lang="en">
<head>
  <title>PNExam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .container{
        margin-top:5%;
    }
</style>
<body>
<script>

function getTimeStamp() {
       var now = new Date();
       return (now.getHours() + ':'
 + ((now.getMinutes() < 10) ? ("0" + now.getMinutes()) : (now.getMinutes())) + ':' + ((now.getSeconds() < 10) ? ("0" + now.getSeconds()) : (now.getSeconds())));
}

function clockIn() {
    document.getElementById('clockIn').value = getTimeStamp();
}
</script>
<div class="container p-3 my-3 bg-success text-white">
  <div>
    <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Names
        </button>
        
        <select name="cars">
        @foreach($names as $name)
            <option value="">{{$name['names']}}</option>
        @endforeach

        </select>
    </div><br><br><br>
    <div>
        <input type="text" value="{{ \Carbon\Carbon::now()->toTimeString() }}" placeholder="hh : mm">
    </div><br>
    <div>
        <button class="btn btn-primary" onclick="clockIn();" >Clock In</button>
        <input type="text" id="clockIn" value="" placeholder="00 : 00 : 00">
    </div><br>
    <div>
        <label>BREAK</label><br>
        <form action="{{route('start')}}" method="POST">
                @csrf
                <button class="btn btn-success" >START</button>
        </form>
       
        <input type="text" value="" placeholder="">
       
    </div>
    <div>
        <button class="btn btn-danger">END</button>
        <input type="text" value="">
    </div><br><br><br>
    <div>
        <button class="btn btn-dark">Take Another Break</button>
    </div><br><br>
    <div>
        <button class="btn btn-primary">Clock Out</button>
        <input type="text" value="">    
    </div><br><br>
    <div>
        <label>Total Time Worked: </label>
        <input type="text" value="">
    </div>
    <div>
        <label>Hours Left Before Timeout: </label>
        <input type="text" value="">
    </div>
    <div>
        <label>Total Breaks Used: </label>
        <input type="text" value="">
    </div>
  </div> 
</div>


</body>
</html>
