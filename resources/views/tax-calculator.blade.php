<!DOCTYPE html>
<html>
<head>
    <title>Tax Calculator</title>
</head>
<body>
<h1>Tax Calculator</h1>

<!-- Formulaire d'Entrée -->
<form action="/calculate" method="POST">
    @csrf
    <label for="salary">Gross Annual Salary:</label>
    <input type="number" id="salary" name="salary" value="{{ old('salary', $salary ?? '') }}" required>
    <button type="submit">Calculate</button>
</form>

<!-- Affichage des Résultats -->
@if(isset($totalTax))
    <h2>Tax Calculator Result</h2>
    <p>Gross Annual Salary: £{{ $salary }}</p>
    <p>Total Annual Tax: £{{ $totalTax }}</p>
@endif
</body>
</html>
