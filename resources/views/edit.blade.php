<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
     h1{
            text-align:center;
        }
        .btn{
            margin-left:5px;
            margin-bottom:5px;
           width:100px;
            
        } 
</style>
</head>
<body>
    <h1>Edit</h1>
    <div id="liveAlertPlaceholder"></div>
    <form action="{{route('updateTodo')}}" method="post">
    @csrf
    <div class="d-flex justify-content-center">
    <div class="col-auto">
        <input type="text" class="form-control" name="todo" value={{$data->title}}>
    </div>
    <div class="col-auto">
    <input type="hidden" name="id" value={{$data->id}}>
    </div>
    <div class="col-auto">
    <button type="submit" class="btn btn-primary " id="liveAlertBtn" >Update</button>
    </div>
</div>
</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

<script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,

    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert('Updated successfully', 'success')
  })
}
</script>
</html>