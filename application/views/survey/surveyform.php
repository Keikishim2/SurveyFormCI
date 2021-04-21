<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Survey Form</title>
</head>
<body>

<div id='wrapper'>
    <h1>CodeIgniter Survey Form</h1>
    <form action='result' method='post'>
        <p>Your Name: <input type='text' name='name'/></p>

        <p>Dojo Location: <select name='location'>
            <option name='location' value='choose'>Choose One..</option>
            <option name='location' value='Bellevue'>Bellevue, WA</option>
            <option name='location' value='SJ'>San Jose, CA</option>
            <option name='location' value='Burbank'>Burbank, CA</option>
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