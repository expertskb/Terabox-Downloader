<!DOCTYPE html>
<html>
<head>
    <title>TeraBox</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7fafc;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #4a90e2;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .footer {
            background-color: #4a90e2;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="text-2xl font-bold"><a href="/">TeraBox</a></h1>
    </div>
          <br><br />
    <div class="container mt-8">
        <form action="/file.asp" method="get">
            <fieldset class="border p-6 rounded-md shadow-md">
                <legend class="text-lg font-semibold mb-4">File Details</legend>
                <div class="mb-6">
                    <label class="block text-sm font-medium" for="url">File Url:</label>
                    <input class="w-full border rounded-md px-3 py-2" type="text" name="url" id="url" required>
                </div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" type="submit">Submit</button>
            </fieldset>
        </form>
    </div>
    <div class="footer">
        <p>&copy; <?= date("Y"); ?> TeraBox App - Developed by <a href="//shakib.eu.org">Shakib Ahmed</a></p>
    </div>
</body>
</html>