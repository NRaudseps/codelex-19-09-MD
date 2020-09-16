<?php declare(strict_types=1);

class AsciiFigure
{
    //The number of rows
    const SIZE = 10;

    //Both slashes are subtracted by four because on each side the number of dots grow by four
    public static function drawForwardSlashes(int $size): string
    {
        $slash = '';
        //Draws (Size * 4) slashes and then cuts the next one by four.
        for ($i = $size; $i > 0; $i--) {
            $slash .= '////';
        }

        return $slash;
    }

    public static function drawBackSlashes(int $size): string
    {
        $slash = '';
        //Same as before
        for ($i = $size; $i > 0; $i--) {
            //I can't simply add a backslash in a string
            //For each slash i have to add a symbol so it recognizes this as a string
            //And then trim that symbol
            for ($j = 0; $j < 4; $j++) {
                $slash .= "\a";
                $slash = rtrim($slash, 'a');
            }
        }

        return $slash;
    }

    public static function drawDots(int $size): string
    {
        $dots = '';
        //Every loop the number of dots grows by 8
        for ($i = 0; $i < $size; $i++) {
            $dots .= '........';
        }

        return $dots;
    }

    public static function draw(): void
    {
        //For loop for each row
        for ($i = 0; $i < self::SIZE; $i++) {
            $dots = self::drawDots($i); // Gets the dots
            //I don't know why but in order for it to work I have to put in $i - 1 instead of $i
            $drawing = self::drawForwardSlashes(self::SIZE - $i - 1) . $dots . self::drawBackSlashes(self::SIZE - $i - 1) . PHP_EOL;
            echo $drawing;
        }
    }
}

AsciiFigure::draw();