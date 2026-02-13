<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For You ❤️</title>
    <style>
        body {
            background: linear-gradient(to bottom, #111, #1a1a1a);
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 40px;
        }

        h1 {
            color: #ff9aa2;
        }

        .box {
            background: rgba(255,255,255,0.08);
            padding: 20px;
            border-radius: 15px;
            margin: 30px auto;
            max-width: 500px;
        }

        audio {
            width: 100%;
            margin-top: 10px;
        }

        video {
            width: 100%;
            margin-top: 10px;
        }

        p {
            font-size: 14px;
            color: #ccc;
        }

        video::cue {
    color: #ff9aa2;
    font-size: 18px;
    background: rgba(0,0,0,0.6);
}
    </style>
</head>
<body>

    <h1>Hi Love ❤️</h1>
    <p>This website is just for you.</p>

    <!-- VOICEMAIL WITH SUBTITLES -->
    <div class="box">
        <h2>📞 My Voicemail</h2>

        <!-- Video tag is used so subtitles work -->
        <video controls>
            <source src="voicemail.mp3" type="audio/mpeg">
            <track src="subtitles.vtt" kind="subtitles" srclang="en" label="English" default>
            Your browser does not support the audio element.
        </video>

        <p>Turn on captions if they don’t appear automatically 💬</p>
    </div>

    <!-- SONG VOICEMAIL -->
    <div class="box">
    <h2>🎶 As Long As You Love Me</h2>

    <video controls>
        <source src="feb.wav" type="audio/wav">
        <track src="aslongasyouloveme.vtt"
               kind="subtitles"
               srclang="en"
               label="Lyrics"
               default>
        Your browser does not support the media element.
    </video>

    <p>Turn on captions if they don’t appear 💬</p>
</div>

</body>
</html>
