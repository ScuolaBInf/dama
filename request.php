<?php
	function chessBuild()
		{
			$result = "";
			$file = fopen("chessboard.txt", "r");
			for($i = 0; !feof($file); $i++)
				{
					switch(fgetc($file))
						{
							case 'x':	$result = $result."<img src='black.png' id='".$i."' onClick='select(this.id)'>";
										break;
							case 'y':	$result = $result."<img src='white.png' id='".$i."' onClick='select(this.id)'>";
										break;
							case '0':	$result = $result."<img src='void1.png' id='".$i."''>";
										break;
							case '1':	$result = $result."<img src='void2.png' id='".$i."' onClick='move(this.id)'>";
										break;
							case '-':	$result = $result."<BR/>";
										$i--;
										break;
							case 'c':	$result."<img src='void2.png' id='".$i."' onClick='move(this.id)'>";
							default:	
										break;
						}
				}
			fclose($file);
			return $result;
		}
		
	switch($_REQUEST["q"])
		{
			case "chessboard": 	echo chessBuild(); 
								break;
			case "mod":			echo "yee";
								break;
			default: 			echo "Error";
								break;
		}
?>