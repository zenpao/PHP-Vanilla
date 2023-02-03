<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Benguet: Printed ePhilID Check</title>

        <link rel="icon" type="image/x-icon" href="static/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="static/css/styles.css" rel="stylesheet" />
        <link href="static/css/styles2.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!-- Background Video -->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="static/assets/mp4/bg.mp4" type="video/mp4" /></video>


        <div id="myModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-shield-halved"></i> DATA PRIVACY</h5>
                </div>
                <div class="modal-body">
                    <?php
                    echo '<p><strong>I give my full consent to PSA to collect, record, organize, update, or modify, retrieve, consult, use, consolidate, block, erase or destruct, my personal data as part of my information. Further, I hereby affirm my right to be informed, object to processing, access and rectify, suspend or withdraw my personal data, and be indemnified in case of damages pursuant to the provisions of the Republic Act No. 10173 of the Philippines, Data Privacy Act of 2012 and its corresponding Implementing Rules and Regulations.</strong></p>';
                    ?>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Display message once.</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">I agree</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Masthead -->    
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <p class="mb-1" style="font-size:small">Page visits <span class="badge bg-warning text-dark"> 
                    <?php
                        // Check if the counter file exists
                        if(!file_exists("counter.txt")){
                            // If the counter file doesn't exist, create it and set the counter to 0
                            $f = fopen("counter.txt", "w");
                            fwrite($f, "0");
                            fclose($f);
                        }

                        // Read the current value of the counter
                        $f = fopen("counter.txt", "r");
                        $counter = (int)fread($f, filesize("counter.txt"));
                        fclose($f);

                        // Increment the counter
                        $counter++;

                        // Save the new value of the counter
                        $f = fopen("counter.txt", "w");
                        fwrite($f, $counter);
                        fclose($f);

                        // Output the counter
                        echo $counter;
                        ?>
                    </span></p>
                    <h1 class="fst-italic lh-1 mb-1" style="font-size:45px">Printed ePhilID Check</h1>
                    <p class="mb-1" style="font-size:small">Enter your details to identify your printed ePhilID availability for claiming.</p>
                    <p class="mb-1" style="font-size:small">By using this website, you agree to <a href="#" class="link-info" data-bs-toggle="modal" data-bs-target="#myModal">Data Privacy</a>.</p>
                    <hr>
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->

                    <form method="POST" action="search.php">
                        <div class="mb-2">
                          <!-- <label for="InputLastname" class="form-label">Last Name</label> -->
                          <input type="text" class="form-control" id="InputLastname" name="lastname_php" placeholder="Last Name" style="text-transform:uppercase"; autocomplete="off">
                        </div>
                        <div class="mb-2">
                             <!-- <label for="InputFirstname" class="form-label">First Names</label> -->
                             <input type="text" class="form-control" id="InputFirstname" name="firstname_php" placeholder="FIRST NAME" style="text-transform:uppercase"; autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <!-- <label for="InputMiddlename" class="form-label">Middle Name</label> -->
                            <input type="text" class="form-control" id="InputMiddlename" name="middlename_php" placeholder="MIDDLE NAME" style="text-transform:uppercase"; autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <!-- <label for="InputSuffix" class="form-label">Suffix</label> -->
                            <input type="text" class="form-control" id="InputSuffix" name="suffix_php" placeholder="SUFFIX" style="text-transform:uppercase; width:150px"; autocomplete="off">
                        </div>

                        <!-- Dropdown for City/Municipality --> 
                        <div class="mb-2">
                            <label for="firstDropdown" class="form-label">CITY/MUNICIPALITY</label>
                            <select id="firstDropdown" name="area_php" style="font-size:small">
                                <option value="Please select city/municipality" selected="selected" class="dropdown-item">Please select city/municipality</option>
                                <option value="CITY OF BAGUIO" class="dropdown-item">CITY OF BAGUIO</option>
                                <option value="ATOK" class="dropdown-item">ATOK</option>
                                <option value="BAKUN" class="dropdown-item">BAKUN</option>
                                <option value="BOKOD" class="dropdown-item">BOKOD</option>
                                <option value="BUGUIAS" class="dropdown-item">BUGUIAS</option>
                                <option value="ITOGON" class="dropdown-item">ITOGON</option>
                                <option value="KABAYAN" class="dropdown-item">KABAYAN</option>
                                <option value="KAPANGAN" class="dropdown-item">KAPANGAN</option>
                                <option value="KIBUNGAN" class="dropdown-item">KIBUNGAN</option>
                                <option value="LA TRINIDAD" class="dropdown-item">LA TRINIDAD</option>
                                <option value="MANKAYAN" class="dropdown-item">MANKAYAN</option>
                                <option value="SABLAN" class="dropdown-item">SABLAN</option>
                                <option value="TUBA" class="dropdown-item">TUBA</option>
                                <option value="TUBLAY" class="dropdown-item">TUBLAY</option>
                            </select>
                       </div>

                       <!-- Dropdown for Barangay -->
                        <div class="mb-3">
                            <label for="secondDropdown" class="form-label">BARANGAY</label>
                            <select id="secondDropdown" name="brgy_php" style="font-size:small">
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                                <option>Please select city/municipality</option>
                            </select>
                        </div>
                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="This system is solely for identifying Printed ePhilID availability & delivery for 2023. Press &quot;Check&quot; to proceed.">
                        <button type="submit" class="btn btn-primary" id="myBtn" name="check">Check</button>
                        </span>
                      </form>

                </div>
            </div>
        </div>
        <!-- Social Icons-->
        <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                <a class="btn btn-dark m-3" href="https://register.philsys.gov.ph/#/eng" target="_blank" title="Online Step 1 Registration"><i class="fa-solid fa-1"></i></a>
                <a class="btn btn-dark m-3" href="https://trn-verifier.philsys.gov.ph/" target="_blank" title="Online ePhilID Appointment System"><i class="fa-solid fa-calendar-day"></i></a>
                <a class="btn btn-dark m-3" href="https://ephilid.philsys.gov.ph/" target="_blank" title="Download My ePhilID"><i class="fa-solid fa-file-export"></i></a>
                <a class="btn btn-dark m-3" href="https://verify.philsys.gov.ph/" target="_blank" title="PhilSys Check"><i class="fa-regular fa-square-check"></i></a>
                <a class="btn btn-dark m-3" href="https://www.philsys.gov.ph/" target="_blank" title="PhilSys Official Website"><i class="fa-solid fa-info"></i></a>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="static/js/jquery-3.6.3.slim.min.js"></script>
        <script src="static/js/modal.js"></script>
        <script src="static/js/popover.js"></script>
        <script src="static/js/dropdown.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
