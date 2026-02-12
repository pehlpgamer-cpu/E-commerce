<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body class="bg-white flex flex-col">
    <nav id="navContainer" class="flex justify-evenly gap-2 border-b p-1.5 bg-white">
        <!-- 
            <script type=module>
            import { topNavBar } from "../../js/components/topNavBar.js";
            const navContainer = document.getElementById('navContainer');
            navContainer.innerHTML = topNavBar(2);
        </script> 
        -->
    </nav>
    
</body>
</html>

<script type="module">
    import { topNavBar } from "../../js/components/topNavBar.js";

    const navContainer = document.getElementById('navContainer');

    navContainer.innerHTML = topNavBar(2);
</script>