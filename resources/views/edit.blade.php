<form action="" method="Post">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" id="title" name="title" ">

    <label for="body">Body</label>
    <input type="text" id="body" name="body" >
  
    <input type="submit" value="Submit">
  </form>