<style>
    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}




#students {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#students td, #students th {
  border: 1px solid #ddd;
  padding: 8px;
}


#students tr {background-color: white;}
#students tr:hover {background-color: #ddd;}

#students th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.header {
  padding: 30px;
  text-align: center;
  background-image: radial-gradient(red,blue, green);
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

    </style>
<body style="background-image: radial-gradient(red,blue, green);">
<div class="header">
  <h1>Blog</h1>

</div>

<div class="topnav">
  <a href="{{url('/')}}">HOME</a>
  <a href="{{url('/login')}}" style="float:right">LOGIN</a>
  <a href="{{url('/register')}}" style="float:right">REGISTER</a>
  
</div>
    <table id="students">
<tr>
    <th>ID</th>
    <th>name</th>
    <th>Title</th>
    <th>Body</th>
  </tr>
  
  @foreach($posts as $po)
  <tr>
  <td>{{$po->user->name}}</td>
    <td>{{$po->id}}</td>
    <td>{{$po->title}}</td>
    <td>{{$po->body}}</td>
    


    @endforeach

    
</table>
</body>

            