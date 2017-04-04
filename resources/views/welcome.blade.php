<!DOCTYPE html>
<html>
<head>
<title>Assignment Three</title>
<meta charset='utf-8'>
<link rel="stylesheet" type="text/css" href="a1/a1.css">

<link href="https://fonts.googleapis.com/css?family=Boogaloo|Poiret+One" rel="stylesheet">
</head>
<body>
    <h1>Bill Splitter</h1>
    <form method='GET'>
        <label for="people">Split how many ways?</label>
        <input type="text" name="people">
        <br>
        <label for="tab">How much was the tab?</label>
        <input type="text" name="tab">
        <br>
        <label for="service">How was the service?</label>
            <select name="service" id="">
                <option value="excellent">Excellent</option>
                <option value="fair">Fair</option>
                <option value="poor">Poor</option>
            </select><br>
        <label for="round">Round Up?</label>
        <input type="radio" name="round" value="yes" checked>Yes
        <input type="radio" name="round" value="no">No<br>
        <input type="submit" value="Calculate"> 
    </form>
    
    <div>Each person owes: </div>
    <div></div>
</body>
</html>