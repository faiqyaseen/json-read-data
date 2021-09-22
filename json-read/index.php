<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <table class="table" id="json-data">
                    <thead class="thead-dark">
                        <tr>
                            <th>User Id</th>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Body</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {

            // JSON READ ONLINE SINGLE DATA
            // $.ajax({
            //     url: "https://jsonplaceholder.typicode.com/posts/23",
            //     type: "GET",
            //     success: function(data) {
            //         $("#json-data").append(`
            //             <tbody>
            //                 <tr>
            //                     <td>${data.id}</td>
            //                     <td>${data.userId}</td>
            //                     <td>${data.title}</td>
            //                     <td>${data.body}</td>
            //                 </tr>
            //             </tbody>
            //         `)
            //     }
            // })



            // JSON READ ONLINE MULTIPLE DATA 
            // $.ajax({
            //     url : "https://jsonplaceholder.typicode.com/posts",
            //     type: "GET",
            //     success: function(data){
            //         $.each(data, function(key,value){
            //             $("#json-data").append(`
            //                 <tbody>
            //                     <tr>
            //                         <td>${value.id}</td>
            //                         <td>${value.userId}</td>
            //                         <td>${value.title}</td>
            //                         <td>${value.body}</td>
            //                     </tr>
            //                 </tbody>
            //             `)
            //         })
            //     }
            // })
  
            
            // JSON READ ONLINE DATA BY getJSON METHOD 
            // $.getJSON(
            //     "https://jsonplaceholder.typicode.com/posts",
            //     function(data) {
            //         $.each(data, function(key, value) {
            //             $("#json-data").append(`
            //             <tbody>
            //                 <tr>
            //                     <td>${value.id}</td>
            //                     <td>${value.userId}</td>
            //                     <td>${value.title}</td>
            //                     <td>${value.body}</td>
            //                 </tr>
            //             </tbody>
            //         `)
            //         })
            //     }
            // )


            // JSON READ OFFLINE FROM DOT JSON FILE  
            // we can also use $.get({})
            $.ajax({                                    
                url: "json-data/myjson.json",
                type: "GET",
                success: function(data) {
                    $.each(data, function(key, value) {
                        console.log(value.body)
                        $("#json-data").append(`
                        <tbody>
                            <tr>
                                <td>${value.id}</td>
                                <td>${value.userId}</td>
                                <td>${value.title}</td>
                                <td>${value.body}</td>
                            </tr>
                        </tbody>
                    `)
                    })
                }
            })
        })
    </script>
</body>

</html>