
<!DOCTYPE html>
<html>
	<head>
		<title>The Classic Snake Game</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
        <script type="text/javascript" src="game.js"></script>

	</head>

	<body>

		<div id="content">
			<div id="intro">

                <div id="intropage1">
				    <h1>The Classic Snake Game</h1>
                    <button onclick="showNext()">Play</button>
				</div>
				
				<div id="intropage2" onkeydown="if(event.keyCode == 13) loadGame()">
					<input type="text" id="userid" placeholder="First Name" name="fname" size="14"><br/><br/>
					<button onclick="loadGame()">Enter</button>
				</div>

                <div id="intropage3">
                    <p><br><br>Loading...</p>
                    <button onclick="loadGame()">Replay</button>
                </div>
					
			</div>

			<canvas id="myCanvas" width="400" height="400">
				If you see this, your browser does not support canvas.
			</canvas>
			<div id="score">
				Score: 0 | Lives: 3
			</div>

            <div id="instructions">
                <details>
                    <summary>How to Play</summary>
                    <h2>Move: Arrow Keys</h2>
                    Left: Move Left<br>
                    Right: Move Right<br>
                    Down: Move Down<br>
                    Up: Move Up<br>

                    <h2>Score Points: Eat Apple</h2>
                    <p>You will see a red square. That is your apple! Head towards it and grab a bite!</p>


                    <h2>Avoid: The Wall & Eating Yourself</h2>
                    <h3>Total Lives: 3</h3>
                    <p>If the head of the snake bumps against the wall or against any part of the snake's body, you die.</p>
                    <p>After 3 lives are gone, it's GAME OVER</p>
                </details>
            </div>

            <div id="credit"><p>Game Designed by <a href="http://www.fokoye.com">Faithful Uchenna Okoye</a><p>Sound By: <a href="http://www.freesound.org">FreeSound.org</a></p> </p></div>

        </div>






		
		
	</body>

</html>