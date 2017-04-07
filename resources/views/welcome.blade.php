@extends('layouts.master')

@section('title')
    Bill Splitter
@endsection

@section('content')
    <form method='GET' action='/calculate'>
        <label for="people">Split how many ways? *Required</label>
        <input type="text" name="people">
        <br>
        <label for="tab">How much was the tab? *Required</label>
        <input type="text" name="tab">
        <br>
        <label for="service">How was the service? *Required</label>
            <select name="service" id="">
                <option value="excellent">Excellent</option>
                <option value="fair">Fair</option>
                <option value="poor">Poor</option>
            </select><br>
        <label for="round">Round Up?</label>
        <input type="radio" name="round" value="yes" checked>Yes
        <input type="radio" name="round" value="no">No<br>
        <input class="button" type="submit" value="Calculate"> 
    </form>

@endsection
