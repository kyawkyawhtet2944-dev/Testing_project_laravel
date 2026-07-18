<!DOCTYPE html>
<html>
<head>
    <title>Add New Product</title>
</head>
<body>
    <h1>Product အသစ်ထည့်ရန်</h1>

    <form action="{{ route('store') }}" method="POST">
        @csrf

        <label>Product နာမည်:</label><br>
        <input type="text" name="name" required><br><br>

        <label>ဈေးနှုန်း (MMK):</label><br>
        <input type="number" name="price" required><br><br>

        <label>အကြောင်းအရာ:</label><br>
        <textarea name="description"></textarea><br><br>

        <button type="submit">သိမ်းဆည်းမည်</button>
    </form>
</body>
</html>
