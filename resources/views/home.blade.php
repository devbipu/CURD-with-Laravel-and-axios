<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CURD with Laravel &axios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        
        <section>
            <div class="jumbotron py-2 jumbotron-fluid">
                <div class="container text-center">
                  <h1 class="display-5">Welcome</h1>
                  <p class="lead">This is a realtime CURD oprations using Laravel8 and axios</p>
                </div>
              </div>
        </section>

        <section>
            <div class="container-fluid mb-5 pb-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="insert">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Add User
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control" id="nameInput" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="emailInput" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input type="number" class="form-control" id="phoneInput" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cuntry">Contry</label>
                                                            <input type="text" class="form-control" id="cuntryInput" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button onclick="addUser()" class="btn btn-primary">Add user</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Delet User
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">User Id</label>
                                                            <input type="text" class="form-control" id="idDelete" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button onclick="deleteUser()" class="btn btn-primary">Delete User</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Update user
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nameUpdate">Name</label>
                                                            <input type="text" class="form-control" id="nameUpdate" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailUpdate">Email</label>
                                                            <input type="email" class="form-control" id="emailUpdate" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneUpdate">Phone</label>
                                                            <input type="number" class="form-control" id="phoneUpdate" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cuntryUpdate">Country</label>
                                                            <input type="text" class="form-control" id="cuntryUpdate" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="updateUserId">Id</label>
                                                            <input type="number" class="form-control" id="updateUserId" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p style="visibility: hidden;" for="updateUserId">Id</p>
                                                            <button style="margin-top: -8px" onclick="updateUser()" class="btn btn-primary">Update user</button>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Country</th>
                                  </tr>
                                </thead>
                                <tbody id="dataTable"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- jQuery files --}}
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        {{-- axios file --}}
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


        {{-- custom scripts --}}
        <script>
            //insert function
            function addUser(){
                var name = document.getElementById('nameInput').value;
                var email = document.getElementById('emailInput').value;
                var phone = document.getElementById('phoneInput').value;
                var country = document.getElementById('cuntryInput').value;


                var addURL = 'basicuserinput';
                var data = {
                    name: name,
                    email : email,
                    phone : phone,
                    country : country
                }

                axios.post(addURL,data)
                .then(function (response) {
                    console.log(response.data);
                    showUsers()
                    clearInput()
                })
                .catch(function (error) {
                    console.log(error);
                });
            }

            //delete function
            function deleteUser(){
                var id = document.getElementById('idDelete').value;

                var addURL = 'basicuserdelete';
                var data = {
                    id: id,
                    
                }

                axios.post(addURL,data)
                .then(function (response) {
                    console.log(response.data);
                    showUsers()
                    clearDelete()
                })
                .catch(function (error) {
                    console.log(error);
                });
            }


            // select data 


            function showUsers(){

                var url = 'getuser';
                
                axios.get(url)
                .then(function (response) {
                    var dbData= response.data;
                    
                    table.innerHTML = dbData;
                    
                })
                .catch(function (error) {
                    console.log(error);
                });
            }

            var table = document.getElementById('dataTable');
            document.addEventListener('DOMContentLoaded',function(){
                showUsers();
            })


            function clearInput(){
                document.getElementById('nameInput').value = '';
                document.getElementById('emailInput').value = '';
                document.getElementById('phoneInput').value = '';
                document.getElementById('cuntryInput').value = '';


            }

            function clearDelete(){                
                document.getElementById('idDelete').value = '';
            }



            function updateUser(){
                var name = document.getElementById('nameUpdate').value;
                var email = document.getElementById('emailUpdate').value;
                var phone = document.getElementById('phoneUpdate').value;
                var country = document.getElementById('cuntryUpdate').value;
                var id = document.getElementById('updateUserId').value;


                var url = 'updatebasicuser';
                var data ={name: name, email: email, phone: phone, country: country, id: id}

                axios.post(url, data)
                .then(function (response) {
                    console.log(response.data);
                    showUsers();
                    clearUpdateInput();
                })
                .catch(function (error) {
                    console.log(error);
                });

            }


            function clearUpdateInput(){
                document.getElementById('nameUpdate').value = '';
                document.getElementById('emailUpdate').value = '';
                document.getElementById('phoneUpdate').value = '';
                document.getElementById('cuntryUpdate').value = '';
                document.getElementById('updateUserId').value = '';

            }

        </script>
    </body>
</html>
