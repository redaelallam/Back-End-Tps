<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('calcul') }}" method="POST">
        {{ csrf_field() }}
        <label for="number1">number1</label>
        <input type="text" name="number1" id="number1" value="{{ old('number1') }}">
        <label for="number2">number2</label>
        <input type="text" name="number2" id="number2" value="{{ old('number2') }}">
        <select name="op" id="op">
            <option value="+" {{ old('op') === '+' ? 'selected' : '' }}>+</option>
            <option value="-" {{ old('op') === '-' ? 'selected' : '' }}>-</option>
        </select>
        <input type="submit" name="res" value="Calculate">
    </form>
    @if (session()->has('res'))
        <p>result: {{ session()->get('res') }}</p>
    @endif

</body>

</html>
