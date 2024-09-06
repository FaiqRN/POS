<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - POS Website</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0);" onclick="toggleDropdown()"><i class="fas fa-utensils"></i> Products</a>
                    <div class="dropdown-content" id="productDropdown">
                        <a href="{{ route('products.food-beverage') }}">Food & Beverage</a>
                        <a href="{{ route('products.beauty-health') }}">Beauty & Health</a>
                        <a href="{{ route('products.home-care') }}">Home Care</a>
                        <a href="{{ route('products.baby-kid') }}">Baby & Kid</a>
                    </div>
                </li>
                <li><a href="{{ route('sales.index') }}"><i class="fas fa-shopping-cart"></i> Sales</a></li>
                <li><a href="{{ route('user.profile', ['id' => 1, 'name' => 'FaiqRN']) }}"><i class="fas fa-user"></i> User</a></li>
            </ul>
        </nav>
        <h1>Welcome to Point Of Sale Website</h1>
    </header>
    <main>
        <p>Start managing your sales efficiently with our Point of Sales Website.</p>
    </main>
    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("productDropdown");
            dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
        }
    </script>
</body>
</html>
