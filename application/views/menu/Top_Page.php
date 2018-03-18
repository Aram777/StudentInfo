<!DOCTYPE html>
<html lang="en">

<head>
    <title>Students Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .left_ {
            float: left;
            width: 15%;
        }

        .right_ {
            float: right;
            width: 85%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <div class="left_">
            <img src="<?php echo base_url('images/logo.jpg'); ?>" width="90%" height="70%" />

            <a href="<?php echo site_url('Students_ctl/show_students'); ?>">
                <button style="width:100%; margin-top: 10px;">Students</button>
            </a>
            <a href="<?php echo site_url('Course_ctl/show_courses'); ?>">
                <button style="width:100%; margin-top: 10px;">Courses</button>
            </a>
            <a href="<?php echo site_url('Postalcode_ctl/show_postalcodes'); ?>">
                <button style="width:100%; margin-top: 10px;">Postal Codes</button>
            </a>
            <a href="<?php echo site_url('Login_ctl/logout'); ?>">
                <button style="width:100%; margin-top: 10px;">Log Out</button>
            </a>
        </div>
        <div class="right_">
            <div class="container">
