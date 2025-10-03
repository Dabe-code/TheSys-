<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example - Laravel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 100%;
        }
        
        h1 {
            color: #667eea;
            margin-bottom: 10px;
            font-size: 2.5em;
        }
        
        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1em;
        }
        
        .info-box {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 15px 20px;
            margin: 15px 0;
            border-radius: 5px;
        }
        
        .info-box strong {
            color: #667eea;
            display: block;
            margin-bottom: 5px;
        }
        
        .items-list {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        
        .items-list h3 {
            color: #856404;
            margin-bottom: 10px;
        }
        
        .items-list ul {
            list-style: none;
            padding-left: 0;
        }
        
        .items-list li {
            padding: 5px 0;
            color: #856404;
        }
        
        .items-list li:before {
            content: "🍎 ";
            margin-right: 8px;
        }
        
        .calculation {
            background: #d1ecf1;
            border-left: 4px solid #17a2b8;
            padding: 15px 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        
        .calculation strong {
            color: #0c5460;
        }
        
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s;
        }
        
        .back-link:hover {
            background: #764ba2;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .badge {
            display: inline-block;
            background: #28a745;
            color: white;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 0.9em;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        {{-- This is a Blade comment - won't appear in HTML --}}
        
        <h1>{{ $greeting }}</h1>
        <p class="subtitle">PHP is running on the server! 🚀</p>
        
        <div class="info-box">
            <strong>📅 Current Server Time:</strong>
            {{ $currentTime }}
        </div>
        
        <div class="info-box">
            <strong>🎲 Random Number Generated:</strong>
            {{ $randomNumber }}
            <span class="badge">Refresh to see a new number!</span>
        </div>
        
        <div class="items-list">
            <h3>🛒 Fruits Array (from PHP)</h3>
            <ul>
                @foreach($items as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        
        <div class="calculation">
            <strong>🔢 PHP Calculation Result:</strong>
            <p>Sum of numbers from 1 to 10 = <strong>{{ $sum }}</strong></p>
        </div>
        
        {{-- Blade conditional --}}
        @if($randomNumber > 50)
            <div class="info-box" style="border-left-color: #28a745; background: #d4edda;">
                <strong style="color: #28a745;">✅ Lucky!</strong>
                Your random number ({{ $randomNumber }}) is greater than 50!
            </div>
        @else
            <div class="info-box" style="border-left-color: #dc3545; background: #f8d7da;">
                <strong style="color: #dc3545;">🎯 Try Again!</strong>
                Your random number ({{ $randomNumber }}) is 50 or less. Refresh for a new one!
            </div>
        @endif
        
        <a href="/" class="back-link">← Back to Home</a>
    </div>
</body>
</html>
