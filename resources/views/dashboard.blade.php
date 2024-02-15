<x-app-layout>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table id="students">
  <tr>
    <th>ID</th>
    <th>name</th>
    <th>Title</th>
    <th>Body</th>
    
    <th>actions</th>
  </tr>
  
  @foreach($posts as $po)
  <tr>
  <td>{{$po->user->name}}</td>
    <td>{{$po->id}}</td>
    <td>{{$po->title}}</td>
    <td>{{$po->body}}</td>
    

    <td><a href="{{url('/edit',$po->id)}}" >update</a>
    <a href="{{url('/delete',$po->id)}}" >delete</a></td>
    @endforeach

    
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
