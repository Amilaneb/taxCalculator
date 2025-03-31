<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Tax Calculator</h1>
    @if($errors->any())
        <div class="bg-red-400 rounded-md px-2 max-w-max">
            <ul class="my-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/calculate" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="salary" class="block text-gray-700">Gross Annual Salary:</label>
            <input type="number" id="salary" name="salary" value="{{ old('salary', $salary ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Calculate</button>
    </form>


    @if(isset($totalTax))
        <div class="mt-6 p-4 bg-gray-50 border border-gray-200 rounded-md">
            <h2 class="text-xl font-semibold mb-2">Tax Calculator Result</h2>
            <p class="text-gray-700">Gross Annual Salary: £{{ $salary }}</p>
            <p class="text-gray-700">Gross Monthly Salary: £{{ number_format($salary/12, 2) }}</p>
            <p class="text-gray-700">Net Annual Salary: £{{ number_format($salary - $totalTax, 2)}}</p>
            <p class="text-gray-700">Net Monthly Salary: £{{ number_format($salary/12 - $totalTax/12, 2) }}</p>
            <p class="text-gray-700">Annual Tax Paid: £{{ number_format($totalTax, 2) }}</p>
            <p class="text-gray-700">Monthly Tax Paid: £{{ number_format($totalTax/12, 2)  }}</p>
            @endif
        </div>
</div>
</body>
</html>
