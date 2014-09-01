<?php

$quotes = array
    ("Imagination is EVERYTHING. It is the preview of life's coming attractions.","Albert Einstein",
	"Power tends to corrupt and absolute power corrupts absolutely.",
        "Lord Acton",
		"And if you gaze for long into an abyss, the abyss gazes also into you. ",
		"Friedrich Nietzsche",
		
    "Drawing is the honesty of the art. There is no possibility of cheating. It is either good or bad. " ,
        "Salvadore Dali",
    "Only those who attempt the absurd will achieve the impossible. I think it's in my basement... let me go upstairs and check.",
        "M. C. Escher",
    "Who looks outside, dreams; who looks inside, awakes. ",
        "Carl Jung",
    "You must not lose faith in humanity. Humanity is an ocean; if a few drops of the ocean are dirty, the ocean does not become dirty. ",
        "Mohandas Gandhi",
    "One good thing about music, when it hits you, you feel no pain. ",
        "Bob Marley",
    "The ladder of success is best climbed by stepping on the rungs of opportunity.",
        "Ayn Rand",
    "Anyone who has never made a mistake has never tried anything new.",
        "Albert Einstein",
      "The only way to have a friend is to be one." ,
        "Ralph Waldo Emerson",
    "Those who dream by day are cognizant of many things which escape those who dream only by night." ,
        "Edgar Allan Poe",
    "Live out of your imagination, not your history. ",
        "Stephen Covey",
    "Work as though you were to live 100 years; pray as if you were to die tomorrow.",
        "Benjamin Franklin",
    "The world is a stage, but the play is badly cast.",
        "William Shakespeare",
    "Those who make peaceful revolution impossible will make violent revolution inevitable. ",
        "John F. Kennedy",
    "Wars have never hurt anybody except the people who die. ",
        "Salvador Dali",
    "If the world was perfect, it wouldn't be. ",
        "Yogi Berra",
    "Democracy is the worst form of government except for all the others.",
        "Winston Churchill",
   "I am a winner each and every time I go into the ring.",
   "George Foreman",
   "He who is not courageous enough to take risks will accomplish nothing in life. ",
   "Muhammad Ali",
   "The future ain't what it used to be.",
   "Yogi Berra",
   "Some men see things as they are and say why? I dream things that
   never were and say Why not?",
   "Robert F. Kennedy",
   "Be who you are and say what you feel, because those who mind don't
   matter and those who matter don't mind.",
   "Dr. Suess",
   "Be the change you wish to see in the world.",
 "Mohandas Gandhi",
   "Everywhere is within walking distance if you have the time.",
 "Steven Wright",
 "Fear leads to anger, Anger leads to hate, Hate leads to Suffering.",
 "Yoda",
 "First they ignore you, then they laugh at you, then they fight you, then you win.",
 "Mohandas Ghandi",


        );

// Gets the Total number of Items in the array
//  Divides by 2 because there is a Quote followed by an Author
$quotes = (count($quotes)/2);

// Subtracted 1 from the total because '0' is not accounted for otherwise
$nmbr = (rand(0,($totalqts-1)));
$nmbr = $nmbr*2;

$quote = $quotes[$nmbr];
         $nmbr = $nmbr+1;
$author = $quotes[$nmbr];





echo "<div id='quote'>";
echo "$quote<br /><br />";
echo "<div id='author'>";
echo "$space $author";
echo "</div>";

echo "</div>";


?>
