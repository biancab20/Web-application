<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework Page</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 2800px;
        }
        header, footer {
            background-color: #333;
            width: 100%;
        }
        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
        }
        .section {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid white;
            border-radius: 10px;
            width: 90%;
            box-sizing: border-box;
        }
        .left-section {
            align-self: flex-start;
        }
        .right-section {
            align-self: flex-end;
        }
        .centered {
            text-align: center;
        }
        .image-container {
            width: 100%;
            height: 400px;
            border-radius: 10px;
            background-color: #444; /* Placeholder color */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .image-container img {
            width: auto;
            height: 100%;
        }
        h2, p {
            margin: 10px 0;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
            color: white;
            cursor: pointer;
        }
        .button.red { background-color: red; }
        .button.blue { background-color: blue; }
        .button.yellow { background-color: yellow; }
        .box-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .box {
            width: 30%;
            background-color: #666;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <header><?php include __DIR__ . '/../header.php'; ?></header>
    <div class="container">
        <div class="section">
            <div class="image-container">
                <div style="width: 80%; height: 80%; background-color: #666;"></div> <!-- Rectangle shape for image -->
            </div>
            <h2>Subtitle 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="section right-section">
            <h2>Subtitle 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="section">
            <div class="image-container">
                <div style="width: 80%; height: 80%; background-color: #666;"></div> <!-- Rectangle shape for image -->
            </div>
            <h2>Subtitle 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="section left-section">
            <h2>Subtitle 4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="section centered">
            <div class="image-container">
                <div style="width: 40%; height: 80%; background-color: #666; margin-right: 10px;"></div> <!-- Rectangle shape for image 1 -->
                <div style="width: 40%; height: 80%; background-color: #666;"></div> <!-- Rectangle shape for image 2 -->
            </div>
            <h2>Subtitle 5</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="section right-section">
            <h2>Subtitle 5</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
        <div class="section">
            <div class="box-container">
                <div class="box">
                    <h2>Box 1</h2>
                    <p>This is the content of Box 1.</p>
                    <button class="button red">Button 1</button>
                </div>
                <div class="box">
                    <h2>Box 2</h2>
                    <p>This is the content of Box 2.</p>
                    <button class="button blue">Button 2</button>
                </div>
                <div class="box">
                    <h2>Box 3</h2>
                    <p>This is the content of Box 3.</p>
                    <button class="button yellow">Button 3</button>
                </div>
            </div>
        </div>
        <div class="section left-section">
            <h2>Subtitle 4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <footer><?php include __DIR__ . '/../footer.php'; ?></footer>
</body>
</html>
