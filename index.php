<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop online | اضافة منتجات </title>

    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .main {
            background-color: #fff;
            width: 40%;
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: center;
        }
        input[type="text"], input[type="file"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }
        button:hover {
            background-color: #218838;
        }
        .btn-blue {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-blue:hover {
            background-color: #0056b3;
        }
        img {
            margin: 10px 0;
            border: 1px solid #ccc;
            padding: 5px;
            width: 350px;
        }
        label {
            cursor: pointer;
            color: #007bff;
        }
        label:hover {
            text-decoration: underline;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 14px;
            color: #777;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>موقع تسويقي اون لاين</h2>
                <img src="logo.jpg" alt="logo" width="350px">
                <input type="text" name="name" placeholder="اسم المنتج" required>
                <br>
                <input type="text" name="price" placeholder="سعر المنتج" required>
                <br>
                <div class="buttons">
                    <!-- زر اختيار صورة باللون الأزرق -->
                    <label for="file" class="btn-blue">اختيار صورة للمنتج</label>
                    <!-- زر رفع المنتج باللون الأخضر -->
                    <button name="upload">رفع المنتج✅</button>
                </div>
                <!-- رفع ملف الصورة يكون غير مرئي ولكن عند اختيار الصورة سيظهر-->
                <input type="file" id="file" name="image" style="display:none;" required>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer By Walaa</p>
    </center>
</body>
</html>

