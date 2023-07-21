<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\NicknameReplacer;

$text = "@But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was 
        born and I will give you a complete @account of the system, and @expou1n123d1 the actual teachings of the great 
        explorer of the truth, the master-builder of human @12happiness. No one rejects, dislikes, or avoids pleasure itself, 
        because it is pleasure, but because those who do not know how @to pursue pleasure rationally encounter consequences 
        that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, 
        because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great 
        pleasure. To take a trivial example, which of us ever undertakes laborious physical @exercise\n, 
        except to obtain some advantage from it?@But who has any right to find fault with a man who chooses to enjoy a pleasure 
        that has no annoying consequences, or one who avoids a pain that produces no resultant @pleasure?";

$highlighter = new NicknameReplacer();
$highlightedText = $highlighter->highlight_nicknames($text);
echo $highlightedText;