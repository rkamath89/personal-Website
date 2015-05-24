<?php
			// the message
			$msg = "First line of text\nSecond line of text";
			$name = $_POST["exampleInputName"];
			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,70);

			// send email
			mail("rahul.p.kamath@gmail.com","My subject",$msg);
			echo $name;
			?>