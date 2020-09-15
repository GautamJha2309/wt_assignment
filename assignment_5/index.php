<!DOCTYPE html>
<html>
    <head>
        <title>Registration Wizard</title>
        <meta charset="utf-8">
        <link rel="icon" href="Assets/images/4.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="Assets/style.css"/>
    </head>
    <body>
        <div id="home">
        <div class="custom_navbar">
            <span class="topnav"  bg-dark navbar-dark>
                <a href="#" onclick="changeSection(1);" id="1">Home</a>
                <a href="#register" onclick="changeSection(2);" id="2">Registration</a>
                <a href="#list_students" onclick="changeSection(3);showRecords();" id="3">Registered list</a>
            </span>
        </div>
        <div class="jumbotron shadow">
            
            <div data-aos="zoom-in"><h3 class="text_sublabel">"Lets Ride !"</h3></div>
        </div>
        <div>
        <div data-aos="fade-up"><h1 class="text_label">Registration System for  Travle Across India On Bike</h1> </div>
            <div class="container">
                    <div class="card">
                        <div class="card-body" data-aos="zoom-in">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src='Assets/images/4.jpg' class="info_card_image"/>
                                </div>
                                <div class="col-sm-8">
                                    <h4 class="text-center">About</h4>
                                    <p style="padding: 5%;" class="text-center">
                                        Few countries in the world are as diverse and as vibrant as India. Steeped in lively culture, rich history, and unique landscapes, the country carves a lasting impression on every traveler’s heart. The towering snow-capped Himalayas protect the country from the north, while miles and miles of ocean and sea can be witnessed on the other three sides. An array of breathtaking sights truly make India a visual treat for the onlooker. When it comes to exploring the staggering diversity of this enchanting country, there’s nothing like a Motorcycle trip India. The intimate experience of witnessing the picturesque beauty of India, while riding its stunning routes, practically overloads the senses. If you too have a soul passionate for thrilling adventures, Motorcycle Tours India are the way to go.<br>
                                        India, being such a large, diverse country, offers riders a myriad of routes, roads, and trails to explore. You can either embrace the rough and rocky terrains of the north with a Himalayan motorcycle tour or casually cruise along the gorgeous beaches.</br></br>Peaceful and serene, yet incredibly intense and challenging, the northern areas of the country offer some of the most demanding riding in the country. This region is dotted with some of the most exotic landscapes in the world and you can lose yourself in the captivating beauty of the hills and mountains. You may opt for a journey to the colorful valley of Manali and then head toward Leh, which hosts one of the highest mountain peaks in the world, or a trip to the highest mountain range of the world, Mt. Everest, may even be possible if you are opting for a northern Motorcycle trip India.</br></br>Cool drinks, exotic food and a temple circuit highlighting the rich history and architecture of the country will greet you in the south. The road usually covers the rocky ruins of temples in Hampi, Karnataka, and through the length of coastal Kerala, before reaching the southernmost tip of India, Kanyakumari. Ornate temples, hilltop views, beautiful waterfalls, and many more mesmerizing scenes await on Motorcycle Tours India in the south.</br></br>Unlike the rock, ice, and snows of the north, the western reaches of India offer sand-covered roads with large expanses of arid deserts. Riding in the royal territory of Rajasthan, and exploring the opulent palaces and magnificent forts, is another great option if you plan on touring India by motorcycle. Lastly, eastern India is no less beautiful and amazing than the rest of the country. Riding in the hill states of Sikkim and Meghalaya offers an exhilarating experience. One where you will be close to rare plants and animals, and surrounded by nature.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-top:40px;background-image: url('Assets/images/Flat-Mountains.svg'); opacity: 0.8;
                    background-attachment: fixed;
                    background-size: cover;">
                        
                    </div>
            </div>
        </div></div>
        <div id="register" style="display:none;">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#home" onclick="changeSection(1);">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#register" onclick="changeSection(2);">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#list_students" onclick="changeSection(3);showRecords();">Registerd List</a>
                  </li>
                </ul>
              </nav>
            <div class="container mt-5">
                <div class="alert alert-success alert-dismissible fade show" style="display:none;" id='alert_register'><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Registration Successful !</strong></div>
                <div class="card">
                    <div class="card-header" style="font-size:larger; font-weight:700;">Register Here</div>
                    <div class="card-body">
                            <form id="registerForm" autocomplete="off">
                                
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" id="fname" placeholder="First Name"/>
                                            <div id="fnamealert"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" id="lname" placeholder="Last Name"/>
                                            <div id="lnamealert"></div>
                                        </div>
                                    </div>
                                
                            
                                    <div class="col-sm-6">
                                        <label>Bike Enquary</label>
                                        <select id="dept" class="custom-select">
                                            <option value="invalid" disabled selected>Do you have your own bike ?</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                        <div id="deptalert"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="font-weight">Gender:</label><br/><center>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="gender1">
                                            <label class="custom-control-label" for="gender1">Male</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="gender2">
                                            <label class="custom-control-label" for="gender2">Female</label>
                                          </div></center>
                                          <div id="genderalert"></div>
                                    </div>
                                
                                
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Mobile No.:</label>
                                            <input type="text" id="mobileno" onkeypress="return isNumberKey(event);" placeholder="Mobile No" class='form-control'/>
                                            <div id="mobilenoalert"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" id="email" placeholder="Email" class='form-control'/>
                                            <div id="emailalert"></div>
                                        </div>
                                    </div>
                                
                                
                                    <div class="col-sm-6"><br/><br/>
                                        <button onclick="checkValidation();" id='submit' class="btn btn-block btn-lg btn-outline-success">
                                            &nbsp;&nbsp;&nbsp;&nbsp;Submit</button>
                                    </div>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div id="list_students" style="display:none;">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#home" onclick="changeSection(1);">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#register" onclick="changeSection(2);">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#list_students" onclick="changeSection(3);showRecords();">Registerd List</a>
                  </li>
                </ul>
              </nav>
              <div class="container mt-5">
                  <h2 class="text-center mb-4" id="headline">Registred Students</h2>
                  <div id="no-data-alert" class="alert alert-danger central-block" style="height:60px;"><strong>No Data Found</strong></div>
                  <table id='data_table' class="table table-hover table-responsive" style='display:none;'>
                      <thead class="thead-dark">
                          <tr>
                              <th class="align-middle">TimeStamp</th>
                              <th class="align-middle">Full Name</th>
                              <th class="align-middle">Gender</th>
                              <th class="align-middle">Have Bike</th>
                              <th class="align-middle">Email</th>
                              <th class="align-middle">Mobile No.</th>
                              
                          </tr>
                      </thead>
                      <tbody id='list_table_id'>
                      </tbody>
                  </table>
              </div>
        </div>
        </div>
        <div class='footer' style="margin-top:60px;">
        </div>
        <!-- Files Imported for Bootstrap-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="Assets/designScript.js"></script>
        <script src="Assets/jqueryScripts.js"></script>
        
        <script>
            AOS.init({
                duration:1200,
            });
          </script>
              </body>
              <footer class="page-footer font-small stylish-color-dark bg-dark pt-4" style="position:fixed; bottom:0;width: 100%;">
      <div class="footer-copyright text-center py-3" style="background:#DAAD86;">© 2020 Copyright:
              <a href="mailto:gsjha@mitaoe.ac.in">gsjha@mitaoe.ac.in</a>
      </div>
      <br><br>
    </footer>
</html>