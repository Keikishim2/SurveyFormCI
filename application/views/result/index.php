<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Survey Form</title>
</head>
<style>
    body{
        background-image: url('assets/images/1.png');
        background-size: cover;
        color: yellow;
    }
    h1{
        text-align: center;
        border-bottom: 3px ridge gold;
        padding: 5px;
    }
    #container{
        border: 3px inset gold;
        width: 400px;
        margin: 0px auto;
        padding: 5px;
        background: url('assets/images/1.png'), darkblue;
        background-blend-mode: luminosity;
    }
    a{
        color: yellow;
    }
</style>
<body>

<div id='container'>
    <h1>CodeIgniter Survey Form</h1>
    <p class='success'>Thanks for submitting this form! You have submitted this form <?= $this->session->userdata('counter'); ?> times! </p>

    <h2>Submitted Information</h2>

    <?php

    if($this->session->userdata('name')){
        echo '<p><strong>Name:</strong>' . $this->session->userdata('name') . '</p>';
    }
    if($this->session->userdata('location')){
        echo '<p><strong>Dojo Location:</strong>' . $this->session->userdata('location') . '</p>';
    }
    if($this->session->userdata('faveLang')){
        echo '<p><strong>Favorite Language:</strong>' . $this->session->userdata('faveLang') . '</p>';
    }
    if($this->session->userdata('comments')){
        echo '<p><strong>Comments:</strong>' . $this->session->userdata('comments') . '</p>';
    }

    ?>

    <p><a href='surveys/destroysession'>Go Back</a><p>
</div>
</body>
</html>