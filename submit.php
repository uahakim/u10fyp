<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>fyp2-2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asap&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: #e5e5e5;">

<?php
session_start();

if($_SESSION["uploaded"] == true) {
    echo '<script>alert("File succesfully uploaded")</script>';
    $_SESSION["uploaded"] = false;
}
?>
    <section style="margin: 15px;margin-top: 25px;margin-left: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="background: url(&quot;assets/img/uniten-logo.png&quot;) left / contain no-repeat;height: 100px;"></div>
                </div>
                <div class="col-md-4">
                    <section>
                        <div><img src="assets/img/website-logo.png" style="border-radius: 15px;border-width: 3.4px;border-style: solid;margin-left: 106px;"></div>
                    </section>
                </div>
                <div class="col-md-4">
                    <div style="background: #fe4a49;border-radius: 25px;padding: 10px;margin-top: 30px;width: 150px;margin-left: 160px;"><a class="text-center d-xl-flex justify-content-between align-items-center justify-content-xl-center align-items-xl-center" href="student.php" style="color: #ffffff;"><i class="fa fa-home" style="font-size: 30px;"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">

<!-- form begins -->
            <form action="submission_upload.php" method="POST" enctype="multipart/form-data">
            <div style="background: #c4c4c4;border-radius: 50px;height: 550px;">
                <div class="row">
                    <div class="col">
                        <div style="width: 825px;height: 65px;background: #fed766;margin-left: 250px;margin-bottom: 35px;border-radius: 30px;">
                            <h1 style="color: #ffffff;text-align: center;margin-top: 35px;margin-bottom: 0px;padding: 10px;font-size: 30px;">Drag and drop or select a file from your device<br></h1>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left: 11p x;">
                    <div class="col-md-6" style="background: #fed766;width: 440px;height: 252px;margin-left: 60px;border-radius: 30px;">
                        <div style="height: 230px;background: #fed766;width: 420px;border-radius: 30px;margin-left: 0px;border-width: 2px;border-style: dashed;margin-top: 10px;padding: 0px;">
                            <div class="row">
                                <div class="col"><i class="fa fa-copy" style="font-size: 110px;margin-left: 50px;margin-top: 50px;"></i></div>
                                <div class="col">
                                    <h1 style="font-size: 21px;margin-top: 100px;margin-right: 0px;margin-left: -38px;">Drag and drop a file</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-md-6 col-xl-1" style="width: 545px;height: 252px;margin-left: 85px;background: #fed766;border-radius: 30px;">
                        <div style="width: 520px;margin-left: 0px;height: 235px;background: #fed766;border-radius: 20px;border-width: 2px;border-style: dashed;margin-top: 10px;">
                            <div class="row">
                                <div class="col-xl-8">

<!-- file input -->
                                    <div class="row">
                                        <div class="col" style="margin-top: 34px;margin-left: 30px;">
                                        <input type="file" name="file">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 22px;margin-bottom: -40px;margin-left: 22px;width: 340px;">
                                        <div class="col-xl-1"><i class="fa fa-question-circle-o"></i></div>
                                        <div class="col-xl-11">
                                            <h1 style="font-size: 8px;width: 210px;">Supported file types:<br>MS Word (.doc, .docx) , MS PowerPoint (.ppt, .pptx), PDF<br><br></h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

<!-- upload button -->
                                            <button type="submit" name="submit" style="margin-bottom: 0px;color: rgb(255,255,255);text-align: center;background: #fe4a49;border-radius: 25px;padding: 10px;margin-top: 60px;width: 150px;margin-left: 65px;">Upload File</button>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div style="background: url(&quot;assets/img/cert.png&quot;) center / contain no-repeat;height: 200px;width: 215px;margin-left: -63px;margin-top: 20px;"></div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            


<!-- form ends -->
    </form>
    </div>
    </section>
    <div style="width: 350px;transform: translate(610px);margin-top: 30px;">
        <p class="text-center" style="width: 350px;">©2022 Hakim Chulan U10Fyp. All rights reserved</p>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>