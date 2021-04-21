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
    #wrapper{
        border: 3px inset gold;
        width: 400px;
        margin: 0px auto;
        padding: 5px;
        background: url('assets/images/1.png'), darkblue;
        background-blend-mode: luminosity;
    }
    p{
        position: relative;
        margin-left: 50px;
    }
    h1{
        text-align: center;
        border-bottom: 3px ridge gold;
        padding: 5px;
    }
    input, select{
        display: block;
        border-radius: 20px;
        background-color: snow;
    }
    textarea{
        border-radius: 10px;
    }
</style>
<body>

<div id='wrapper'>
    <h1>CodeIgniter Survey Form</h1>
    <form action='result' method='post'>
        <p>Your Name: <input type='text' name='name'/></p>

        <p>Dojo Location: <select name='location'>
            <option name='location' value='choose'>Choose One..</option>
            <option name='location' value='Kuzu'>Kuzu High</option>
            <option name='location' value='Tokyo'>Tokyo</option>
            <option name='location' value='Karasuno'>Karasuno High</option>
        </select></p>


        <p>Favorite Language: <select name='faveLang'>
            <option name='faveLang' value='choose'>Choose One..</option>
            <option name='faveLang' value='SQL'>SQL</option>
            <option name='faveLang' value='Java'>Java</option>
            <option name='faveLang' value='JavaScript'>JavaScript</option>
            <option name='faveLang' value='C#'>C#</option>
            <option name='faveLang' value='Python'>Python</option>
            <option name='faveLang' value='C++'>C++</option>
            <option name='faveLang' value='Ruby'>Ruby on Rails</option>
            <option name='faveLang' value='iOS'>iOS/Swift</option>
        </select></p>


        <p>Comments(optional): <br>
        <textarea name='comments'></textarea></p>

        <p><input type='submit' value='submit'></p>
    </form>

</div>
</body>
</html>